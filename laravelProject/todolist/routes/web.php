<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';*/

Route::get('usuario', [\pp\Http\Controllers\UsuarioController::class, 'index'])->name('usuario');

require __DIR__.'/auth.php';

Route::get('/', function () {
  return view('usuario');
});

Route::get('/tarea', function () {
  return view('tarea');
});

Route::view('tarea', [App\Http\Controllers\TareaController::class, 'show'])->name('tarea');

//Route::get("tarea", [TareaController::class, 'show']);


Route::get('/etiqueta', function () {
  return view('etiqueta');
});

Route::view('etiqueta', [App\Http\Controllers\EtiquetaController::class, 'show'])->name('tarea');

Route::get("etiqueta", [EtiquetaController::class, 'show']);
