<?php

class PageController extends BaseController {

	/**
	 * Display the home page
	 * GET /
	 *
	 * @return Response
	 */
	public function index()
	{
		$course_names = $course_outlines = array_slice(scandir(public_path().'/courseoutlines'), 2);

		for ($iterator=0; $iterator < count($course_outlines); $iterator++) { 
			$course_names[$iterator] = preg_replace('/(?<!\ )[A-Z]/', ' $0', $course_names[$iterator]);
			$course_names[$iterator] = preg_replace('/\\.[^.\\s]{3,4}$/', '',
				                             $course_names[$iterator]);
		}

		return View::make('pages.home')->withCourseOutlines($course_outlines)->withCourseNames($course_names);
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
