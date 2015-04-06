<?php

class Faculty extends BaseModel {
    
    protected $fillable = array('name');
    protected $table ='faculties';
    
    public function career()
    {
        return $this->hasMany('Career');
    }
    
}