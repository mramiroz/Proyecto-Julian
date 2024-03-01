<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Contiene;
use App\Models\Ticket;
use App\Models\Producto;

class PagoController extends Controller
{
    public function procesarPago(Request $request)
    {
        $nombre = $request->input('cardholder-name');
        $numeroTarjeta = $request->input('card-number');
        $fechaVencimiento = $request->input('expiry-date');
        $cvc = $request->input('cvc');

        Log::info('Nombre del titular de la tarjeta: ' . $nombre);
        Log::info('Número de tarjeta: ' . $numeroTarjeta);
        Log::info('Fecha de vencimiento: ' . $fechaVencimiento);
        Log::info('CVC: ' . $cvc);

        return redirect()->route('pago.pagoRealizado');
    }
    public function index()
    {
        return view('pago.pago');
    }

    public function createTicket()
    {
        $usuario = Auth::user();
        $contiene = DB::table('contiene')->where('id_carrito', $usuario->id)->get();
        $carrito = DB::table('carritos')->where('id_usuario', $usuario->id)->first();
        $productos = [];
        foreach ($contiene as $c) {
            $producto = Producto::find($c->id_producto);
            array_push($productos, $producto);
        }
        Contiene::where("id_carrito", $usuario->id)->delete();
        return view('pago.pagoRealizado', ['usuario' => $usuario, 'carrito' => $carrito, 'contiene' => $contiene, 'productos' => $productos]);
    }
    public function devolverExito()
    {
        $user = Auth::id();
        Contiene::where("id_carrito", $user)->delete();
        return view('pago.pagoRealizado');
    }
}
