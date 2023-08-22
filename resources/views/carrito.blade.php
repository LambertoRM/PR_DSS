@include('layouts.master')

<div class="container">

    <h1> Carrito </h1>

    <table class="table table-striped">
        <tr> 
            <td> <strong> Usuario </strong> </td> 
            <td> <strong> Cantidad </strong> </td>
            <td> <strong> Precio </strong> </td>
        </tr>
        @foreach($carritos as $car)
            <tr>
                <td> {{$car->usuario->nombre}} </td>
                <td> {{$car->cantidad}} </td>
                <td> {{$car->precio_total}} </td>
            <tr>
        @endforeach
    </table>
</div>