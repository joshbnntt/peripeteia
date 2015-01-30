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
   return View::make('index');
   //return Redirect::to('/');//Response::make('Page not found', 404);
});

/*
|--------------------------------------------------------------------------
| Angular Routes
|--------------------------------------------------------------------------
*/
Route::get('/', function()
{
   return View::make('index'); // will return app/views/index.php
});

/*
|--------------------------------------------------------------------------
| API v1 Routes
|--------------------------------------------------------------------------
*/
Route::api(['version' => 'v1', 'prefix' => 'api', 'protected' => true], function()
{
   Route::post('login',                ['uses' => 'AuthController@validate', 'protected' => false]);
   Route::get('logout',                ['uses' => 'AuthController@logout']);
   Route::post('display',              ['uses' => 'PageController@display']);
   Route::get('testCourseSearch',      ['uses' => 'PageController@testCourseNameSearch']);
   Route::get('testInstructorSearch',  ['uses' => 'PageController@testInstructorSearch']);
   Route::get('testDescriptionSearch', ['uses' => 'PageController@testDescriptionSearch']);
   Route::get('courseoutline/create',  ['uses' => 'CourseOutlineController@create']);
   Route::post('courseoutline/store',  ['uses' => 'CourseOutlineController@store']);
   Route::get('courseoutline/show',    ['uses' => 'CourseOutlineController@show']);
   Route::get('directory',             ['uses' => 'UserController@index']);
   Route::post('directory/search',     ['uses' => 'UserController@search']);
});