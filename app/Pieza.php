<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Pieza extends Model
{
    public $timestamps=false;


    
    public function categoria() {
        return $this->belongsTo('App\Categoria');
    }

    public function carritos() {
        return $this->belongsToMany('App\Carrito');
    }

}
