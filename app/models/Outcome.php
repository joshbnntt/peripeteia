<?php
use LaravelBook\Ardent\Ardent;

class Outcome extends Ardent {
   protected $fillable = array('outline_id', 'description');
    
   /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table =  "outcomes";

   /**
    * Ardent validation rules
    */
   public static $rules = array(
      'description' => 'required',
   );

   /**
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function outline(){
      return $this->belongsTo('Outline');
   }
}