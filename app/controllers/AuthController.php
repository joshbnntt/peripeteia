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

		Auth::attempt($userdata);

		if(Auth::check()) {
			$return_array = ['auth_status' => Auth::check(), 'csrf_token' => csrf_token(), 'user' => $userdata['email'], 'password' => $userdata['password']];
			return Response::json($return_array, 200);
		} else {
			$return_array = ['auth_status' => Auth::check(), 'error' => 'User could not be authenticated'];
			return Response::json($return_array, 401);
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
		return 'Succesfully logged out';
	}

}