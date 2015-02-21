<?php

class PageController extends BaseController
{


    /**
     * Displays home page with available course outlines
     *
     * @return mixed
     */
    public function index()
    {
        $course_names = $course_outlines = array_slice(scandir(public_path() . '/courseoutlines'), 2);
        for ($iterator = 0; $iterator < count($course_outlines); $iterator++) {
            $course_names[$iterator] = preg_replace('/(?<!\ )[A-Z]/', ' $0', $course_names[$iterator]);
            $course_names[$iterator] = preg_replace('/\\.[^.\\s]{3,4}$/', '',
                $course_names[$iterator]);
        }
        return View::make('pages.home')->withCourseOutlines($course_outlines)->withCourseNames($course_names);
    }

    /**
     * Display the home page
     * GET /
     *
     * @return Response
     */
    public function display()
    {
        $course_names = $course_outlines = array_slice(scandir(public_path() . '/courseoutlines'), 2);
        $array = array();

        for ($iterator = 0; $iterator < count($course_outlines); $iterator++) {
            $course_names[$iterator] = preg_replace('/(?<!\ )[A-Z]/', ' $0', $course_names[$iterator]);
            $course_names[$iterator] = preg_replace('/\\.[^.\\s]{3,4}$/', '',
                $course_names[$iterator]);
            $array = array_add($array, $course_names[$iterator], $course_outlines[$iterator]);
        }

        return View::make('pages.home', array('course_names' => $course_names, 'course_outlines' => $course_outlines));
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

    public function splash()
    {
        return View::make('pages.splash');
    }
}
