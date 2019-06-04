<?php

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



Route::get('/services',function(){
	return view('front.servicios');
});

Route::get('/portafolio',function(){
	return view('front.portafolio');
});

Route::get('/contact',function(){
	return view('front.contacto');
});


Auth::routes();

Route::get('/admin',function(){
	return view('layouts.admin');
})->middleware('auth');
Route::get('/guest',function(){
	return view('guest.index');
});

Route::resource('compania','CompaniaController')->middleware('auth');

Route::get('/compania','CompaniaController@edit')->middleware('auth');

Route::resource('cliente','ClienteController')->middleware('auth');

Route::resource('categoria','Inventario\CategoriaController')->middleware('auth');
Route::get('categoria/{id}','Inventario\CategoriaController@show')->middleware('auth');

Route::resource('producto','Inventario\ProductoController')->middleware('auth');
Route::get('producto/{id}','Inventario\ProductoController@show')->middleware('auth');

Route::resource('finca','FincaController')->middleware('auth');
Route::get('finca/{id}','FincaController@show')->middleware('auth');

Route::resource('equipo','EquipoController')->middleware('auth');
Route::get('equipo/{id}','EquipoController@show')->middleware('auth');

Route::resource('orden','OrdenTrabajoController')->middleware('auth');
Route::get('orden/{id}','OrdenTrabajoController@show')->middleware('auth');
Route::get('orden/equipos/{id}','OrdenTrabajoController@getEquipos')->middleware('auth');
//Get Cantones
Route::get('cantones/{id}','CompaniaController@getCantones');
//Get Distrito
Route::get('distritos/{id}','CompaniaController@getDistritos');
//Get Barrios
Route::get('barrios/{id}','CompaniaController@getBarrios');
//Get facturas: guarda en tabla de facturas la orden 
Route::get('getfacturas/{id}','FacturaController@getFactura');
//Factura
Route::resource('factura','FacturaController')->middleware('auth');
Route::get('factura/{id}','FacturaController@show')->middleware('auth');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
