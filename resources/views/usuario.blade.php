@include('layouts.master')

<title> Administrar {{$usuario->nombre}}  </title>

<div class="container">
    <br><h1> Editar Usuario </h1>

    <form action="{{action('UserController@updateUser', [$usuario->id])}}" method="POST">
        @csrf
        {{ method_field('PUT') }}

        <table class="table table-striped">
            <tr>
                <td>
                    <label>Usuario: </label>
                    <br><input type="text" name="nombre" id="nombre" value="{{$usuario->nombre}}">
                </td>
                <td>
                    <label>Contraseña: </label>
                    <br><input type="password" name="password" id="password" value="{{$usuario->password}}">
                    <input type="hidden" name="oculto" value="valor">
                </td>
            </tr>

            <tr>
                <td>
                    <label>DNI: </label>
                    <br><input type="text" name="dni" id="dni" value="{{$usuario->DNI}}">    
                </td>
                <td>
                    <label>Dirección: </label>
                    <br><input type="text" name="direccion" id="direccion" value="{{$usuario->direccion}}">
                </td>
            </tr>
            
            <tr>
                <td>
                    <label>Email: </label>
                    <br><input type="text" name="email" id="email" value="{{$usuario->email}}">
                </td>
                <td>
                    <label>Teléfono: </label>
                    <br><input type="text" name="tlf" id="tlf" value="{{$usuario->telefono}}">
                </td>
            </tr>
            
        </table>

        <button type="submit" class="btn btn-primary"> Actualizar</button>
    </form>

    @if (count($errors) > 0)
        <label>Error al introducir los datos</label>
    @endif
</div>