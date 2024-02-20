<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Carrito;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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

        $usuario = Usuario::create([
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'direccion' => $request->direccion,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        $usuario->carrito()->create([]);

        return redirect('/login');
    }

    public function validarUsuario(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }
    public function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }

    public function perfil(){
        if (!Auth::check()){
            return redirect('/login');
        }
        else{
            $usuario = Auth::user();
            return view('usuario.perfil', ['usuario' => $usuario]);
        }
    }
    public function pagoRealizado(){
        return view('usuario.pagoRealizado');
    }
    public function login(){
        return view('usuario.login');
    }

    public function register(){
        return view('usuario.register');
    }
}
