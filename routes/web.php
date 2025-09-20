<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usuario\UsuarioController;
use App\Http\Controllers\Asesorium\AsesoriumController;
use App\Http\Controllers\Elemento\ElementoController;
use App\Http\Controllers\CategoriaElemento\CategoriaElementoController;
use App\Http\Controllers\Espacio\EspacioController;
use App\Http\Controllers\Ficha\FichaController;
use App\Http\Controllers\Permiso\PermisoController;
use App\Http\Controllers\Reservaelemento\ReservaelementoController;
use App\Http\Controllers\Reservaespacio\ReservaespacioController;
use App\Http\Controllers\Role\RoleController;
use App\Http\Controllers\RolesPermiso\RolesPermisoController;
use App\Http\Controllers\Sede\SedeController;


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
    
    Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->resource('espacio', EspacioController::class)
    ->names('espacio');

    Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->resource('ficha', FichaController::class)
    ->names('ficha');

    Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->resource('permiso', PermisoController::class)
    ->names('permiso');

    Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->resource('reservaelemento', ReservaelementoController::class)
    ->names('reservaelemento');

    Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->resource('reservaespacio', ReservaespacioController::class)
    ->names('reservaespacio');

    Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->resource('role', RoleController::class)
    ->names('role');

    Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->resource('rolespermiso', RolesPermisoController::class)
    ->names('rolespermiso');

    Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->resource('sede', SedeController::class)
    ->names('sede');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',

])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});