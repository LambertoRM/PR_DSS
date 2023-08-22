<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pieza;
use App\Categoria;

class PiezaController extends Controller
{
    /**
    * Pagina lista de piezas
    */
    public function listPiezas(Request $request){
        $sort = $request->query('sort');

        if(is_null($sort)){
            $piezas = Pieza::paginate(5);
            return view('piezas', ['piezas' => $piezas]);
        }
        else{
            $piezas = Pieza::orderBy($sort)->paginate(5);
            return view('piezas', ['piezas' => $piezas, 'sort' => $sort]);
        }
       
    }

    public function listPiezasAdmin(Request $request){
        $sort = $request->query('sort');
        $categorias = Categoria::orderBy('id')->get();

        if(is_null($sort)){
            $piezas = Pieza::paginate(5);
            return view('piezasAdmin', ['piezas' => $piezas, 'categorias' => $categorias]);
        }
        else{
            $piezas = Pieza::orderBy($sort)->paginate(5);
            return view('piezasAdmin', ['piezas' => $piezas, 'categorias' => $categorias, 'sort' => $sort]);
        }
    }

    /**
    * Pagina que visualiza una pieza concreta
    */
    public function showPieza($id){
        $pieza = Pieza::find($id);

        return view('pieza', [ 'pieza' => $pieza ]);
    }

    public function showForm($id){
        $pieza = Pieza::find($id);
        
        return view('pieza', [ 'pieza' => $pieza ]);
    }

    public function postPieza(Request $request){
        
        $request->validate([
            'nombre' => 'required|unique:piezas|min:4|max:30',
            'num_serie' => 'required|integer',
            'precio' => 'required|numeric',
            'descripcion' => 'required',
            'imagen' => 'unique:piezas',
        ]);

        $pieza = new Pieza([]);

        $pieza['nombre'] = $request->input('nombre');
        $pieza['num_serie'] = $request->input('num_serie');
        $pieza['precio'] = $request->input('precio');
        $pieza['descripcion'] = $request->input('descripcion');

        if($request->hasFile('imagen')){//Imagen de la pieza
            $imagen = $request->file('imagen');
            $imagen->move('img/piezas/', $imagen->getClientOriginalName());
            $pieza['imagen'] = $imagen->getClientOriginalName();
        }

        $categoria = Categoria::find($request->input('categoria'));
        $pieza->categoria()->associate($categoria);
        
        $pieza->save();
        
        return redirect()->action('PiezaController@listPiezasAdmin');
    }

    public function formUpdatePieza($id){
        $pieza = Pieza::find($id);
        $categorias = Categoria::orderBy('id')->get();

        return view('editarPieza', ['pieza' => $pieza], ['categorias' => $categorias]);
    }

    public function updatePieza(Request $request, $id){

        $request->validate([
            'nombre' => 'required|unique:piezas|min:4|max:30',
            'num_serie' => 'required|integer',
            'precio' => 'required|numeric',
            'descripcion' => 'required',
            'imagen' => 'unique:piezas',
        ]);

        $pieza = Pieza::find($id);

        $pieza['nombre'] = $request->input('nombre');
        $pieza['num_serie'] = $request->input('num_serie');
        $pieza['precio'] = $request->input('precio');
        $pieza['descripcion'] = $request->input('descripcion');
        
        if($request->hasFile('imagen')){//Imagen de la pieza, primero la borramos y luego se crea otra nueva
            $imagen = 'img/piezas/' . $pieza->imagen;
            unlink($imagen);

            $imagen = $request->file('imagen');
            $imagen->move('img/piezas/', $imagen->getClientOriginalName());
            $pieza['imagen'] = $imagen->getClientOriginalName();
        }

        $categoria = Categoria::find($request->input('categoria'));
        $pieza->categoria()->associate($categoria);

        $pieza->save();
        
        return redirect()->action('PiezaController@listPiezasAdmin'); 
        //return view('editarPieza', ['categorias' => $categorias]);
    }

    public function deletePieza($id){
        $pieza = Pieza::find($id);

        //Eliminamos la imagen de la pieza
        $imagen = 'img/piezas/' . $pieza->imagen;

        if(is_file($imagen)){//Primero comprobamos que la imagen existe
            unlink($imagen);
        }
    
        $pieza->delete();
        

        return redirect()->action('PiezaController@listPiezasAdmin');
    }

    public function searchPieza(Request $request){
        $request->validate([
            'search' => 'required',
        ]);
        
        $search = $request->input('search');
        $nombreSearch = $request->input('nombre');
        $num_serieSearch = $request->input('num_serie');

        if(($num_serieSearch != null) and ($nombreSearch != null)){
            return redirect()->action('PiezaController@listPiezas');
        }else if ($num_serieSearch != null){
            $pieza = Pieza::where('num_serie', '=', $search)->first();
        }else if($nombreSearch != null){
            $pieza = Pieza::where('nombre', '=', $search)->first();
        }else{
            return redirect()->action('PiezaController@listPiezas');
        }

        if($pieza == null){
            return redirect()->action('PiezaController@listPiezas');
        }else{
            $IDpieza = $pieza->id;
            return redirect()->action('PiezaController@showPieza', [$IDpieza]);
        }
    }

    /*
    public function postFormCarrito(Request $request, $id){
        $anyadir = $request->input('anyadir', '0');
        $pieza = Pieza::find($id);

        if($anyadir == 0){
            return view('pieza', [ 'pieza' => $pieza ]);
        }else{
            return redirect()->action('CarritoController@anyadirPieza', [$pieza]);
        }
    }
    */
}
