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
        $new_outline = [];
		$submitted_info = Input::all();
		$rules = [
			'course_outcomes'      => 'required|alphaSpace|max:500',
			'course_name'          => 'required|alphaSpace',
			'credit_hours'         => 'required|numeric',
			'instructor_name'      => 'required|alphaSpace',
			'office_location'      => 'required|alphaSpace',
			'office_hours'         => 'required|alphaSpace',
			'email'                => 'required|email',
			'course_prerequisites' => 'required|alphaSpace',
			'course_texts'         => 'required|alphaSpace',
			'course_outcomes'      => 'required|alphaSpace'
		];
		$validator = Validator::make($submitted_info, $rules);

		if($validator->fails()) {
         return Redirect::to('courseoutline/create')->withErrors($validator)->withInput($submitted_info);
		}

		$submitted_info['course_outcomes'] = explode("\n", $submitted_info['course_outcomes']);

		PDF::loadView('pdfs.test', array('submitted_info' => $submitted_info))
			->save(public_path().'/courseoutlines/'.studly_case($submitted_info['course_name']).'.pdf');

     $new_outline = [
         'name' => studly_case($submitted_info['course_name'])
     ];
        return View::make('pdfs/display', array('outline' => $new_outline));
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