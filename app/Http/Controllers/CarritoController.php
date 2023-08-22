<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrito;
use App\Pieza;

class CarritoController extends Controller
{
    //
    public function showCarrito(/*$idUsuario*/){
        //Habría que mostrar el carrito del usuario en concreto
        //$carrito=Carrito::find('usuario_id'==$idUsuario); 
        $carritos = Carrito::orderBy('id')->get();;

        return view('carrito', ['carritos' => $carritos ]);
    }

    public function anyadirPieza($pieza){
       
        $carrito = new Carrito([]);
        $usuario = Usuario::find(1);

        $carrito['cantidad'] = '1';
        $carrito['precio_total'] = $pieza->precio;

        $carrito->usuario()->associate = $usuario;

        $carrito->save();
        
        return view('carrito');
    }
}
