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


//registrar
Route::get('registrar','usuarioController@registrar')->name('usuario.registrar');
Route::post('usuario','usuarioController@store')->name('usuario.store');

//inicio
Route::get('inicio', 'HomeController@admin')->name('inicio.admin');
Route::get('/', 'Auth\LoginController@showLoginForm')->name('inicio');

//areas
//Route:get('areas/{id}','usuarioController@areas')->name('usuario.area');
Route::post('getareas/fetch', 'AreaController@getAreas');
Route::post('activofijo/fetch', 'ActivoFijoController@getTitulosActivos');

//CRUD usuarios
Route::get('usuario', 'usuarioController@lista')->name('usuario.lista');
Route::get('perfil', 'usuarioController@perfil')->name('usuario.perfil');
Route::get('usuario/{id}','usuarioController@edit')->name('usuario.edit');
Route::put('usuario/{id}','usuarioController@update')->name('usuario.update');
Route::delete('usuario/{id}','usuarioController@destroy')->name('usuario.delete');
Route::put('pass/{id}','usuarioController@updatePassword')->name('usuario.password');

//CRUD Clientes
Route::get('cliente', 'ClienteController@index')->name('cliente.index');
Route::post('cliente','ClienteController@store')->name('cliente.store');
Route::put('cliente/{id}','ClienteController@update')->name('cliente.update');
Route::delete('cliente/{id}','ClienteController@destroy')->name('cliente.delete');

//CRUD Estado
Route::get('estado', 'EstadoController@index')->name('estado.index');
Route::post('estado','EstadoController@store')->name('estado.store');
Route::put('estado/{id}','EstadoController@update')->name('estado.update');
Route::delete('estado/{id}','EstadoController@destroy')->name('estado.delete');

//CRUD ubicación
Route::get('ubicacion', 'UbicacionController@index')->name('ubicacion.index');
Route::post('ubicacion','UbicacionController@store')->name('ubicacion.store');
Route::put('ubicacion/{id}','UbicacionController@update')->name('ubicacion.update');
Route::delete('ubicacion/{id}','UbicacionController@destroy')->name('ubicacion.delete');

//CRUD reactivo
Route::get('reactivo', 'ReactivoController@index')->name('reactivo.index');
Route::post('reactivo','ReactivoController@store')->name('reactivo.store');
Route::put('reactivo/{id}','ReactivoController@update')->name('reactivo.update');
Route::delete('reactivo/{id}','ReactivoController@destroy')->name('reactivo.delete');

//CRUD color
Route::get('color', 'ColorController@index')->name('color.index');
Route::post('color','ColorController@store')->name('color.store');
Route::put('color/{id}','ColorController@update')->name('color.update');
Route::delete('color/{id}','ColorController@destroy')->name('color.delete');

//CRUD DE FUENTES DE AF
Route::get('fuente', 'FuenteController@index')->name('fuente.index');
Route::post('fuente','FuenteController@store')->name('fuente.store');
Route::put('fuente/{id}','FuenteController@update')->name('fuente.update');
Route::delete('fuente/{id}','FuenteController@destroy')->name('fuente.delete');

//CRUD DE PERSONA RESPONSABLE
Route::get('persona', 'PersonaRespController@index')->name('persona.index');
Route::post('persona', 'PersonaRespController@store')->name('persona.store');
Route::put('persona/{id}','PersonaRespController@update')->name('persona.update');
Route::delete('persona/{id}','PersonaRespController@destroy')->name('persona.delete');

//CRUD DE ACTIVO FIJO
Route::get('af', 'ActivoFijoController@index')->name('activofijo.index');
Route::get('af/agregar', 'ActivoFijoController@create')->name('activofijo.create');
Route::post('af', 'ActivoFijoController@store')->name('activofijo.store');
Route::get('af/{id}','ActivoFijoController@edit')->name('activofijo.edit');
Route::put('af/{id}','ActivoFijoController@update')->name('activofijo.update');
Route::delete('af/{id}','ActivoFijoController@destroy')->name('activofijo.delete');
Route::get('activofijo/detalle/{id}', 'ActivoFijoController@show')->name('activofijo.detalle');

//sección de depreciación
Route::get('depreciacion/', 'ActivoFijoController@depreciacion')->name('activofijo.depreciacion');
Route::put('depreciar/{id}', 'ActivoFijoController@depreciar')->name('activofijo.depreciar');


//formularios

Route::get('formulario/a','FormularioA_Controller@formulario')->name('form.a');
Route::post('formulario/a','FormularioA_Controller@store')->name('form.a.store');
Route::get('formulario/b','FormularioB_Controller@formulario')->name('form.b');
Route::post('formulario/b','FormularioB_Controller@store')->name('form.b.store');
Route::get('formulario/c','FormularioC_Controller@formulario')->name('form.c');
Route::post('formulario/c','FormularioC_Controller@store')->name('form.c.store');
Route::get('formulario/d','FormularioD_Controller@formulario')->name('form.d');
Route::post('formulario/d','FormularioD_Controller@store')->name('form.d.store');

Route::get('formulario/acta','Formulario_ActaEntrega_Controller@formulario')->name('acta');
Route::post('formulario/acta','Formulario_ActaEntrega_Controller@store')->name('acta.store');

Route::get('formulario/asignacion','Formulario_Asignacion_Controller@formulario')->name('asignacion');
Route::post('formulario/asignacion','Formulario_Asignacion_Controller@store')->name('asignacion.store');

Route::get('formulario/salida','Formulario_OrdenSalida_Controller@formulario')->name('salida');
Route::post('formulario/salida','Formulario_OrdenSalida_Controller@store')->name('salida.store');


//reportes


//Excel
Route::get('excel','ExcelController@exportarExcel')->name('excel.export.af');

//Visualizar activos 
Route::get('activofijo','ActivoFijoController@activos_usuarios')->name('af.usuarios');

