<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use LaravelBook\Ardent\Ardent;

class User extends Ardent implements UserInterface, RemindableInterface {

   protected $fillable = array('first_name', 'last_name', 'email', 'password', 'office', 'office_hours', 'remember_token');

	use UserTrait, RemindableTrait;
   

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

   /**
    * Ardent validation rules
    */
   public static $rules = array(
      'first_name' => 'required|alpha',
      'last_name'  => 'required|alpha',
      'email'      => 'required|email',
      'password'   => 'required'
   );

   /**
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function outlines(){
      return $this->hasMany('Outline');
   }
}
