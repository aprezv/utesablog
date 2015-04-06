<?php

class ProfessorController extends BaseController {

    public function profesoresHome() {
        return View::make('profesores.home')
                        ->with('active', 'home');
    }

    public function profesoresProfile() {
        return View::make('profesores.profile')
                        ->with('active', 'perfil');
    }

    public function profesoresGroups() {


        $groups = Group::where('owner_user', '=', '1')->lists('materia_id');
        //var_dump($groups);die();
        $materias = DB::table('materia')->whereIn('id', $groups)->get();
        //$groups = Group::with('materia')->where('owner_user', '=', 1)->get();
        return View::make('profesores.groups')
                        ->with('materias', $materias)
                        ->with('active', 'grupos');
    }

    public function profesoresGroup($materiaId, $ciclo = '') {
        var_dump(Input::get('ciclo'));
        if (Input::has('ciclo')!=''&&Input::get('ciclo')!='todos'&&$ciclo=='') {
            return Redirect::route('profesores.grupo.ciclo', array('id' => $materiaId, 'ciclo' => Input::get('ciclo')));
        }else if (Input::get('ciclo')!=''){
            return Redirect::route('profesores.grupo.ciclo', array('id' => $materiaId, 'ciclo' => Input::get('ciclo')));
        } 
        if(Input::get('ciclo')=='todos'){
            die('mamamama');
            return Redirect::route('profesores.grupo', array('id' => $materiaId));
        }
        
        $materia = Materia::where('code', '=', $materiaId)->first();
        $groups = Group::where('owner_user', '=', '1')
                ->where('materia_id', '=', $materia->id)
                ->lists('id');
        
        $ciclos = DB::table('forum_thread')
                ->select('ciclo', 'ciclo')
                ->groupBy('ciclo')
                ->lists('ciclo', 'ciclo');

        if ($ciclo == ''||$ciclo == 'todos') {
            $forumThreads = ForumThread::whereIn('group_id', $groups)->get(); 
        } else {
            $forumThreads = ForumThread::whereIn('group_id', $groups)->where('ciclo', '=', $ciclo)->get(); 
        }
        return View::make('profesores.group-forum')
                        ->with('active', 'grupos')
                        ->with('activetab', 'tab-home')
                        ->with('threads', $forumThreads)
                        ->with('ciclos', $ciclos)
                        ->with('ciclo', $ciclo);
    }

    public function profesoresGroupRedirect($materiaId) {

        return Redirect::action('ProfessorController@profesoresGroup', array($materiaId));
    }

    public function profesoresGroupMembers($id) {

        $members = Group::find($id)->users;
        $members->load('person');
        /*
          $members = Group::with(array('author' => function($query) {
          $query->addSelect(array('id', 'name'));
          }))->get();
         * */

        return View::make('profesores.group-members')
                        ->with('active', 'grupos')
                        ->with('activetab', 'tab-members')
                        ->with('members', $members);
    }

    public function profesoresGroupFiles() {
        return View::make('profesores.group-files')
                        ->with('active', 'grupos')
                        ->with('activetab', 'tab-files');
    }

    public function profesoresGroupCalendar() {
        return View::make('profesores.group-calendar')
                        ->with('active', 'grupos')
                        ->with('activetab', 'tab-calendar');
    }

    public function profesoresGroupConfig() {
        return View::make('profesores.group-config')
                        ->with('active', 'grupos')
                        ->with('activetab', 'tab-config');
    }

}
