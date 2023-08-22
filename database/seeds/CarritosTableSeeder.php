<?php

use Illuminate\Database\Seeder;
use App\Carrito;
use App\Usuario;
use App\Pieza;
use App\Pedido;

class CarritosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carrito = new Carrito([
            'cantidad'=>'2',
            'precio_total'=> '52.05',
        ]);

        $usuario = Usuario::find(1);
        $carrito->usuario()->associate($usuario);
        $pedido = Pedido::find(1);
        $carrito->pedido()->associate($pedido);


        $carrito->save();

        $carrito = new Carrito([
            'cantidad'=>'12',
            'precio_total'=> '1431.56',
        ]);

        $usuario = Usuario::find(2);
        $carrito->usuario()->associate($usuario);
        $pedido = Pedido::find(2);
        $carrito->pedido()->associate($pedido);


        $carrito->save();
    }
}
