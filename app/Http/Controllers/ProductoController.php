<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index(){
        return view('productos.index');
    }

    public function create(Request $request){
        $producto = new Producto();

        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->imagen = $request->imagen;
        $producto->importe = $request->importe;

        $producto->save();
    }

    public function show($producto){
        return view('productos.show', ['producto' => $producto]);
    }
}

