@include('layouts.master')
@section('title','Usuarios')

<title> Usuarios </title>

<div class="container">
    <h1>Usuarios</h1>

    <h2> Dar de alta usuario </h2>

    <form action="{{action('UserController@postUsuario')}}" method="POST">
        @csrf
        
        <table class="table table-striped">
            <tr>
                <td>
                    <label for="nombre">Usuario: </label>
                    <br><input type="text" name="nombre" id="nombre" value="{{old('nombre')}}">
                </td>
                <td>
                    <label for="password">Contraseña: </label>
                    <br><input type="password" name="password" id="password">
                    <input type="hidden" name="oculto" value="valor">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="dni">DNI: </label>
                    <br><input type="text" name="dni" id="dni" value="{{old('dni')}}">    
                </td>
                <td>
                    <label for="direccion">Dirección: </label>
                    <br><input type="text" name="direccion" id="direccion" value="{{old('direccion')}}">
                </td>
            </tr>
            
            <tr>
                <td>
                    <label for="email">Email: </label>
                    <br><input type="text" name="email" id="email" value="{{old('email')}}">
                </td>
                <td>
                    <label for="tlf">Teléfono: </label>
                    <br><input type="text" name="tlf" id="tlf" value="{{old('tlf')}}">
                </td>
            </tr>
        </table>
        
        <button type="submit" class="btn btn-primary">Dar de alta</button>

        @if (count($errors) > 0)
            <label>Error al introducir los datos</label></br>
        @endif
        
    </form>
</div>
<br>
<div class="container">
<h2> Listado de Usuarios </h2>

    <table class="table table-striped">
        <tr>
            <th>
                Nombre Usuario
            </th>

            <th>
                Email
            </th>
    </tr>
    @foreach($usuarios as $usuario)
        <tr>
            <td>
                {{$usuario->nombre}}
            </td>

            <td>
                {{$usuario->email}}
            </td>

            <td>
                <form action="{{action('UserController@deleteUser', [$usuario->id])}}" method="POST">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-primary">Eliminar</button>
                </form>
            </td>

            <td>
                <form action="{{action('UserController@formUpdateUser', [$usuario->id])}}" method="GET">
                    @csrf
                    <button type="submit" class="btn btn-primary" >Editar</button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>
</div>