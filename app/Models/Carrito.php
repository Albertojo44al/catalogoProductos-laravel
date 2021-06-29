<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;

    protected $table = 'carrito';

    // Relacion uno a muchos
      public function carrito_detalle(){
        return $this->hasMany('App\Models\CarritoDetalle');
    }

    // relacion uno a muchos
      public function productos(){
        return $this->hasMany('App\Models\Producto');
    }

    // relacion de muchos a uno
      public function usuario(){
        return $this->belongsTo('App\Models\Usuario','usuario_id');
    }
}
