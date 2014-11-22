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

/*
|--------------------------------------------------------------------------
<<<<<<< HEAD
| Angular Routes
|--------------------------------------------------------------------------
*/
Route::get('/', function()
{
   return View::make('index'); // will return app/views/index.php
});
=======
| API v1 Routes
|--------------------------------------------------------------------------
*/
Route::api(['version' => 'v1', 'prefix' => 'api', 'protected' => true], function()
{
   Route::post('login', [
      'uses' => 'AuthController@validate', 
      'protected' => false
   ]);

   Route::get('logout', [
      'uses' => 'AuthController@logout',
      'protected' => false
   ]);

   Route::get('users', function()
   {
      $users = $this->api->get('users');

          return View::make('users.all')->with('users', $users);
   });
});

/*
|--------------------------------------------------------------------------
| Page Routes
|--------------------------------------------------------------------------
*/
Route::get ('/',     'PageController@index');
Route::get('login', 'PageController@login');
>>>>>>> 5867cb01d2db15ac460226b8506b6711db8e1057

/*
|  Not Best practice. add controller to catch these routes
*/
App::missing(function($exception)
{
   return View::make('index');
});

/*
|--------------------------------------------------------------------------
| Page Routes
|--------------------------------------------------------------------------
*/
<<<<<<< HEAD
Route::get ('login', 'PageController@login');

Route::group(array('prefix' => 'api'), function() {
   Route::resource('display', 'PageController@display');
   Route::resource('courseoutline', 'CourseOutlineController', array('only' => array('create', 'store', 'show')));
});   

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/
Route::post('login', 'AuthController@validate');
Route::get ('logout', array(
      'before' => 'auth',
      'uses' => 'AuthController@logout'
   )
);

/*
|--------------------------------------------------------------------------
| Miscellanious Routes
|--------------------------------------------------------------------------
|
| Routes that will most likely get removed before merging with production
|
*/
Route::get('/new', function()
{
   User::create([
         'first_name' => 'Joshua',
         'last_name' => 'Bennett',
         'email'  => 'jdbnc93@aol.com',
         'password' => Hash::make('1234')
      ]);
   return 'hi';
});
=======
Route::group(array('before' => 'auth'), function()
{
   Route::get ('courseoutline/create', array(
         'uses' => 'CourseOutlineController@create'
      )
   );
   Route::get ('courseoutline/show', array(
         'uses' => 'CourseOutlineController@show'
      )
   );
   Route::post('courseoutline/store', array(
         'uses' => 'CourseOutlineController@store'
      )
   );
});
>>>>>>> 5867cb01d2db15ac460226b8506b6711db8e1057
