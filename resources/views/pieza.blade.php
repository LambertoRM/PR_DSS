@include('layouts.master')


<title> {{$pieza->nombre}} </title>

<div class="container">
    <br> <h1> {{$pieza->nombre}} </h1>

    <table class="table table-striped"  vertical-align="middle">
        <tr>
            <th>
                Nombre
            </th>
            <th>
                Precio
            </th>
            <th>
                Imagen
            </th>
            <th>
                Descripcion
            </th>
        </tr>
        <tr>
            <td>
                {{$pieza->nombre}}
            </td>
            <td>
                {{$pieza->precio}} € 
            </td>
            <td>
                <img src="{{ asset('img/piezas/' . $pieza->imagen) }}" alt="" width="193" height="130">
            </td>
            <td>
                {{$pieza->descripcion}} 
            </td>
        </tr>
    </table>
    <!--<form action=" " method="POST">
        
        <button type="submit">Añadir a Carrito</button>
    </form>
    -->

</div>