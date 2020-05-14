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


Route::get('/', function () {
    return view('welcome');
});
*/



Route::resource('vehiculo', 'VehiculoController');
Route::resource('tarifa','TarifaController');
Route::resource('ingresoV','Ingreso_vehiculoController');
Route::resource('ticket','TicketController');


Auth::routes();
Route::get('/', function () {
    return view('auth/login');
    });
    
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'loginController@logout')->name('logout');
Route::get('ticket/{placa}/{id}/{valor}','TicketController@generarTicket')->name('ticket');




