<?php

class IndexController extends BaseController{
    
    public function index(){
        return View::make('home');
        //return 'hola';
    }
}