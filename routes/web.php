<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
    use App\Http\Controllers\RegistroController;
    use App\Http\Controllers\LoginController;

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


Route::get('/register',[RegistroController::class,'index'])->name('registro.index');

// ruta que me lleva al controlador para poder almacenar en la base de datos
Route::post('/registro',[RegistroController::class,'store']);
Route::get('/login',[LoginController::class,'index'])->name('login.index');
Route::post('/login/',[LoginController::class,'store'])->name('logear');

// ruta que mustra la vista con la informacion de los usuarios, que se trae desde la BD
Route::get('/muro',[UsuarioController::class,'index']) ->name('usuarios.index');

Route::delete('/muro/{id}',[RegistroController::class, 'destroy']) ->name('eliminar.index');

Route::get('/muro/{id}/editar',[RegistroController::class, 'edit']) -> name('editar.index');

Route::put('/muro/{id}',[RegistroController::class,'update'])->name('actualizar');

