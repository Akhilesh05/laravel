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
Route::get('welcome', 'WelcomeController@index');
Route::post("form", "WelcomeController@form");
Route::get('{link_id}', 'WelcomeController@link') -> where('link_id', '[-_~.0-9A-Za-z]{4}');
