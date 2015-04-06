<?php

class ForumThread extends BaseModel {
    
    protected $fillable = array('name');
    protected $table ='forum_thread';
    
    public  function group(){
        return $this->belongsTo('Group');
    }
    
    public  function user(){
        return $this->belongsTo('User');
    }
    
}