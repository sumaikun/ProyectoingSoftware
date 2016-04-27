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

/*Route::get('/', function(){

	if (Auth::check() && Session::get('rol_nombre')=='administrador'){
		return Redirect::guest('/admin/inicio');
	}else{
		if(Auth::check() && Session::get('rol_nombre')=='usuario'){
			return Redirect::guest('/usuario/inicio');
		}else{
			return Redirect::guest('inicio');
		}
	}
	
});*/

Route::get('inicio', function(){
	return View::make('general.logging');	
});
Route::get('admin', function(){
	return View::make('admin.principal');	
});
/*Route::get('adminUs//edit', function(){
	return View::make('admin.editar');
});*/

Route::resource('adminUs','UsuarioController');

/*Route::get('adminUs/edit', function(){
	return View::make('admin.editar');
});*/

Route::get('logout','LogController@logout');

Route::resource('Login','LogController');


Route::resource('adminEm','EmpresaController');



Event::listen('illuminate.query', function($query)
{
    var_dump($query);
});
