<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavegadorController extends Controller
{
    public function mostrarLogin() {
        return view('login');
    }

    public function mostrarHome() {

        //return view('home');
        //No mostramos la vista 'home' porque solo hay un enlace a la vista 'piezas'
        return redirect()->action('PiezaController@listPiezas');
    }

    public function mostrarPanelAdmin() {
        return view('admin');
    }
}
