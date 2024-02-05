<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Carrito;
use App\Models\Contiene;

class CarritoController extends Controller
{
    public function create(Request $request){
        $userId = session('usuario.id');
        $carrito = Carrito::where('id_usuario', $userId)->first();
        if (!$carrito) {
            Carrito::create([
                'id_usuario' => $userId,
                'total' => 0
            ]);
        }
    }

    public function addCarrito(Request $request)
    {
        if  (session('usuario'))
        {
            $userId = session('usuario.id');
            $carrito = Carrito::where('id_usuario', $userId)->first();
            $product = Producto::find($request->product_id);
            $contiene = Contiene::where('id_carrito', $carrito->id)->where('id_producto', $product->id)->first();
            if ($contiene){
                $contiene->cantidad += 1;
                $contiene->save();
            }
            else {
                Contiene::create([
                    'id_carrito' => $carrito->id,
                    'id_producto' => $product->id,
                    'cantidad' => 1
                ]);
                return response()->json(['success' => true]);
            }
        }
        else
        {
            return redirect('/login');
        }
    }

    public function index(){
        $userId = session('usuario.id');
        $carrito = Carrito::where('id_usuario', $userId)->first();
        $contiene = Contiene::where('id_carrito', $carrito->id)->get();
        $productos = [];
        foreach ($contiene as $c) {
            $producto = Producto::find($c->id_producto);
            $producto->cantidad = $c->cantidad;
            array_push($productos, $producto);
        }
        return view('carrito.index', ['productos' => $productos]);
    }
}
?>
