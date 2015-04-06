<?php

class Group extends BaseModel{
    
    protected  $table = 'group';
    
    public function users(){
        return $this->belongsToMany('User');
    }
    
    public function materia(){
        return $this->belongsTo('Materia');
    }
    public function forumThread(){
        return $this->hasMany('ForumThread');
    }
}