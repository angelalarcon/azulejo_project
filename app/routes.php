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

Route::get('/', 'HomeController@get');

Route::get('/contactanos', 'ContactoController@get');

Route::post('api/contacto', 'ContactoController@post');

Route::get('/coleccion/{id}/{slug}/', 'CollectionsController@get')->where('id', '[0-9]+');

Route::get('/nosotros', 'NosotrosController@get');

Route::get('/nuestro-compromiso', 'NuestroCompromisoController@get');

Route::get('/por-que-dispufil', function()
{
    return View::make('por-que-dispufil')->with('page', '/por-que-dispufil');
});

Route::get('login', 'AuthController@showLogin');
Route::post('login', 'AuthController@postLogin');
Route::get('logout', 'AuthController@getLogout');