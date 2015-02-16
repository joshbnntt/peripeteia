<?php namespace Peri;

use Illuminate\Database\Eloquent\Model;

class Outline extends Model {

   /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
   protected $fillable = [
      'instructor_id', 'course_id', 'description', 'course_requirements'
   ];
    
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	 protected $table =  "outlines";

   /**
    * Ardent validation rules
    */
   public static $rules = array(
      'instructor_id' => 'required|numeric',
      'course_id'     => 'required|numeric'
   );

    //Owns
   /**
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function assignments(){
       return $this->hasMany('Assignment');
    }

   /**
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function evaluations(){
       return $this->hasMany('Evaluation');
    }

   /**
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function miscellaneous(){
       return $this->hasMany('Miscellaneous');
    }

   /**
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function outcomes(){
       return $this->hasMany('Outcome');
    }

   /**
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function requirements(){
       return $this->hasMany('Requirement');
    }

   /**
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function summaries(){
       return $this->hasMany('Summary');
    }

    //Belongs to
   /**
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function instructor(){
        return $this->belongsTo('User');
    }

   /**
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function course(){
        return $this->belongsTo('Course');
    }
}