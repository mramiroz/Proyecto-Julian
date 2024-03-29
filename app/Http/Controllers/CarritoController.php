<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
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
    public function delete(Request $request){
        $userId = Auth::id();
        $carrito = Carrito::where('id_usuario', $userId)->first();
        $contiene = Contiene::where('id_carrito', $carrito->id)->where('id_producto', $request->product_id)->first();
        $producto = Producto::find($request->product_id);
        $carrito->total = $carrito->total - ($contiene->cantidad * $producto->importe);
        $carrito->save();
        $contiene->delete();
    }

    public function addCarrito(Request $request)
    {
        if  (!Auth::check())
        {
            return redirect('/login');
        }
        else{
            $userId = Auth::id();
            $carrito = Carrito::where('id_usuario', $userId)->first();
            $product = Producto::find($request->product_id);
            $contiene = Contiene::where('id_carrito', $carrito->id)->where('id_producto', $product->id)->first();
            if ($contiene){
                $contiene->cantidad += 1;
                $carrito->total = $carrito->total + $product->importe;
                $contiene->save();
                $carrito->save();
            }
            else {
                Contiene::create([
                    'id_carrito' => $carrito->id,
                    'id_producto' => $product->id,
                    'cantidad' => 1
                ]);
                $carrito->total = $carrito->total + $product->importe;
                $carrito->save();
            }
        }

    }

    public function index(){
        if (!Auth::check()){
            return redirect('/login');
        }
        else{
            $userId = Auth::id();
            $carrito = Carrito::where('id_usuario', $userId)->first();
            $contiene = Contiene::where('id_carrito', $carrito->id)->get();
            $total = 0;
            $productos = [];
            foreach ($contiene as $c) {
                $producto = Producto::find($c->id_producto);
                $producto->cantidad = $c->cantidad;
                $importe = (float) $producto->importe;
                $cantidad = (int) $c->cantidad;
                $total += $importe * $cantidad;
                array_push($productos, $producto);
            }
            $carrito->total = $total;
            $carrito->save();
            return view('carrito.index', ['productos' => $productos, 'total' => $total, "contiene" => $contiene]);
        }
    }


    public function getCount()
    {
        $usuarioId = Auth::id();
        $count = DB::table('contiene')->where('id_carrito', $usuarioId)->count();
        return response()->json(['count' => $count]);
    }

    public function updateTotal(Request $request){
        $producto = Producto::find($request->id_producto);
        $contiene = Contiene::where('id_producto', $producto->id)->first();
        $carrito = Carrito::where('id', $contiene->id_carrito)->first();
        $contiene->cantidad = $request->cantidad;
        $carrito->save();
        $contiene->save();
        return response()->json(['newTotal' => $carrito->total]);
    }
}
