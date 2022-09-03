<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorController;
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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/dashboard_slot', function () {
        return view('dashboard_slot');
    })->name('dashboard_slot');

    Route::get('/dashboard_slot_2', function () {
        return view('dashboard_slot_2');
    })->name('dashboard_slot_2');

    Route::get('/dashboard_slot_merge', function () {
        return view('dashboard_slot_merge');
    })->name('dashboard_slot_merge');

    Route::get('/dashboard_slot_component', function () {
        return view('dashboard_slot_component');
    })->name('dashboard_slot_component');

    Route::get('/dashboard_jet_component', function () {
        return view('dashboard_jet_component');
    })->name('dashboard_jet_component');

    Route::get('/system/libros', function(){
        return view('system.libros.index');
    });

    //Route::resource('system/autores', AutorController::class);
    Route::controller(AutorController::class)->group(function (){
        Route::get('/system/autores', 'index')->name('autores.index');
        Route::get('/system/autores/create', 'create')->name('autores.create');
        Route::get('/system/autores/{id}', 'show')->name('autores.show');
        Route::get('/system/autores/{id}/edit', 'edit')->name('autores.edit');

        Route::post('/system/autores/', 'store')->name('autores.store');
        Route::put('/system/autores/{id}', 'update')->name('autores.update');
        Route::delete('system/autores/{id}', 'destroy')->name('autores.destroy');
    });

    Route::get('/system/prestamos', function(){
        return view('system.prestamos.index');
    });

    Route::get('/system/usuarios', function(){
        return view('system.usuarios.index');
    });
});

Route::get('/mayor_de_edad', function (){
    return 'has accedido correctamente a esta ruta';
})->middleware('validadMayorDeEdad');

Route::get('/acceso_no_autorizado', function (){
    return 'Acceso no autorizado';
});

Route::get('/mayor_de_edad_autentificado', function (){
    $email = auth()->user()->email;
    return  "$email has accedido correctamente usuario autentificado";
})->middleware(['validarMayorDeEdadAutentificado', 'auth:sanctum']);
