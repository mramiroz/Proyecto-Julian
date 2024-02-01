<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
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
            'email' => 'required',
            'password' => 'required',
        ]);
        $usuario = new Usuario();

        $usuario->nombre = $request->nombre;
        $usuario->apellidos = $request->apellidos;
        $usuario->categoria = $request->categoria;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password);

        $usuario->save();
        return redirect('/productos');
    }
    public function validarUsuario(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $usuario = Usuario::where('email', $request->email)->first();
        if($usuario){
            if(Hash::check($request->password, $usuario->password)){
                $request->session()->put('usuario', $usuario);
                return redirect('/productos');
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
