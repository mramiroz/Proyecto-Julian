<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;

class AdminController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('Gestor.index', compact('productos'));
    }

    public function create()
    {
        return view('Gestor.add', ['categorias' => Categoria::all()]);
    }

    public function store(Request $request)
    {
        $producto = Producto::create($request->all());
        return redirect()->route('gestor.index');
    }

    public function show($id)
    {
        return redirect()->route('gestor.index');
    }

    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        $categorias = Categoria::all();
        return view('Gestor.update', compact('producto'), compact('categorias'));
    }

    public function update(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->update($request->all());
        return redirect()->route('gestor.index');
    }

    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();
        return redirect()->route('gestor.index');
    }

}
