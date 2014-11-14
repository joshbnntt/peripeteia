<?php

use LaravelBook\Ardent\Ardent;

class Assignment extends Ardent {
   protected $fillable = array('outline_id', 'due_date', 'description', 'type');
    
   /**
	* The database table used by the model.
	*
	* @var string
	*/
   protected $table =  "assignments";

   /**
    * Ardent validation rules
    */
   public static $rules = array(
      'outline_id'  => 'required|numeric',
      'due_date'    => 'date',
      'description' => 'required'
   );

   /**
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function getOutline(){
     return $this->belongsTo('Outline');
   }
}