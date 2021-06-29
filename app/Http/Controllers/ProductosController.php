<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests;
use Symfony\Component\HttpFoundation\Response;

use App\Models\Producto;

class ProductosController extends Controller
{
    public function crearProducto(){
        return view('productos.crearProducto');
    }
}
