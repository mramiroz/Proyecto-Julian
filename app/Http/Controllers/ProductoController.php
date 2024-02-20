<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;

class ProductoController extends Controller
{
    public function index(){
        $productos = Producto::all();
        $categorias = Categoria::all();
        return view('productos.index', ['productos' => $productos, 'categorias' => $categorias]);
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
        $categorias = Categoria::all();
        $categoria = Categoria::where('route', $seccion)->first();
        $idCategoria = $categoria->id;
        $productos = Producto::all()->where('id_categoria', $idCategoria);
        return view('productos.index', ['productos' => $productos, 'categoria' => $categoria, 'categorias' => $categorias]);
    }
    public function crear(){
        $categorias = Categoria::all();
        return view('productos.crear' , ['categorias' => $categorias]);
    }
    public function edit($id){
        $producto = Producto::find($id);
        return view('productos.edit', ['producto' => $producto]);
    }
    public function editar()
    {
        $productos = Producto::all();
        return view('productos.editar', ['productos' => $productos]);
    }
}

