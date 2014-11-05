<?php

class Course extends eloquent {
    protected $fillable = array();
    
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	 protected $table =  "courses";

    public function outlines(){
        return $this->hasMany('Outline');
    }
}