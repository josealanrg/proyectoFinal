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
Route::get('homeadmin','HomeController@index');
Route::get('homeadmin','HomeController@getProyectos');
Route::get('colaboradoresadmin','HomeController@getColaboradores');
Route::get('tareasadmin','HomeController@getTareas');
Route::get('registrarproyecto','HomeController@muestraForm');

Route::post('registrarproyecto', function(){
	$nombre=Input::get('nombre');
	$fechaCreacion=Input::get('fechaCreacion');
	$fechaEntrega=Input::get('fechaEntrega');
	$descripcion=Input::get('descripcion');

	$nuevoProyecto=array("nombre"=>$nombre,"fechaCreacion"=>$fechaCreacion,"fechaEntrega"=>$fechaEntrega,"descripcion"=>$descripcion);
	
	DB::table('proyectos')->insert($nuevoProyecto);
	return Redirect::to('homeadmin');	

}
);
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
