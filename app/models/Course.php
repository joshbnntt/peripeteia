<?php
use LaravelBook\Ardent\Ardent;

class Course extends Ardent {
   protected $fillable = array('name', 'number', 'general_info', 'specific_info', 'accrediting_info');
    
   /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
   protected $table =  "courses";

   /**
    * Ardent validation rules
    */
   public static $rules = array(
      'name'             => 'required|alpha',
      'number'           => 'required|alpha_num',
      'general_info'     => 'required',
      'specific_info'    => 'required',
      'accrediting_info' => 'required'
   );

   /**
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function outlines(){
      return $this->hasMany('Outline');
   }
}