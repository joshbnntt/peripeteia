<?php namespace Peri\Http\Controllers;

class PageController extends Controller {

	public function __construct()
	{
		$this->middleware('auth', ['only' => 'index']);
	}

    /**
     * Displays home page with available course outlines
     *
     * @return mixed
     */
    public function index()
    {
        $course_names = $course_outlines = array_slice(scandir(public_path().'/courseoutlines'), 2);

        for ($iterator=0; $iterator < count($course_outlines); $iterator++) {
            $course_names[$iterator] = preg_replace('/(?<!\ )[A-Z]/', ' $0', $course_names[$iterator]);
            $course_names[$iterator] = preg_replace('/\\.[^.\\s]{3,4}$/', '',
                $course_names[$iterator]);
        }
        
        return view('pages.home')->withCourseOutlines($course_outlines)->withCourseNames($course_names);
    }

	/**
	 * Display the home page
	 * GET /
	 *
	 * @return Response
	 */
	public function display()
	{
		$course_names = $course_outlines = array_slice(scandir(public_path().'/courseoutlines'), 2);
		$array = array();

		for ($iterator=0; $iterator < count($course_outlines); $iterator++) { 
			$course_names[$iterator] = preg_replace('/(?<!\ )[A-Z]/', ' $0', $course_names[$iterator]);
			$course_names[$iterator] = preg_replace('/\\.[^.\\s]{3,4}$/', '',
				                             $course_names[$iterator]);
			$array = array_add($array, $course_names[$iterator], $course_outlines[$iterator]);
		}

        return view('pages.home', array('course_names' => $course_names, 'course_outlines' => $course_outlines));
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
	public function testInstructorSearch()
	{
		$search = strtolower(Input::get('s'));
		$users = User::all();
		$results = array();

		foreach($users as $user)
		{
			if(str_contains(strtolower($user->first_name), $search ) || str_contains(strtolower($user->last_name), $search ))
			{
				$results[] = ['first_name' => $user->first_name, 'last_name' => $user->last_name ];
			}
		}

        return redirect()->back()->with('preFilterText' , $search)->with('filterText', $results);
	}

	public function testCourseNameSearch()
	{
		$search = strtolower(Input::get('s'));
		$courses = Course::all();
		$results = array();

		foreach($courses as $course)
		{
			if(str_contains(strtolower($course->name), $search ))
			{
			$results[] = ['name' => $course->name];
			}
		}

        return redirect()->back()->withPreFilterText($results);
	}
	public function testDescriptionSearch()
	{
		$search = strtolower(Input::get('s'));
		$description = Outline::find($search);
		
        return redirect()->back()->withPreFilterText($description);
	}
}
