<?php

class Requirement extends eloquent {
    protected $fillable = array('outline_id', 'title', 'description');
    
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	 protected $table =  "requirements";

    public function outline(){
       return $this->belongsTo('Outline');
    }
}