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

Route::get('/', 'HomeController@showWelcome');
Route::get('/new', function()
{
   User::create([
         'username' => 'joshbnntt',
         'email'    => 'joshbnntt@peri.com',
         'password' => Hash::make('1234')
   ]);
   return User::all();
});
Route::get('/feat', function()
{
   return User::all();
});
Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@delete');
Route::resource('session', 'SessionsController');