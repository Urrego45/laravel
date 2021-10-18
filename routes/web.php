<?php

use App\Http\Controllers\FacturasController;
use App\Http\Controllers\PerdidasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\UsuariosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::post('/', [SessionsController::class, 'store'])->name('login.store');

Route::get('/app', function () {return view('app.index');});


// PERDIDAS
Route::get('/app/perdida', [PerdidasController::class, 'index'])->name('perdida.index');

// FACTURAS
Route::get('/app/factura', [FacturasController::class, 'index'])->name('factura.index');

// USUARIOS
Route::get('/app/usuario', [UsuariosController::class, 'index'])->name('usuario.index');
Route::post('/app/usuario', [UsuariosController::class, 'store'])->name('usuario.index');