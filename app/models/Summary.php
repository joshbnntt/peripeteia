<?php

class Summary extends Eloquent {
    protected $fillable = array('outline_id', 'week', 'day', 'lecture', 'description');
    
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	 protected $table =  "summaries";
    
    public function outline(){
       return $this->belongsTo('Outline');
    }
}