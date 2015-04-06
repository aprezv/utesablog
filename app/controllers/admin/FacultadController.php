<?php

class FacultadController extends BaseController {

    public function index() {
        return View::make('admin.home');
    }

    public function all() {
        return View::make('admin.facultad.all')
                        ->with('faculties', Faculty::all());
    }

    public function modal() {
        return View::make('admin.facultad.modal');
    }

    public function edit() {
        $id = Input::get('id');
        return View::make('admin.facultad.modal')
                        ->with('f', Faculty::find($id))
                        ->with('action', 'Editar');
    }

    public function save() {
        $return = false;
        if (Input::has('id')) {
            $facultad = Faculty::find(Input::get('id'));
            $facultad->name = Input::get('name');
            $facultad->save();
            $return = true;
        } else {
            $facultad = Faculty::create(Input::all());
            $return = true;
        }
        return json_encode($return);
    }

    public function delete() {
        $id = Input::get('id');
        $f = Faculty::find($id);
        if ($f->delete()) {
            return json_encode(true);
        }
    }

}
