<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('pedidos', 'PedidoController@index');

Route::post('pedidos/importar', 'PedidoController@importar')->name('importar');

Route::get('pedidos/exportar', 'PedidoController@exportar')->name('exportar');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
