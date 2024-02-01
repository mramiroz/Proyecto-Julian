<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class CarritoController extends Controller
{
    public function addCarrito(Request $request)
    {
        $product = Producto::find($request->product_id);
        $carrito = session()->get('carrito', []);

        if (isset($carrito[$request->product_id])) {
            $carrito[$request->product_id]['quantity']++;
        } else {
            $carrito[$request->product_id] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1
            ];
        }

        session()->put('carrito', $carrito);

        return redirect()->back()->with('success', 'Producto añadido al carrito correctamente!');
    }
}
?>


?>
