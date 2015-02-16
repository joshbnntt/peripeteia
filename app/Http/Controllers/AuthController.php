<?php namespace Peri\Http\Controllers;

use Peri\Traits\Authentication as AuthTrait;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;

class AuthController extends Controller {

	use AuthTrait;

	/**
	 * The authentication implementation
	 * 
	 * @var Illuminate\Contracts\Auth\Guard
	 */
	protected $auth;

	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}

	/**
	 * Show the login page
	 * GET /login
	 *
	 * @return Response
	 */
	public function getLogin()
	{
        return view('pages.auth.login');
	}

	/**
	 * Perform the login
	 * POST /login
	 *
	 * @return Response
	 */
	public function postLogin(Request $request)
	{
		$request_data = $request->only('email', 'password');

		$validator = $this->validateLogin($request_data);

		if($validator->fails()) {
			return redirect('login')->withErrors($validator)->withInput($request->except('password'));
		}

        if($this->auth->attempt($request_data)) {
            return redirect('/')->withMessage('Welcome back, ' . $this->auth->user()->first_name);
        } else {
        	return redirect()->back()->withError('Your username or password was incorrect');
        }
		
	}

	/**
	 * Logout of the web app.
	 * GET /logout
	 *
	 * @return Response
	 */
	public function getLogout()
	{
		$this->auth->logout();

		return redirect('/');
	}

}