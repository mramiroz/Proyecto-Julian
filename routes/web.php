<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;

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
    Route::get('/productos/create', 'create')->name('productos.create');
    Route::get('/productos/{seccion}', 'show')->name('productos.show');
    Route::get('/productos/alimentacion', 'show')->name('productos.show.alimentacion');
    Route::get('/productos/bebidas', 'show')->name('productos.show.bebidas');
    Route::get('/productos/limpieza', 'show')->name('productos.show.limpieza');
    Route::get('/productos/cuidado-personal', 'show')->name('productos.show.cuidado-personal');
});

Route::controller(UsuarioController::class)->group(function () {
    Route::get('/usuario', 'index')->name('usuario');
    Route::get('/usuario/create', 'create')->name('usuario.create');
    Route::get('/usuario/pagoRealizado', 'pagoRealizado')->name('usuario.pagoRealizado');
    //Route::get('/usuario/{usuario}', 'show')->name('usuario.show');
    Route::get('/usuario/perfil', 'perfil')->name('usuario.perfil');
});

