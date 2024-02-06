<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index(){
        $productos = Producto::all();
        return view('productos.index', ['productos' => $productos, 'categorias' => $productos]);
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
        $categorias = Producto::all();
        $productos = Producto::all()->where('categoria', $seccion);
        return view('home', ['productos' => $productos, 'categorias' => $categorias]);
    }
    public function crear(){
        $categorias = ["alimentacion", "bebidas", "limpieza", "cuidado personal"];
        return view('productos.crear' , ['categorias' => $categorias]);
    }
}

