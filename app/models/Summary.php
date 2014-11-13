<?php
use LaravelBook\Ardent\Ardent;

class Summary extends Ardent {
    protected $fillable = array('outline_id', 'week', 'day', 'lecture', 'description');
    
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	 protected $table =  "summaries";

   /**
    * Ardent validation rules
    */
   public static $rules = array(
      'description' => 'required',
      'week'        => 'numeric',
      'day'         => 'numeric',
      'lecture'     => 'lecture'
   );

   /**
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function outline(){
       return $this->belongsTo('Outline');
    }
}