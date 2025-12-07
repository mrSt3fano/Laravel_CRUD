<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

            //URI            VISTA blade.php
Route::view( 'gerencia' , 'superAdmin' )->middleware( ['auth' /* 'verified' */,'MDsuperadmin' ] )->name('gerenciaName');
Route::view( 'administrador' , 'admin' )->middleware( ['auth' /* 'verified' */ ,'MDadmin'])->name('administradorName');
Route::view( 'usuario' , 'dashboard' )->middleware( ['auth' /* 'verified' */ ,'MDnormal'])->name('usuarioName');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function(){
    Route::get('/productos', [ProductoController::class, 'index']);
    Route::get('/fomrCrea', [ProductoController::class, 'create']);
    Route::post('/reenviar', [ProductoController::class, 'store']);
    Route::get('/redirigir1', [ProductoController::class, 'show']);
    Route::get('/formUpdate/{id}', [ProductoController::class, 'edit']);
    Route::put('/verActualizado/{id}', [ProductoController::class, 'update']);
    Route::delete('/eliminar/{id}', [ProductoController::class, 'destroy']);
});




require __DIR__.'/auth.php';
