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
Route::get('/','FrontController@index');
Route::get('home','FrontController@home');
Route::get('proyectos','FrontController@proyectos');
Route::resource('usuario','UsuarioController');

Route::resource('log','LogController');
Route::get('logout','LogController@logout');
/*
Route::get('/', function () {
    return view('welcome');
});*/

//PROYECTOS
Route::resource('proyecto','ProyectoController');


//Tareas
Route::resource('tarea','TareaController');

//colaboradores

Route::get('colaborador','LogController@getColaboradores');