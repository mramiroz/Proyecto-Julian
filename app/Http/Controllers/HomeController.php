<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;

class HomeController extends Controller
{
    public function __invoke(){
        $productos = Producto::all();
        $categoria = Categoria::all();
        return view('home', ['productos' => $productos, 'categorias' => $categoria]);
    }
}
