<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index(){
        return view('usuario.index');
    }
    public function create(Request $request){
        $usuario = new Usuario();

        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->email = $request->email;

        $usuario->save();
        return redirect('/usuario');
    }
    public function pagoRealizado(){
        return view('usuario.pagoRealizado');
    }
    public function perfil(){
        return view('usuario.perfil');
    }
}
