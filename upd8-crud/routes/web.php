<?php

use App\Http\Controllers\ClientesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('/clientes');
});

Route::controller(ClientesController::class)->group(function () {
    Route::get('/clientes', 'index')->name('clientes.index');
    Route::get('/clientes/novo', 'create')->name('clientes.create');
    Route::post('/clientes/adiciona', 'store')->name('clientes.store');
    Route::get('/clientes/edit/{cliente}', 'edit')->name('clientes.edit');
    Route::put('/clientes/update/{cliente}', 'update')->name('clientes.update');
    Route::delete('/clientes/destroy/{cliente}', 'destroy')->name('clientes.destroy');
});
