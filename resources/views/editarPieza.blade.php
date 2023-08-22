@include('layouts.master')

<title> Administrar {{$pieza->nombre}} </title>

<div class="container">
    <br> <h1> {{$pieza->nombre}} </h1>
    
    <form action="{{action('PiezaController@updatePieza', [$pieza->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        <div class="container">
        <table class="table table-striped">
            <tr>
                <td>
                    <label>Nombre de la Pieza: </label>
                    <br><input type="text" name="nombre" id="nombre" value="{{$pieza->nombre}}">
                </td>
                <td>
                    <label>Número de serie: </label>
                    <br><input type="text" name="num_serie" id="num_serie" value="{{$pieza->num_serie}}">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Precio: </label>
                    <br><input type="text" name="precio" id="precio" value="{{$pieza->precio}}">
                </td>
                <td>
                    <label>Descripción: </label>
                    <br><input type="text" name="descripcion" id="descripcion" value="{{$pieza->descripcion}}">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Imagen: </label> {{$pieza->imagen}}
                    <br><img src="{{ asset('img/piezas/' . $pieza->imagen) }}" alt="" width="193" height="130">
                    <br><input type="file" name="imagen" accept="image/png, image/jpg">
                </td>
                <td>
                    <br><br><label for="categoria">Elige una categoria: </label> 
                    <select name="categoria">
                    @foreach ($categorias as $categoria)
                    @if($categoria->id == $pieza->categoria_id)
                        <option value="{{$categoria->id}}" selected="">{{$categoria->nombre}}</option>
                    @else
                        <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                    @endif
                    @endforeach
                    </select>
                </td>
            </tr>
        </table>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        
        @if (count($errors) > 0)
            <br><label>Error al introducir los datos</label></br>
        @endif
        
        </div>
    </form>
</div>