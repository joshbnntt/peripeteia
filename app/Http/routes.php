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
| Page Routes
|--------------------------------------------------------------------------
*/

Route::get ('/', 'PageController@index');

/*
|--------------------------------------------------------------------------
| Course Outline Routes
|--------------------------------------------------------------------------
*/

Route::group([], function() {
    Route::get ('courseoutline/create', 'CourseOutlineController@getCreate');
    Route::get ('courseoutline/show',   'CourseOutlineController@show');
    Route::post('courseoutline/store',  'CourseOutlineController@store');
    Route::post('courseoutline/display', function()
    {
        View::make('pdfs/display');
    });
});
/*
|--------------------------------------------------------------------------
| Directory  Routes
|--------------------------------------------------------------------------
*/
Route::get('directory', 'UserController@index');
Route::post('directory/search', 'UserController@search');

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/

Route::get('login', 'AuthController@getLogin');
Route::post('login', 'AuthController@postLogin');
Route::get ('logout', 'AuthController@getLogout');