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
|  Not Best practice. Catch all routes, send them to angular.
|--------------------------------------------------------------------------
*/
App::missing(function($exception)
{
   // return View::make('index');
   Response::make('Page not found', 404); //return Redirect::to('/');
});

/*
|--------------------------------------------------------------------------
| Page Routes
|--------------------------------------------------------------------------
*/
Route::get ('/',[
    'before' => 'auth',
    'uses' => 'PageController@index'
]);

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
//Route::get('login', 'AuthController@create');
Route::get('login', [
    'as' => 'login_path',
    'uses' => 'AuthController@create'
]);
Route::post('login', [
    'as' => 'login_path',
    'uses' => 'AuthController@validate'
]);
Route::get ('logout', array(
        'as' => 'logout_path',
        'before' => 'auth',
        'uses' => 'AuthController@logout'
    )
);