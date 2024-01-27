<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;

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

Route::get('/', [HomeController::class, '__invoke'])->name('home');

Route::prefix('productos')->group(function () {
    Route::get('/', [ProductoController::class, 'index'])->name('productos');
    Route::get('/create', [ProductoController::class, 'create'])->name('productos.create');
    Route::get('/{producto}', [ProductoController::class, 'show'])->name('productos.show');
});

