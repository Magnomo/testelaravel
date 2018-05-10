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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/eo', function()
{
	return View::make('emails.auth.reminder');
});

Route::get('insert', 'HomeController@insert');
Route::get('create', 'HomeController@insert');
Route::resource('user','UsuarioController');
Route::resource('categoria','categoriaController');
Route::resource('produto', 'ProdutoController');
Route::resource('cliente', 'CLienteController');
Route::resource('venda', 'VendaController');
Route::get('produto/{id}/restore', 'ProdutoController@restore');
Route::get('cliente/{id}/restore', 'ClienteController@restore');
Route::get('user/{id}/restore', 'UsuarioController@restore');
Route::get('categoria/{id}/restore', 'CategoriaController@restore');
Route::get('ajax/venda/{id}', 'VendaController@getPreco');