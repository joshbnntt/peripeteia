<?php

class AuthController extends BaseController {

	/**
	 * Show the form for creating a new resource.
	 * GET /auth/create
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('pages.login');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /auth
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /auth/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Validate the entered use credentials
	 * POST /login
	 *
	 * @return Response
	 */
	public function validate()
	{
		$rules = [
			'email' => 'required|email',
			'password' => 'required|alphaNum|min:3'
		];

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()) {
			return Redirect::to('login')->withErrors($validator)->withInput(Input::except('password'));
		} else {
			$userdata = [
				'email' => Input::get('email'),
				'password' => Input::get('password')
			];
		}

        if(Auth::attempt($userdata))
        {
//            Flash::message('Welcome Back!');
            return Redirect::intended('/');
        }
		
	}

	/**
	 * Logout of the web app.
	 * GET /logout
	 *
	 * @return Response
	 */
	public function logout()
	{
		Auth::logout();
		return Redirect::to('login');
	}

}