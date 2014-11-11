<?php

class PageController extends BaseController {

	/**
	 * Display the home page
	 * GET /
	 *
	 * @return Response
	 */
	public function display()
	{
		$course_names = $course_outlines = array_slice(scandir(public_path().'/courseoutlines'), 2);

		for ($iterator=0; $iterator < count($course_outlines); $iterator++) { 
			$course_names[$iterator] = preg_replace('/(?<!\ )[A-Z]/', ' $0', $course_names[$iterator]);
			$course_names[$iterator] = preg_replace('/\\.[^.\\s]{3,4}$/', '',
				                             $course_names[$iterator]);
		}

		return Response::json($course_outlines);
	}

	/**
	 * Display the login page
	 * GET /login
	 *
	 * @return Response
	 */
	public function login()
	{
		return View::make('pages.login');
	}

}
