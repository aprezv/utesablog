<?php

class Materia extends BaseModel {

    protected $fillable = array('id', 'name','code','career_id');
    protected $table = 'materia';

    public function career() {
        return $this->belongsTo('Career');
    }
    
    public function group(){
        return $this->hasMany('Group');
    }

}
