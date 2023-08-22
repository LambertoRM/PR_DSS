<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UserController extends Controller
{
    /**
    * Pagina lista de usuarios
    */
    public function listUsers(){
        $usuarios = Usuario::orderBy('id')->get();

        return view('usuarios', ['usuarios' => $usuarios ]);
    }

    /**
    * Pagina que visualiza un usuario concreto
    */
    public function showUser($id){
        $usuario = Usuario::find($id);

        return view('usuario', ['usuario' => $usuario ]);
    }

    public function showForm(){
        return view('registro');
    }

    public function postUsuario(Request $request){
        
        $request->validate([
            'nombre'=> 'required|unique:usuarios|min:3|max:255',
            'password' => 'required|min:8|max:24' ,
            'dni' => 'required|min:9|max:10' ,
            'direccion' => 'max:255' ,
            'tlf' => 'required|min:8' ,
            'email'=> 'required|email|unique:usuarios|max:255',
        ]);
        
        $usuario = new Usuario([]);

        $usuario['nombre']=$request->input('nombre');
        $usuario['password']=$request->input('password');
        $usuario['DNI']=$request->input('dni');
        $usuario['direccion']=$request->input('direccion');
        $usuario['telefono']=$request->input('tlf');
        $usuario['email']=$request->input('email');

        $usuario->save();
        
        return redirect()->action('UserController@listUsers');
    }

    public function deleteUser($id){
        $usuario = Usuario::find($id);

        $usuario->delete();
        return redirect()->action('UserController@listUsers');
    }

    public function formUpdateUser($id){
        $usuario = Usuario::find($id);

        return view('usuario', ['usuario' => $usuario ]);
    }

    public function updateUser(Request $request, $id){

        $request->validate([
            'nombre'=> 'required|unique:usuarios|min:3|max:255',
            'password' => 'required|min:8|max:24' ,
            'dni' => 'required|min:9|max:10' ,
            'direccion' => 'max:255' ,
            'tlf' => 'required|min:8' ,
            'email'=> 'required|email|unique:usuarios|max:255',
        ]);

        $usuario = Usuario::find($id);

        $usuario['nombre']=$request->input('nombre');
        $usuario['password']=$request->input('password');
        $usuario['DNI']=$request->input('dni');
        $usuario['direccion']=$request->input('direccion');
        $usuario['telefono']=$request->input('tlf');
        $usuario['email']=$request->input('email');

        $usuario->save();

        return redirect()->action('UserController@listUsers');
    }
}
