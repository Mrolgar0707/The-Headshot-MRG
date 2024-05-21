<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\DetallesPedidoController;
use App\Http\Controllers\ProductosController;

// Rutas para usuarios
Route::resource('usuarios', UsuarioController::class);

// Agrupar rutas de pedidos y aplicar middleware de autenticación
Route::middleware(['auth'])->group(function () {
    Route::resource('pedidos', PedidosController::class);
});
// Rutas para detalles de pedidos
Route::resource('detalles_pedido', DetallesPedidoController::class);

// Rutas para productos
Route::resource('productos', ProductosController::class);

// Ruta principal
Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
