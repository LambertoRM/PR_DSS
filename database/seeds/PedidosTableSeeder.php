<?php

use Illuminate\Database\Seeder;
use App\Pedido;
use App\Usuario;
use App\Carrito;

class PedidosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pedido = new Pedido([
            'fecha_pedido'=>'22/10/2018',
            'fecha_expedicion'=>'25/10/2018',
            'direccion'=>'Calle Pepito Nº3, San Vicente del Raspeig, Alicante, 03690',
            'precio_total'=>'22.18']);

        $usuario = Usuario::find(1);
        $pedido->usuario()->associate($usuario);
        


        $pedido->save();

        $pedido = new Pedido([
            'fecha_pedido'=>'23/10/2018',
            'fecha_expedicion'=>'26/10/2018',
            'direccion'=>'Calle Pepito Nº4, San Vicente del Raspeig, Alicante, 03690',
            'precio_total'=>'22.20']);

        $usuario = Usuario::find(2);
        $pedido->usuario()->associate($usuario);
      
       
      

     

        $pedido->save();


    }
}