<?php

class CourseOutlineController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /courseoutline
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /courseoutline/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('pdfs.form');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /courseoutline
	 *
	 * @return Response
	 */
	public function store()
	{ 
		/*$outline = Outline::firstOrCreate([
			'instructor_id' => '3',
			'course_id'     => '9',
			'credit_hours'  => '4'
		]);
		$outline
		return $outline;

		$submitted_info = Input::all();

		$outline->course->name = 'Intro to Programming';
		$outline->course->number = 'CS 202';
		$outline->course->general_information = 'Intro to Programming';
		$outline->course->specific_information = 'Intro to Programming';
		$outline->course->accrediting_information = 'Intro to Programming';
		$outline->instructor = 1;
		$outline->credit_hours = 3;*/

		$submitted_info = Input::all();
		$submitted_info['course_outcomes'] = explode("\n", $submitted_info['course_outcomes']);

		PDF::loadView('pdfs.test',
	      array('submitted_info' => $submitted_info))->save(public_path().'/courseoutlines/'.studly_case($submitted_info['course_name']).'.pdf');
		return Response::json('/courseoutlines/'.studly_case($submitted_info['course_name']).'.pdf');
	}

	/**
	 * Display the specified resource.
	 * GET /courseoutline/{id}
	 *
	 * @return Response
	 */
	public function show()
	{
		$courseInfo = Session::get('courseInfo');
		return PDF::loadView('pdfs.test', array('courseInfo' => $courseInfo))->stream();
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /courseoutline/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /courseoutline/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /courseoutline/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}