<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CarritoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', HomeController::class)->name('home');

Route::controller(ProductoController::class)->group(function () {
    Route::get('/productos', 'index')->name('productos');
    Route::get('/productos/crear', 'crear')->name('productos.crear');
    Route::post('/productos/create', 'create')->name('productos.create');
    Route::get('/productos/{seccion}', 'show')->name('productos.show');
});

Route::controller(UsuarioController::class)->group(function () {
    Route::get('/usuario', 'index')->name('usuario');
    Route::post('/usuario/create', 'create')->name('usuario.create');
    Route::get('/usuario/pagoRealizado', 'pagoRealizado')->name('usuario.pagoRealizado');
    Route::get('/login', 'login')->name('usuario.login');
    Route::get('/register', 'register')->name('usuario.register');
    Route::get('/usuario/perfil', 'perfil')->name('usuario.perfil');
    Route::post('/usuario/validarUsuario', 'validarUsuario')->name('usuario.validarUsuario');
});

Route::controller(CarritoController::class)->group(function () {
    Route::get('/carrito', 'index')->name('carrito');
    Route::post('/count', 'getCount')->name('carrito.count');
    Route::post('/carrito/add', 'addCarrito')->name('carrito.add');
});
