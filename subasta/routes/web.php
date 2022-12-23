<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\Portal;
use App\Http\Controllers\Producto;
use App\Http\Controllers\Registro;
use App\Http\Controllers\Subasta;
//use App\Http\Controllers\Tablas;
use App\Http\Controllers\Usuario;

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

Route::post('/', Login::class);
Route::post('/productos', Producto::class);
Route::post('/registro', Registro::class);
Route::post('/portal', Portal::class);
Route::post('/subasta', Subasta::class);
Route::post('/usuario', Usuario::class);

/*Route::post('/', function() {
  return view('login');
});

Route::post('/registro', function() {
  return view('registro');
});

Route::post('/portal', function() {
  return view('portal');
});

Route::post('/subasta', function() {
  return view('subasta');
});*/
