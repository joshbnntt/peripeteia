<?php

class Miscellaneous extends Eloquent {
	protected $fillable = array('outline_id', 'title', 'text');

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table =  "miscellaneous";

    public function outline(){
        return $this->belongsTo('Outline');
    }
}