<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<style type="text/css">
    img{
        max-width: 200%;
        height: auto;
    }

    div{
        align: center;
        text-align: center;
    }

    td{
        vertical-align: middle;
        text-align : center;
    }
</style>

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <nav class="navbar navbar-dark bg-primary">
        <div>
            <a href="{{ action('NavegadorController@mostrarHome') }}"  class="text-white"> Home </a>
        
            <a href="{{ action('NavegadorController@mostrarLogin') }}" class="text-white"> Login/Logout </a>
        
            <a href="{{ action('UserController@showForm') }}" class="text-white"> Registro </a>
        
            <a href="{{ action('NavegadorController@mostrarPanelAdmin') }}" class="text-white"> Panel de Administrador </a>
        
            <a href="{{ action('CarritoController@showCarrito') }}" class="text-white">  Carrito </a>
        
        </div>
        </nav>

    </head>
    
</html>
