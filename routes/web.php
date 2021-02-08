<?php

use Illuminate\Support\Facades\Route;

//Controladores personalizados
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\NotificacionController;
use App\Http\Controllers\EncargadoController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\TecnicoController;
use App\Http\Controllers\CoordinadorController;

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

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/


require __DIR__.'/auth.php';

//Rutas a los paneles principales de cada rol


//Rutas para desempeñar funciones de encargado
Route::middleware(['auth','encargado'])->prefix('panel')->group(function(){
    Route::resource('encargado', EncargadoController::class);
    Route::post('/solicitud', [SolicitudController::class, 'store'])->name('solicitud.store');
    Route::resource('equipo', EquipoController::class);
});


//Rutas para actualizar solicitudes -- Acceso solo a encargados y tecnicos

Route::middleware(['auth'])->prefix('panel')->group(function(){
    Route::get('/solicitud/{solicitud}/edit', [SolicitudController::class, 'edit'])->name('solicitud.edit');
    Route::put('/solicitud/{solicitud}', [SolicitudController::class, 'update'])->name('solicitud.update');
    Route::delete('/solicitud/{solicitud}', [SolicitudController::class, 'destroy'])->name('solicitud.destroy');
});

Route::get('/solicitud/{solicitud}/edit', [SolicitudController::class, 'edit'])->name('solicitud.edit');
    Route::put('/solicitud/{solicitud}', [SolicitudController::class, 'update'])->name('solicitud.update');
    
//En caso no tener permisos, mostrar pagina de error
Route::get('panel/errorpermisos', function(){
    return view('errorPermisos');
})->name('errorPermisos');

//
Route::middleware(['auth', 'tecnico'])->prefix('panel')->group(function(){
Route::resource('tecnico', TecnicoController::class);
});

Route::middleware(['auth', 'coordinador'])->prefix('panel')->group(function(){
Route::resource('coordinador', CoordinadorController::class);
});

//Route::resource('notificaciones', NotificacionController::class)->middleware(['auth']);
