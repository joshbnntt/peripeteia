<?php

class Course extends Eloquent {
    protected $fillable = array('name', 'number');
    
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