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
		$rules = [
			'username' => 'required',
			'password' => 'required|alphaNum|min:3'
		];

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()) {
			return Redirect::to('login')->withErrors($validator)->withInput(Input::except('password'));
		} else {
			$userdata = [
				'username' => Input::get('username'),
				'password' => Input::get('password')
			];
		}

		if(Auth::attempt($userdata)) {
			return Redirect::intended('/');
		} else {
			return Redirect::to('login');
		}
		return;
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
		return Redirect::to('/');
	}

}