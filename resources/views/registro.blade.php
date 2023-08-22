@include('layouts.master')

<title> Registro </title>

<div class="container">
<h1> Registro </h1>

<form action="{{action('UserController@postUsuario')}}" method="POST">
    @csrf
    <table class="table table-striped"> 
        <tr>
            <td>
                <label>Usuario: </label></br>
                <input type="text" name="nombre" id="nombre">
            </td>
            <td>
                <label>Contraseña: </label></br>
                <input type="password" name="password" id="password">
                <input type="hidden" name="oculto" value="valor">
            </td>
        </tr>

        <tr>
            <td>
                <br><label>DNI: </label></br>
                <input type="text" name="dni" id="dni">    
            </td>
            <td>
                <br><label>Dirección: </label></br>
                <input type="text" name="direccion" id="direccion">
            </td>
        </tr>
        
        <tr>
            <td>
                <br><label>Email: </label></br>
                <input type="text" name="email" id="email">
            </td>
            <td>
                <br><label>Teléfono: </label></br>
                <input type="text" name="tlf" id="tlf">
            </td>
        </tr>
    </table>
    <br><button type="submit" class="btn btn-primary">Registrarse</button>
</form>

@if (count($errors) > 0)
<br><label>Error al introducir los datos</label></br>
@endif

</div>