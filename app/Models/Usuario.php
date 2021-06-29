<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';

    // relacion uno a muchos
    public function productos(){
        return $this->hasMany('App\Models\Producto');
    }

    // relacion uno a muchos
    public function carrito(){
        return $this->hasMany('App\Models\Carrito');
    }
}
