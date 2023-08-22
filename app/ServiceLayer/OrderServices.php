<?php
namespace App\ServiceLayer;
use App\Pedido;
use App\Carrito;
use Illuminate\Support\Facades\DB;

/*use App\BusinessLogicLayer\DomainModel\ActiveRecord\Order;
use App\BusinessLogicLayer\DomainModel\ActiveRecord\OrderLine;
use App\BusinessLogicLayer\DomainModel\ActiveRecord\Product;*/

class OrderServices {
    public static function processOrder($id){
        $rollback = false;

        DB::beginTransaction();
        $pedido = Pedido::find($id)->pedido;
    }
}