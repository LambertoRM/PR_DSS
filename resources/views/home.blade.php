@include('layouts.master')

<html>
    
    <title> G5-03-DSS </title>

    <body>    
        <div  class="container" align="center">
        <br>
            <a href="{{ action('PiezaController@listPiezas') }}" class="btn btn-primary"> Listado de piezas </a>
        </div>

    </body>
</html>