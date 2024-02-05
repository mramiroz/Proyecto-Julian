<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class HomeController extends Controller
{
    public function __invoke(){
        $productos = Producto::all();
        return view('home', ['productos' => $productos, 'categorias' => $productos]);
    }
}
