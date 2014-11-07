<?php
class SessionsController extends BaseController{
   public function create()
   {
      return View::make('sessions.create');
   }
   public function delete()
   {
      Auth::logout();
      return Redirect::to('login');
   }
   
   public function store()
   {
      if(Auth::attempt(Input::only('email', 'password')))
      {
         return Redirect::intended('');
      }
      return 'failed!';
   }
}