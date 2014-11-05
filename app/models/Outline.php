<?php

class Outline extends eloquent {
    protected $fillable = array();
    
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	 protected $table =  "outlines";

    public function instructor(){
        return $this->belongsTo('User');
    }

    public function course(){
        return $this->belongsTo('Course');
    }
}