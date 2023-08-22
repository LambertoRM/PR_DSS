@include('layouts.master')

<title> Administrar {{$categoria->nombre}} </title>

<div container="container" align="center">
<form action="{{action('CategoriaController@updateCategoria', [$categoria->id])}}" method="POST">
    @csrf
    {{ method_field('PUT') }}
    <br><label>Nombre de la Categoría: </label></br>
    <input type="text" name="nombre" id="nombre" value="{{$categoria->nombre}}"></br>
    <br><label>Descripción: </label></br>
    <input type="text" name="descripcion" id="descripcion" value="{{$categoria->descripcion}}"></br>
    
    <br><button type="submit" class="btn btn-primary">Actualizar</button>
</form>

@if (count($errors) > 0)
<br><label>Error al introducir los datos</label></br>
@endif
<br>
<h1> {{$categoria->nombre}} </h1>
<h3> {{$categoria->descripcion}} </h3>
<div> Piezas asociadas: </div>

<table>
@foreach($categoria->piezas as $piezacat)
    <tr>
        <td>
            <a href="{{ action('PiezaController@showPieza', [$piezacat->id]) }}"> {{$piezacat->nombre}} </a></br>
        </td>
        
        <td> 
            <form action="{{ action('PiezaController@deletePieza', [$piezacat->id]) }}" method="POST"> 
                @csrf
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-primary">Eliminar</button>
            </form>
        </td>
    </tr>
@endforeach
</table>
</div>