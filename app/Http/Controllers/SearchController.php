<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $categorias = Categoria::all();
        $query = $request->get('query');
        $productos = Producto::where('nombre', 'LIKE', "%$query%")
            ->orWhere('descripcion', 'LIKE', "%$query%")
            ->paginate(10);
        return view('home', ['productos' => $productos, 'categorias' => $categorias])->render();
    }
    public function autocomplete(Request $request)
    {
        $query = $request->get('query');
        $productos = Producto::where('nombre', 'LIKE', "%$query%")
            ->orWhere('descripcion', 'LIKE', "%$query%")
            ->get();
        return response()->json($productos);
    }
};
