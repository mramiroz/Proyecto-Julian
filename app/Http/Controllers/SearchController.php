<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $categorias = Producto::all();
        $query = $request->get('query');
        $productos = Producto::where('nombre', 'LIKE', "%$query%")
            ->orWhere('descripcion', 'LIKE', "%$query%")
            ->orWhere('categoria', 'LIKE', "%$query%")
            ->paginate(10);
        return view('productos.index', ['productos' => $productos, 'categorias' => $categorias])->render();
    }
    public function autocomplete(Request $request)
    {
        $query = $request->get('query');
        $productos = Producto::where('nombre', 'LIKE', "%$query%")
            ->orWhere('descripcion', 'LIKE', "%$query%")
            ->orWhere('categoria', 'LIKE', "%$query%")
            ->get();
        return response()->json($productos);
    }
};
