<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Carrito;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index(){
        return view('usuario.index');
    }
    public function create(Request $request){
        $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'direccion' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $usuario = new Usuario();

        $usuario->nombre = $request->nombre;
        $usuario->apellidos = $request->apellidos;
        $usuario->direccion = $request->direccion;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password);

        $usuario->save();

        $carrito = new Carrito();
        $carrito->id_usuario = $usuario->id;
        $carrito->total = 0;
        $carrito->save();
        return redirect('/usuario/login');
    }

    public function validarUsuario(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $usuario = Usuario::where('email', $request->email)->first();
        if($usuario){
            if(Hash::check($request->password, $usuario->password)){
                if ($request->session()->has('usuario')){
                    $request->session()->forget('usuario');
                }
                $request->session()->put('usuario', $usuario);
                return redirect('/');
            }else{
                return redirect('/usuario/login');
            }
        }else{
            return redirect('/usuario/login');
        }
    }

    public function pagoRealizado(){
        return view('usuario.pagoRealizado');
    }
    public function perfil(){
        return view('usuario.perfil');
    }

    public function login(){
        return view('usuario.login');
    }

    public function register(){
        return view('usuario.register');
    }
}
