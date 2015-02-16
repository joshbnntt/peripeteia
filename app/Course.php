<?php namespace Peri;

use Illuminate\Database\Eloquent\Model;

class Course extends Model {

   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
      'name', 'credit_hours', 'general_information', 'specific_information', 'accrediting_information'
   ];
    
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
      'name'                    => 'required',
      'general_information'     => 'required',
      'specific_information'    => 'required',
      'accrediting_information' => 'required',
   );

   /**
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function outlines(){
      return $this->hasMany('Outline');
   }
}