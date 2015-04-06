<?php

class Person extends BaseModel {
    
    protected $fillable = array('first_name', 'email', 'last_name');
    protected $table ='person';
    
    public function user(){
        return $this->hasMany('User');
    }
    
}
