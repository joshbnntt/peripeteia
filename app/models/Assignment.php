<?php

class Assignment extends eloquent {
    protected $fillable = array('outline_id', 'due_date', 'description', 'type');
    
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	 protected $table =  "assignments";
    
    public function outline(){
       return $this->belongsTo('Outline');
    }
}