<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriaController extends Controller
{
    /**
     * Pagina lista de categorias
     */
    public function listCategorias(){
        $categorias = Categoria::orderBy('id')->get();

        return view('categorias', ['categorias' => $categorias ]);
    }

    public function showCategoria($id){
        $categoria = Categoria::find($id);

        return view('categoria', ['categoria' => $categoria ]);
    }

    public function postCategoria(Request $request){
        $categoria = new Categoria([]);

        $request->validate([
            'nombre' => 'required|unique:categorias|max:255',
            'descripcion' => 'required',
        ]);

        $categoria['nombre'] = $request->input('nombre');
        $categoria['descripcion'] = $request->input('descripcion');
        
        $categoria->save();
        
        return redirect()->action('CategoriaController@listCategorias');
    }

    public function deleteCategoria($id){
        $categoria = Categoria::find($id);

        if(count($categoria->piezas) > 0){
         
            foreach($categoria->piezas as $piezacat){

                //Eliminamos la imagen de la pieza
                $imagen = 'img/piezas/' . $piezacat->imagen;

                if(is_file($imagen)){//Primero comprobamos que la imagen existe
                    unlink($imagen);
                }
    
                $piezacat->delete();
            }
        }
        $categoria->delete();
        return redirect()->action('CategoriaController@listCategorias');
    }

    public function formUpdateCategoria($id){
        $categoria = Categoria::find($id);

        return view('categoria', ['categoria' => $categoria ]);
    }

    public function updateCategoria(Request $request, $id){

        $request->validate([
            'nombre' => 'required|unique:categorias|max:255',
            'descripcion' => 'required',
        ]);

        $categoria = Categoria::find($id);

        $categoria['nombre'] = $request->input('nombre');
        $categoria['descripcion'] = $request->input('descripcion');

        $categoria->save();
        
        return redirect()->action('CategoriaController@listCategorias');
    }
}
