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
		Validator::extend('alpha_space', function($attr, $value) {
    		return preg_match('/^([a-zA-Z0-9\x20])+$/', $value);
		});
        $new_outline = [];
		$submitted_info = Input::all();
		$rules = [
			'course_outcomes'      => 'required|alpha_space|max:500',
			'course_name'          => 'required|alpha_space',
			'credit_hours'         => 'required|numeric',
			'instructor_name'      => 'required|alpha_space',
			'office_location'      => 'required|alpha_space',
			'office_hours'         => 'required|alpha_space',
			'email'                => 'required|email',
			'course_description'   => 'required|alpha_space',
			'course_prerequisites' => 'required|alpha_space',
			'course_texts'         => 'required|alpha_space',
			'course_outcomes'      => 'required|alpha_space'
		];
		$validator = Validator::make($submitted_info, $rules);

		if($validator->fails()) {
//			return Response::json(['errors' => $validator->errors()]);
            return Redirect::to('courseoutline/create')->withErrors($validator)->withInput($submitted_info);
		}
		$submitted_info['course_outcomes'] = explode("\n", $submitted_info['course_outcomes']);
		PDF::loadView('pdfs.test',
	      array('submitted_info' => $submitted_info))->save(public_path().'/courseoutlines/'.studly_case($submitted_info['course_name']).'.pdf');
        $new_outline = [
            'path' => '/courseoutlines/'.studly_case($submitted_info['course_name']).'.pdf'
        ];
//		return Response::json('/courseoutlines/'.studly_case($submitted_info['course_name']).'.pdf');
//      return Redirect::to('/courseoutlines/'.studly_case($submitted_info['course_name']).'.pdf');
        return Redirect::to('courseoutline/create')->withNewOutline($new_outline);
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