<?php

class PersonController extends BaseController{
    
    public function save(){
        $person = Person::create(Input::all());
    }
    
    public function create(){
        return View::make('person.create');
    }
    
    public function listAll(){
        $persons = Person::all();
        return View::make('person.all')->with('users',$persons);
    }
          
}

