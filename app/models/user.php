<?php

class User extends BaseModel {

    protected $table = 'user';

    public function set_password($string) {
        $this->set_attribute('password', 'creta');
    }

    public static $rules = array('real_name' => 'required|min:2|unique:users', 'email' => 'email');

    public static function validate($data) {
        return Validator::make($data, static::$rules);
    }

    public function person() {
        return $this->belongsTo('Person');
    }

    public function group() {
        return $this->belongsToMany('Group');
    }

}

?>