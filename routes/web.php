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
    return view('inicio.admin');
});*/

Auth::routes(['register' => false]);

//Route::get('/home', 'HomeController@index')->name('home');

//CRUD Coordinaciones
Route::get('coordinacion', 'CoordinacionController@index')->name('coordinacion.index');
Route::post('coordinacion','CoordinacionController@store')->name('coordinacion.store');
Route::put('coordinacion/{id}','CoordinacionController@update')->name('coordinacion.update');
Route::delete('coordinacion/{id}','CoordinacionController@destroy')->name('coordinacion.delete');

//CRUD Areas
Route::get('area', 'AreaController@index')->name('area.index');
Route::post('area','AreaController@store')->name('area.store');
Route::put('area/{id}','AreaController@update')->name('area.update');
Route::delete('area/{id}','AreaController@destroy')->name('area.delete');

Route::get('registrar','usuarioController@index')->name('usuario.index');
Route::get('success','usuarioController@sucess')->name('usuario.success');
Route::post('usuario','usuarioController@store')->name('usuario.store');

//inicio
Route::get('admin', 'HomeController@admin')->name('inicio.admin');
Route::get('/', 'Auth\LoginController@showLoginForm')->name('inicio');

//areas
//Route:get('areas/{id}','usuarioController@areas')->name('usuario.area');
Route::post('getareas/fetch', 'AreaController@getAreas');
