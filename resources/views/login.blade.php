@include('layouts.master')

<title> Login </title>

<div class="container">
    <br> <h1>Acceder</h1>
        <form>
            @csrf
            <table class="table table-striped">
                <td>
                    
                        <label>Usuario: </label>
                        <br><input type="text" name="nombre" id="nombre">
                    
                </td> 
                <td>
                        <label>Contraseña: </label>
                        <br><input type="password" name="password" id="password">
                        <input type="hidden" name="oculto" value="valor">
                    
                </td>
            </table>
            
            <button type="submit" class="btn btn-primary">Acceder</button>
            
        </form>

</div>
