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

$app['router']->get('/', function() use ($app)
{
   return View::make('hello');
});
Route::get('/feat', function()
{
   return View::make('feat');
});
Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@delete');
Route::resource('session', 'SessionsController');