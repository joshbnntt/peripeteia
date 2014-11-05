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