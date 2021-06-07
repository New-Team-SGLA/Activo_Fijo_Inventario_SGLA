<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\IngresoCompraController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/* solicitud y asignacion de activos */
Route::get('documentos', 'documento_Controller@index');
Route::get('documentos.nuevo', 'documento_Controller@create');
Route::get('obtener_itens', 'documento_Controller@get_itens');
Route::get('obtener_areas', 'documento_Controller@get_area');
Route::get('obtener_sectores', 'documento_Controller@get_sector');
Route::get('Colaboradoes', 'documento_Controller@get_colaboradores');
Route::post('insertarDocumento', 'documento_Controller@insert_documento');

/* Route::resource('ingresocompra', 'IngresoCompraController'); */
Route::post('ingresocompra', 'IngresoCompraController@store')->name('ingresocompra.store');
Route::get('ingresocompra', 'IngresoCompraController@index')->name('ingresocompra.index');
Route::get('ingresocompra/create', 'IngresoCompraController@create')->name('ingresocompra.create');
Route::get('ingresocompra/show/{id}', 'IngresoCompraController@show')->name('ingresocompra.show');
Route::put('ingresocompra/{ingreso}/estado','IngresoCompraController@cambioestado')->name('ingresocompra.estado');




/* crud generator */  //agregar un middleware
/* Route::resource('ciudad', 'ciudadController'); */
Route::resource('ciudad', 'ciudadController');
Route::resource('departamento_af', 'departamento_afController');
Route::resource('empresa_af', 'empresa_afController');
Route::resource('item_af', 'item_afController');
Route::resource('calificacion_acti_af', 'calificacion_acti_afController');
/* Route::resource('marca_af', 'marca_afController'); */
Route::resource('marca_af', 'marca_afController');
Route::resource('modelo_af', 'modelo_afController');
Route::resource('sector_af', 'sector_afController');
Route::resource('sucursal_af', 'sucursal_afController');
Route::resource('area_af', 'area_afController');
Route::resource('turno_af', 'turno_afController');
Route::resource('responsable_af', 'responsable_afController');
Route::resource('tipo_resp_af', 'tipo_resp_afController');


/* crud generator */


 /* salidas */
 /* Route::resource('salidas_af', 'salidas_afController'); */
 Route::resource('salidas_transferencia', 'salidas_af\salida_transController');
/*  Route::get('salidas_prestamo', 'salidas_afController@index_prestamo');
 Route::get('salidas_mantenimiento', 'salidas_afController@index_mantenimiento');
 Route::get('salidas_bajas', 'salidas_afController@index_bajas'); */
 /* salidas */
