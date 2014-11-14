<?php
use LaravelBook\Ardent\Ardent;

class Course extends Ardent {
   protected $fillable = array('name', 'number', 'general_information', 'specific_information', 'accrediting_information');
    
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
      'name'                    => 'required|alpha',
      'number'                  => 'required|alpha_num',
      'general_information'     => 'required',
      'specific_information'    => 'required',
      'accrediting_information' => 'required'
   );

   /**
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function outlines(){
      return $this->hasMany('Outline');
   }
}