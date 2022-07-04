<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\MecanicosController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\Vehiculo;
use App\Http\Controllers\Reparacion;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/usuarios','UsuariosController@index')->name('usuarios');
Route::get('/usuarios/create','UsuariosController@create')->name('usuarios.create');
Route::post('/usuarios/store','UsuariosController@store')->name('usuarios.store');
Route::get('/usuarios/edit/{usu_id}','UsuariosController@edit')->name('usuarios.edit');
Route::post('/usuarios/update/{usu_id}','UsuariosController@update')->name('usuarios.update');
Route::post('/usuarios/destroy/{usu_id}','UsuariosController@destroy')->name('usuarios.destroy');

Route::get('mecanicos','MecanicosController@index')->name('mecanicos');
Route::get('/mecanicos/create','MecanicosController@create')->name('mecanicos.create');
Route::post('/mecanicos/store','MecanicosController@store')->name('mecanicos.store');
Route::get('/mecanicos/edit/{mec_id}','MecanicosController@edit')->name('mecanicos.edit');
Route::post('/mecanicos/update/{mec_id}','MecanicosController@update')->name('mecanicos.update');
Route::post('/mecanicos/destroy/{mec_id}','MecanicosController@destroy')->name('mecanicos.destroy');

Route::get('clientes','ClientesController@index')->name('clientes');
Route::get('/clientes/create','ClientesController@create')->name('clientes.create');
Route::post('/clientes/store','ClientesController@store')->name('clientes.store');
Route::get('/clientes/edit/{cli_id}','ClientesController@edit')->name('clientes.edit');
Route::post('/clientes/update/{cli_id}','ClientesController@update')->name('clientes.update');
Route::post('/clientes/destroy/{cli_id}','ClientesController@destroy')->name('clientes.destroy');

Route::get('vehiculo/{cli_id}','VehiculoController@index')->name('vehiculo');
Route::get('/vehiculo/create/{cli_id}','VehiculoController@create')->name('vehiculo.create');
Route::post('/vehiculo/store','VehiculoController@store')->name('vehiculo.store');
Route::get('/vehiculo/edit/{veh_id}','VehiculoController@edit')->name('vehiculo.edit');
Route::post('/vehiculo/update/{veh_id}','VehiculoController@update')->name('vehiculo.update');
Route::post('/vehiculo/destroy/{veh_id}','VehiculoController@destroy')->name('vehiculo.destroy');

Route::get('reparacion/{veh_id} ','ReparacionController@index')->name('reparacion');
Route::get('/reparacion/create/{veh_id}','ReparacionController@create')->name('reparacion.create');
Route::post('/reparacion/store','ReparacionController@store')->name('reparacion.store');
Route::get('/reparacion/edit/{rep_id}','ReparacionController@edit')->name('reparacion.edit');
Route::post('/reparacion/update/{rep_id}','ReparacionController@update')->name('reparacion.update');
Route::post('/reparacion/destroy/{rep_id}','ReparacionController@destroy')->name('reparacion.destroy');
Route::post('/reparacion/search','ReparacionController@search')->name('reparacion.search');
Route::get('/reparacion_pdf{rep_id}','ReparacionController@reparacion_pdf')->name('reparacion.pdf');

Route::resource('facturas','FacturasController');

Route::post('/facturas_detalle','FacturasController@detalle')->name('facturas.detalle');

Route::get('/factura_pdf/{fac_id}','FacturasController@facturas_pdf')->name('facturas.pdf');

Route::get('/reporte','ReporteController@index')->name('reporte');
Route::post('/reporte/reporte','ReporteController@reporte')->name('reporte.reporte');

Route::get('/clientes_anular/{cli_id}','ClientesController@clientes_anular')->name('clientes.anular');

Route::get('/facturas_anular/{fac_id}','FacturasController@facturas_anular')->name('facturas.anular');