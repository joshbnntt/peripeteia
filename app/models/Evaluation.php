<?php

class Evaluation extends eloquent {
    protected $fillable = array('outline_id', 'percent', 'name');
    
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	 protected $table =  "evaluations";
    
    public function outline(){
       return $this->belongsTo('Outline');
    }
}