<?php

class UsersController extends BaseController {

    public function index() {
        return 'Bienvenido al controlador usuario';
    }

    public function showProfile($id) {
        $user = User::find($id);

        return View::make('user.profile', array('user' => $user))->with('title', 'Perfil de usuario')
                        ->with('header', View::make('layouts.header'));
    }

    public function all() {

        return View::make('admin.users.all')
                ->with('users', Person::all());
    }

    public function nuevo() {

        return View::make('user.new');
    }

    public function creates() {

        $validator = User::validate(Input::all());

        if ($validator->fails()) {
            return Redirect::route('newUser')->withErrors($validator)->withInput();
        } else {
            $user = new User();
            $user->real_name = Input::get('real_name');
            $user->email = Input::get('email');
            $user->password = Input::get('password');
            $user->save();
        }
        return Redirect::route('AllUsers')->with('users', User::all())->with('message', 'User created');
    }

    public function delete() {
        
    }

    public function paginado() {
        return User::paginate(5);
    }

    public function edit($id) {
        $user = User::find($id);

        return View::make('user.edit')->with('user', $user)
                        ->with('header', View::make('layouts.header'))
                        ->with('title', Lang::get('messages.edituser'));
    }

    public function update() {
        $user = User::find(Input::get('id'));
        $user->real_name = Input::get('real_name');
        $user->email = Input::get('email');
        $user->password = Input::get('password');

        $user->save();
        return Redirect::route('AllUsers')->with('users', User::all())->with('message', 'User updated');
    }

}

?>