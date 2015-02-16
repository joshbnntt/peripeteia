<?php namespace Peri\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Session;
use DB;

class UserController extends Controller
{
    public function index()
    {
        if(Session::has('users')) {
            $users = Session::get('users');}
        else {
            $users = "";
        }
        return view('pages.search.teacherdirectory')->with('allusers', $users);

    }

    public function search(Request $request)
    {
        $prefilter_text = '';

        $rules = [
            'filter_text' => array('required', 'regex:/^\s*[a-zA-Z]+\s*[a-zA-Z]*\s*$/')
        ];

        $messages = array(
            'required' => 'The search field is required',
            'regex' => 'Searches can only contain one space'
        );

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
            $filterText = $request->all();

            $filterText = explode( " ", $prefilter_text);

            if(sizeof($filterText) == 1) {
                $users = DB::table('users')
                    ->where('first_name', 'LIKE', "$filterText[0]%")
                    ->orWhere('last_name', 'LIKE', "$filterText[0]%")
                    ->get();
            } elseif(sizeof($filterText) == 2) {
                $users = DB::table('users')
                    ->where('first_name', 'LIKE', "$filterText[0]%")
                    ->where('last_name', 'LIKE', "$filterText[1]%")
                    ->get();
            }

            return redirect('/directory')->with('users', $users);
        }
    }
}