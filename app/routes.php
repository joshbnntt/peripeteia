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

/*Route::get('/', 'HomeController@showWelcome')->before('auth');
Route::get('/new', function()
{
   User::create([
         'username' => 'Joshua',
         'email'    => 'jdbnc93@aol.com',
         'password' => Hash::make('1234')
   ]);
   return User::all();
});
Route::get('/feat', function()
{
   return User::all();
});
Route::get('login', 'SessionsController@create')->before('guest');
Route::get('logout', 'SessionsController@delete');
Route::resource('session', 'SessionsController');
Route::controller('password', 'RemindersController');*/

/*
|--------------------------------------------------------------------------
| Page Routes
|--------------------------------------------------------------------------
*/
Route::get ('/',     'PageController@index');
Route::get ('login', 'PageController@login');


/*
|--------------------------------------------------------------------------
| Course Outline Routes
|--------------------------------------------------------------------------
*/
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
