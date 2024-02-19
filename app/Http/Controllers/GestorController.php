<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class GestorController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('Gestor.plantillaGestor', compact('productos'));
    }

    public function create()
    {
        return redirect()->route('gestor.index');
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
        return view('plantillaGestor', compact('producto'));
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
