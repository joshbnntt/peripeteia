<?php
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 2/7/2015
 * Time: 10:01 PM
 */

class SearchController extends BaseController{

    /**
     * Searches for a teacher in the directory
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function instructorSearch()
    {
        $search = Input::all();
        $results = array();

        $preFilterText = '';
        $rules = [
            'filter_text' => array('required', 'regex:/^\s*[a-zA-Z]+\s*[a-zA-Z]*\s*$/')
        ];

        $messages = array(
            'required' => 'The search field is required',
            'regex' => 'Searches can only contain one space'
        );

        $validator = Validator::make($search, $rules, $messages);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        } else {
            $filterText = $search;
            $filterText = explode(" ", $preFilterText);

            if (sizeof($filterText) == 1) {
                $users = DB::table('users')
                    ->where('first_name', 'LIKE', "$filterText[0]%")
                    ->orWhere('last_name', 'LIKE', "$filterText[0]%")
                    ->get();
            } elseif (sizeof($filterText) == 2) {
                $users = DB::table('users')
                    ->where('first_name', 'LIKE', "$filterText[0]%")
                    ->where('last_name', 'LIKE', "$filterText[1]%")
                    ->get();
            }

            foreach ($users as $user) {
                if (str_contains(strtolower($user->first_name), $search) || str_contains(strtolower($user->last_name), $search)) {
                    $results[] = ['first_name' => $user->first_name, 'last_name' => $user->last_name];
                }
            }

            return Redirect::action('UserController@index')
                ->with('users', $users);
        }
    }

    /**
     * Searches for a course in the directory
     *
     * @return mixed
     */
    public function courseNameSearch()
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

        return Redirect::back()->withPreFilterText($results);
    }

    /**
     * Searches for a description of a course.
     *
     * @return mixed
     */
    public function descriptionSearch()
    {
        $search = strtolower(Input::get('s'));
        $description = Outline::find($search);


        return Redirect::back()->withPreFilterText($description);
    }
} 