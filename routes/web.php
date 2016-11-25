<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index');

Route::get('/home',['as' => 'home', 'uses' => 'HomeController@index']);

Route::group(['middleware' => ['web']], function(){
   Route::resource('usuario', 'UserController');
   Route::resource('titulo', 'TituloController');
   Route::resource('recurso', 'RecursoController');
   Route::resource('historico', 'HistoricoController');
});
