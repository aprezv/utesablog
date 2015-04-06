<?php

class Career extends BaseModel {

    protected $fillable = array('id', 'name','faculty_id');
    protected $table = 'careers';

    public function faculty() {
        return $this->belongsTo('Faculty');
    }
    
    public function materia(){
        return $this->hasMany('Materia');
    }

}
