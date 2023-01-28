<?php

  use Illuminate\Support\Facades\Route;

  /*use App\Http\Controllers\LoginController;
  use App\Http\Controllers\PortalController;
  use App\Http\Controllers\ProductosController;
  use App\Http\Controllers\RegistroController;
  use App\Http\Controllers\SubastaController;
  use App\Http\Controllers\TablasController;
  use App\Http\Controllers\UsuariosController;*/

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

  Route::post('/', function() {
    return view('principal');
  });

  Route::post('/login', function() {
    return view('login');
  });

  Route::post('/registro', function() {
    return view('registro');
  });

  Route::post('/productos', function() {
    return view('productos');
  });

  Route::post('/subasta', function() {
    return view('subasta');
  });

  Route::post('/tablas', function() {
    return view('subasta');
  });

  Route::post('/usuario', function() {
    return view('usuario');
  });

  Route::post('/portal', function() {
    return view('portal');
  });

  /*Route::post('/login', 'LoginController@store');

  Route::post('/registro', 'RegistroController@store');

  Route::post('/portal', 'PortalController@store');

  Route::post('/productos', 'ProductosController@store');

  Route::post('/subasta', 'SubastaController@store');

  Route::post('/tablas', 'TablasController@store');

  Route::post('/usuario', 'UsuariosController@store');*/

?>
