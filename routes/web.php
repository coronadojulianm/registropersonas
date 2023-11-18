<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UsuariosController;


Route::get('/', function () {
    return view('auth.principal');
});


Route::get('/principal', [RegisterController::class,'index'])->name('registrar');
Route::post('/principal', [RegisterController::class,'store']);


Route::get('/usuarios', [UsuariosController::class, 'index'])->name('usuarios');

Route::delete('/usuarios/{id}', [UsuariosController::class, 'eliminarUsuario'])->name('usuarios.eliminar');

Route::get('/usuarios/pdf', [UsuariosController::class, 'generarPDF'])->name('usuarios.pdf');


