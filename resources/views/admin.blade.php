@include('layouts.master')

<html>
    
    <title> Panel Administrador </title>

    <body>    
        <div class="container">
        <br> 
            <a href="{{ action('PiezaController@listPiezasAdmin') }}" class="btn btn-primary"> Administrar piezas </a>    
            <a href="{{ action('UserController@listUsers') }}" class="btn btn-primary"> Administrar usuarios </a>
            <a href="{{ action('CategoriaController@listCategorias') }}" class="btn btn-primary"> Administrar categorias </a>
        </div>
    </body>
</html>