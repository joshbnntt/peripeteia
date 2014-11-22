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
		//
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
		$return_array;

		$rules = [
<<<<<<< HEAD
			'email' => 'required|email',
=======
			'email' => 'required',
>>>>>>> 5867cb01d2db15ac460226b8506b6711db8e1057
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

		Auth::attempt($userdata);

		$return_array = ['csrf_token' => csrf_token(), 'user' => $userdata['email']];

		return $this->auth->user();
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
		return 'Succesfully logged out';
	}

}