<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usuario\UsuarioController;
use App\Http\Controllers\Asesorium\AsesoriumController;
use App\Http\Controllers\Elemento\ElementoController;
use App\Http\Controllers\CategoriaElemento\CategoriaElementoController;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->resource('usuario', UsuarioController::class)
    ->names('usuario');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->resource('asesorium', AsesoriumController::class)
    ->names('asesorium');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->resource('elemento', ElementoController::class)
    ->names('elemento');

    Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->resource('categoriaelemento', CategoriaElementoController::class)
    ->names('categoriaelemento');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',

])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});