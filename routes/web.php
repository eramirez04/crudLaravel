<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
    use App\Http\Controllers\RegistroController;

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
    return view('welcome');
});


Route::get('/registro',[RegistroController::class,'index'])->name('registro.index');


Route::post('/registro',[RegistroController::class,'store']);

Route::get('/muro',[UsuarioController::class,'index']) ->name('usuarios.index');

Route::post('/eliminar/{id}',[RegistroController::class,'destroy']) ->name('eliminar.index');

