<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index(){
        $productos = Producto::where('categoria', 'alimentacion');
        return view('productos.index', ['productos' => $productos]);
    }

    public function create(Request $request){
        Producto::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'categoria' => $request->categoria,
            'imagen' => $request->imagen,
            'importe' => $request->importe
        ]);
    }
    public function show($seccion){
        $productos = Producto::all()->where('categoria', $seccion);
        return view('productos.index', ['productos' => $productos]);
    }
    public function crear(){
        $categorias = ["alimentacion", "bebidas", "limpieza", "cuidado personal"];
        return view('productos.crear' , ['categorias' => $categorias]);
    }
}

