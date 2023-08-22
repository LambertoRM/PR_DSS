<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Usuario extends Model
{
    protected $fillable = [
        'nombre', 'dni', 'password', 'direccion', 'tlf', 'email'
    ];
    
    public $timestamps=false;
    

    public function carritos() {
        return $this->hasOne('App\Carrito');
    }

    public function pedidos() {
        return $this->hasOne('App\Pedido');
    }
}
