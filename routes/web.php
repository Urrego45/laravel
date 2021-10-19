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
    return view('auth.login');
});


Route::get('/app', function () {return view('app.index');});


// PERDIDAS
Route::get('/app/perdida', [PerdidasController::class, 'index'])->name('perdida.index');

Route::delete('/app/perdida/{id}', [PerdidasController::class, 'destroy'])->name('perdida.destroy');



// FACTURAS
Route::get('/app/factura', [FacturasController::class, 'index'])->name('factura.index');

Route::post('/app/factura', [FacturasController::class, 'store'])->name('factura.store');


Route::get('/app/factura/{id}', [FacturasController::class, 'show'])->name('factura.show');

Route::patch('/app/factura/{id}', [FacturasController::class, 'update'])->name('factura.update');

Route::delete('/app/factura/{id}', [FacturasController::class, 'destroy'])->name('factura.destroy');

// USUARIOS
Route::get('/app/usuario', [UsuariosController::class, 'index'])->name('usuario.index');

Route::post('/app/usuario', [UsuariosController::class, 'store'])->name('usuario.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
