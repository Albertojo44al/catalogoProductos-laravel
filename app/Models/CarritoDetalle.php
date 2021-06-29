<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarritoDetalle extends Model
{
    use HasFactory;


    protected $table='carrito_detalle';

    // relacion de muchos a uno
    public function carrito(){
        return $this->belongsTo('App\Models\Carrito','carrito_id');
    }

    //relacion uno a uno
    public function producto(){
        return $this->hasOne('App\Models\Producto');
    }
}
