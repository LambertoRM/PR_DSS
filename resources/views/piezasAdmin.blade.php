@include('layouts.master')
@section('title','Piezas')

<title> Piezas</title>

<div class="container">
<h1> Piezas </h1>

<form action="{{action('PiezaController@postPieza')}}" method="POST" enctype="multipart/form-data">
   @csrf
   <table class="table table-striped">
      <tr>
         <td>
            <label for="nombre">Nombre de la Pieza: </label>
            <br><input type="text" name="nombre" id="nombre" value="{{old('nombre')}}">
         </td>
         <td>
            <label for="num_serie">Número de serie: </label>
            <br><input type="text" name="num_serie" id="num_serie" value="{{old('num_serie')}}">
         </td>
      </tr>
      <tr>
         <td>
            <label for="precio">Precio: </label>
            <br><input type="text" name="precio" id="precio" value="{{old('precio')}}">
         </td>
         <td>
            <label for="descripcion">Descripción: </label>
            <br><input type="text" name="descripcion" id="descripcion" value="{{old('descripcion')}}">
         </td>
      </tr>
      <tr> 
         <td>    
            <label for="imagen">Imagen: </label>
            <br><input type="file" name="imagen" accept="image/png, image/jpg" value="{{old('imagen')}}">
         </td>
         <td>  
            <label for="categoria">Elige una categoria: </label> 
            <select name="categoria">
            @foreach ($categorias as $categoria)
               @if($categoria->id == 1)
                  <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
               @else
                  <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
               @endif
            @endforeach
            </select>
         </td>
      </tr>
   </table>
   <button type="submit" class="btn btn-primary">Dar de alta</button>
   
   @if (count($errors) > 0)
      <label>Error al introducir los datos</label></br>
   @endif
</form>
</div>

<div class="container" align="center">

   <br><h2> Listado de piezas </h2>

   <table class="table table-striped"> 
      <tr>
         <th>
            <a href="{{action('PiezaController@listPiezasAdmin', ['sort' => 'nombre']) }}"> Nombre </a>
         </th>
         <th>
            <a href="{{action('PiezaController@listPiezasAdmin', ['sort' => 'precio']) }}"> Precio </a>
         </th>
      </tr>
      @foreach($piezas as $pieza)
         <tr>
            <td>
               <a href="{{ action('PiezaController@showPieza', [$pieza->id]) }}"> {{$pieza->nombre}} </a>
            </td>
            <td>
               {{$pieza->precio}} €
            </td>
            <td>
               <form action="{{ action('PiezaController@deletePieza', [$pieza->id]) }}" method="POST"> 
               @csrf
                  {{ method_field('DELETE') }}
                  <button type="submit" class="btn btn-primary">Eliminar</button>
               </form>
            </td>
            <td>
               <form action="{{ action('PiezaController@updatePieza', [$pieza->id]) }}" method="GET"> 
               @csrf
                  <button type="submit" class="btn btn-primary">Editar</button>
               </form>
            </td>
         </tr>
      @endforeach
   </table>

   @if(isset($sort))
      {{ $piezas->appends(['sort'=>$sort])->links() }}
   @else
      {{ $piezas->links() }}
   @endif

</div>