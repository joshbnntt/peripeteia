<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		//*******************************************************
		// If logged in, show welcome page
		// else redirect to login page

		// Auth check not working properly, not sure why.
		// if !Auth::check() always puts the user through
		// but thats not what we want, and thats not how
		// its supposed to work: check returns true if logged in
		//*******************************************************

	      return View::make('hello');
	}

}
