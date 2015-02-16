<?php namespace Peri\Traits;

use \Validator;

trait Authentication {
	/**
	 * Validates a user's login information
	 * 
	 * @param  array $user_input
	 * @return Validator
	 */
	protected function validateLogin($user_input)
	{
		$rules = [
			'email' => 'required|email',
			'password' => 'required|alphaNum|min:3'
		];

		return Validator::make($user_input, $rules);
	}
}