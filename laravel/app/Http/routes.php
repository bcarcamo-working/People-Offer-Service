<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
| POST, GET, PUT, DELETE
*/

Route::get('/','FrontController@index');
Route::get('avisos','FrontController@avisos');
Route::get('usuarioFree','FrontController@usuarioFree');
Route::get('admin','FrontController@admin');
Route::get('logout','LogController@logout');
Route::get('/usuarioFree', ['as ' => 'usuarioFree', 'uses' => 'UsuarioFreeController@index']);
Route::get('/avisos', ['as ' => 'avisos', 'uses' => 'AvisosController@index']);
Route::resource('usuario','UsuarioController');
Route::resource('log','LogController');
