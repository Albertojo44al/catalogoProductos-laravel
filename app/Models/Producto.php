<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';

    // Relacion uno a muchos
    public function carrito_detalle(){
        return $this->hasOne('App\Models\CarritoDetalle');
    }

    // relacion de muchos a uno
    public function usuario(){
        return $this->belongsTo('App\Models\Usuario','usuario_id');
    }



}
