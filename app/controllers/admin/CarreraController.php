<?php

class CarreraController extends BaseController {

    public function index() {
        return View::make('admin.home');
        //return 'hola';
    }

    public function all() {
        return View::make('admin.carrera.all')
                        ->with('careers', Career::all());
    }

    public function modal() {
       $c = (object) array('faculty_id'=>'');
        return View::make('admin.carrera.modal')
                ->with('f', Faculty::lists('name', 'id'))
                ->with('c',$c);
    }

    public function edit() {
        $id = Input::get('id');
        return View::make('admin.carrera.modal')
                        ->with('c', Career::find($id))
                        ->with('f', Faculty::lists('name', 'id'))
                        ->with('action', 'Editar');
    }

    public function save() {
        $return = false;
        if (Input::has('id')) {
            $career = Career::find(Input::get('id'));
            $career->name = Input::get('name');
            $career->faculty_id = Input::get('faculty_id');
            $career->save();
            $return = true;
        } else {
            $career = Career::create(Input::all());
            $return = true;
        }
        return json_encode(Input::get('faculty_id'));
    }

    public function delete() {
        $id = Input::get('id');
        $f = Career::find($id);
        if ($f->delete()) {
            return json_encode(true);
        }
    }

}
