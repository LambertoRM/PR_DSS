@include('layouts.master')
@section('title','Categorias')

<title> Categorias</title>

<div container="container">
<h1> Categorías </h1>

<h2> Dar de alta categoría </h2>

<form action="{{action('CategoriaController@postCategoria')}}" method="POST">
    @csrf
    <div class="container">
        <table class="table table-striped">
            <td>
                <label>Nombre de la Categoría: </label></br>
                <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}"></br>
            </td>
            <td>
                <label>Descripción: </label></br>
                <input type="text" name="descripcion" id="descripcion" value="{{ old('descripcion') }}"></br>
            </td>
        </table>
        <button type="submit" class="btn btn-primary">Dar de alta</button>
    </div>
</form>

@if (count($errors) > 0)
<br><label>Error al introducir los datos</label></br>
@endif
</div>
<br>

<div class="container">
    <h2> Listado de categorias </h2>

    <table class="table table-striped">
        <tr>
            <th>
                Nombre
            </th>

            <th>
                Descripción
            </th>
        </tr>
        @foreach($categorias as $categoria)
            <tr>
                <td>
                    {{$categoria->nombre}}
                </td>

                <td>
                    {{$categoria->descripcion}}
                </td>

                <td>
                    <form action="{{action('CategoriaController@deleteCategoria', [$categoria->id])}}" method="POST">
                        @csrf
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-primary">Eliminar</button>
                    </form>
                </td>

                <td>
                    <form action="{{action('CategoriaController@formUpdateCategoria', [$categoria->id])}}" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-primary">Editar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>