<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Contiene;
use Illuminate\Support\Facades\Auth;
use App\Models\Ticket;

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

        // Aquí es donde implementarías la lógica para procesar el pago con tu pasarela de pago.

        return redirect()->route('pago.pagoRealizado');
    }
    public function index()
    {
        return view('pago.pago');
    }
    
    public function createTicket()
    {
        $usuario = Auth::user();
        $contiene = DB::table('contiene')->where('id_usuario', $usuario->id);
        $carrito = DB::table('carrito')->find('id', $usuario->id)->first();
        return view('pago.ticket', ['usuario' => $usuario, 'productos' => $productos, 'carrito' => $carrito, 'contiene' => $contiene]);
    }
    public function devolverExito()
    {
        $user = Auth::id();
        Contiene::where("id_carrito", $user)->delete();
        return view('pago.pagoRealizado');
    }
}
