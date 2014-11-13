<?php
use LaravelBook\Ardent\Ardent;

class Evaluation extends Ardent {
    protected $fillable = array('outline_id', 'percent', 'name');
    
   /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table =  "evaluations";

   /**
    * Ardent validation rules
    */
   public static $rules = array(
      'name'     => 'required|alpha',
      'percent'  => 'required|numeric|between:0,100'
   );

   /**
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function outline(){
      return $this->belongsTo('Outline');
   }
}