<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/eo', function()
{
	return View::make('emails.auth.reminder');
});
Route::group(array('before'=>'guest'), function(){
	Route::get('login', 'UsuarioController@login');
	Route::post('user/login', 'UsuarioController@validaLogin');
	Route::get('user/inscrever', 'UsuarioController@create');
	Route::post('user', 'UsuarioController@store');
	
});

Route::get('insert', 'HomeController@insert');
Route::get('create', 'HomeController@insert');

/*Rota pós autenticação*/
Route::group(array('before' => 'auth'), function(){
	Route::resource('user','UsuarioController',array('except'=>['store']));
Route::get('/', function()
{
	return View::make('user.index');
});
	Route::resource('categoria','categoriaController');
	Route::resource('produto', 'ProdutoController');
	Route::resource('cliente', 'CLienteController');
	Route::resource('venda', 'VendaController');
	Route::get('produto/{id}/restore', 'ProdutoController@restore');
	Route::get('cliente/{id}/restore', 'ClienteController@restore');
	Route::get('user/{id}/restore', 'UsuarioController@restore');
	Route::get('categoria/{id}/restore', 'CategoriaController@restore');
	Route::get('ajax/venda/{id}', 'VendaController@getPreco');
	Route::get('logout', 'UsuarioController@logout');
});