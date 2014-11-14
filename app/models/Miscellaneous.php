<?php
use LaravelBook\Ardent\Ardent;

class Miscellaneous extends Ardent {
	protected $fillable = array('outline_id', 'title', 'text');

   /**
    * The database table used by the model.
    *
    * @var string
    */
   protected $table =  "miscellaneous";

   /**
    * Ardent validation rules
    */
   public static $rules = array(
      'outline_id' => 'required|numeric',
      'title'      => 'required',
      'text'       => 'required'
   );

   /**
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function outline(){
      return $this->belongsTo('Outline');
   }
}