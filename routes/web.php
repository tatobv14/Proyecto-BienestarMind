<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usuario\UsuarioController;
<<<<<<< HEAD
use App\Http\Controllers\Asesorium\AsesoriumController;
use App\Http\Controllers\Elemento\ElementoController;
use App\Http\Controllers\CategoriaElemento\CategoriaElementoController;
=======
>>>>>>> 12cc4bc03b4c420deb8022c9ec03e7c67fb84896

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->resource('usuario', UsuarioController::class)
    ->names('usuario');

<<<<<<< HEAD
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->resource('asesorium', AsesoriumController::class)
    ->names('asesorium');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->resource('elemento', ElementoController::class)
    ->names('elemento');

    Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->resource('categoriaelemento', CategoriaElementoController::class)
    ->names('categoriaelemento');
=======
>>>>>>> 12cc4bc03b4c420deb8022c9ec03e7c67fb84896

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',

])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
