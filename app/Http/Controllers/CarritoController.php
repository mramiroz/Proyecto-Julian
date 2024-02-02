<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Carrito;
use App\Models\Contiene;

class CarritoController extends Controller
{
    public function addCarrito(Request $request)
    {
        $userId = session('usuario.id');
        $carrito = Carrito::where('id_usuario', $userId)->first();
        $product = Producto::find($request->product_id);
        $contiene = Contiene::where('id_carrito', $carrito->id)->where('id_producto', $product->id)->first();
        if ($contiene)
            $contiene->cantidad += 1;
        else {
            $contiene = new Contiene();
            $contiene->id_carrito = $carrito->id;
            $contiene->id_producto = $product->id;
            $contiene->cantidad = 1;
        }
        $contiene->save();

        return redirect()->back()->with('success', 'Producto añadido al carrito correctamente!');
    }
}
?>
