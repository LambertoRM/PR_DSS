<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    public $timestamps=false;
    public function piezas() {
        return $this->belongsToMany('App\Pieza');
    }
    public function usuario() {
        return $this->belongsTo('App\Usuario');
    }

    public function pedido() {
        return $this->belongsTo('App\Carrito');
    }
}
