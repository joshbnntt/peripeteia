<?php
/*********************************************************
   
*********************************************************/
class SessionsController extends BaseController{
   /**
   * Inject the User Repository
   */
   public function __construct(User $user)
   {
      $this->user = $user;
   }
/**
   * Validate the entered use credentials
   * POST /login
   *
   * @return Response
   */
  public function validate()
  {
     $rules = [
        'username' => 'required',
        'password' => 'required|alphaNum|min:3'
     ];

     $validator = Validator::make(Input::all(), $rules);

     if($validator->fails()) {
        return Redirect::to('login')->withErrors($validator)->withInput(Input::except('password'));
     } else {
        $userdata = [
           'username' => Input::get('username'),
           'password' => Input::get('password')
        ];
     }

     if(Auth::attempt($userdata)) {
        return Redirect::intended('/');
     } else {
        return Redirect::to('login');
     }
     return;
  }
   /* Pulls up the login page and starts a session to hold their data */
   public function create()
   {
      return View::make('sessions.create');
   }

   /* Logs out the user and redirects back to the login page */
   public function delete()
   {
      Auth::logout();
      return Redirect::to('login');
   }
   
   /* Authenticates user login data. 
      If passes redirects to where they attempted to login. 
      If fails warns the user.*/
   public function store()
   {
      if(Auth::attempt(Input::only('email', 'password')))
      {
         return Redirect::intended('');
      }
      return Redirect::route('session.create')
            ->withInput()
            ->with('login_errors', true);
   }
}