<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/','WelcomeController@index');
Route::get('homeadmin','HomeController@getProyectos');
Route::get('colaboradoresadmin','HomeController@getColaboradores');
Route::get('tareasadmin','HomeController@getTareas');

Route::get('registrarproyecto','HomeController@muestraForm');
Route::post('registrarproyecto', 'HomeController@nuevoProyecto');

Route::get('editartarea/{id_tarea}','HomeController@editarTarea');
Route::patch('updatetarea/{id_tarea}','HomeController@updateTarea');

Route::get('registrartarea','HomeController@muestraFormTarea');
Route::post('registrartarea', 'HomeController@nuevaTarea');



Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
