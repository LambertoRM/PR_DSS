@include('layouts.master')
@section('title','Piezas')

<title> Piezas</title>

<div class="container">

   <br><h1> Listado de piezas </h1>

   <form action="{{action('PiezaController@searchPieza')}}" method="POST" enctype="multipart/form-data">
      @csrf
      
      <label for="search"> Búsqueda por: </label> 
      
      <input type="text" name="search" id="search" value="{{old('search')}}">
      <button type="submit" class="btn btn-primary">Buscar</button>
      <br><input type="radio" name="nombre" id="nombre">Nombre
      <input type="radio" name="num_serie" id="num_serie">Número de serie
   </form>

   <table class="table table-striped">
      <tr>
         <th>
            <a href="{{action('PiezaController@listPiezas', ['sort' => 'nombre']) }}"> Nombre </a>
         </th>
         <th>
            <a href="{{action('PiezaController@listPiezas', ['sort' => 'num_serie']) }}"> Número de serie </a>
         </th>
         <th>
            <a href="{{action('PiezaController@listPiezas', ['sort' => 'precio']) }}"> Precio </a>
         </th>
      </tr>
      @foreach($piezas as $pieza)
         <tr>
            <td>
               <a href="{{ action('PiezaController@showPieza', [$pieza->id]) }}"> {{$pieza->nombre}} </a>
            </td>
            <td>
               {{$pieza->num_serie}}
            <td>
               {{$pieza->precio}} €
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