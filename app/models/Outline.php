<?php

class Outline extends Eloquent {
    protected $fillable = array('instructor_id', 'course_id', 'credit_hours', 'catalog_description', 'description', 'course_requirements');
    
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	 protected $table =  "outlines";

    //Owns
    public function assignments(){
       return $this->hasMany('Assignment');
    }

    public function evaluations(){
       return $this->hasMany('Evaluation');
    }
    
    public function miscellaneous(){
       return $this->hasMany('Miscellaneous');
    }
    
    public function outcomes(){
       return $this->hasMany('Outcome');
    }
    
    public function requirements(){
       return $this->hasMany('Requirement');
    }

    public function summaries(){
       return $this->hasMany('Summary');
    }

    //Belongs to
    public function instructor(){
        return $this->belongsTo('User');
    }

    public function course(){
        return $this->belongsTo('Course');
    }
}