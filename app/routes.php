<?php

/*
|--------------------------------------------------------------------------
| Application Routes una prueba
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', 'IndexController@index');

Route::get('prueba',function(){
	return "Esta es una prueba de ruteos";
	});
Route::get('armando',function(){
    return "hola mundo";
});
	
Route::get('pruebausuario',function(){
	
	$user = new User();
	$user->real_name = 'hola4';
	$user->email = 'prueba4@prueba.com';
	$user->password = 'prueba';
	$user->save();
	 
		
	});
Route::get('users/pagi','UsersController@paginado');	
Route::get('users','UsersController@index');
//Route::get('users/all','UsersController@all');
Route::get('users/all',array('as'=>'AllUsers','uses'=>'UsersController@all'));
Route::get('user/{id}',array('as'=>'user','uses'=>'UsersController@showProfile'));
Route::get('users/new',array('as'=>'newUser','uses'=>'UsersController@nuevo'));
Route::post('users/create',array('as'=>'createUser','uses'=>'UsersController@creates'));
Route::get('users/create',array('as'=>'createUser','uses'=>'UsersController@creates'));
Route::get('users/edit/{id}',array('as'=>'editUser','uses'=>'UsersController@edit'));
Route::post('users/update',array('as'=>'updateUser','uses'=>'UsersController@update'));
Route::get('test',array('as'=>'test','uses'=>'TestController@test'));
Route::get('/estudiates','Estudiantes@all');
Route::get('/person','PersonController@create');
Route::get('/person/all','PersonController@listAll');
Route::post('/person','PersonController@save');
Route::get('/admin','AdminController@index');
Route::get('/admin/users','UsersController@all');
Route::get('/some','SomeController@some');
 
//Routes para facultad
Route::get("/admin/facultades",'FacultadController@all');
Route::get("/admin/facultades/modal",'FacultadController@modal');
Route::post("/admin/facultades/edit",'FacultadController@edit');
Route::post("/admin/facultades/save",'FacultadController@save');
Route::post("/admin/facultades/delete",'FacultadController@delete');



//Routes para carreras test
Route::get("/admin/carreras",'CarreraController@all');
Route::get("/admin/carreras/modal",'CarreraController@modal');
Route::post("/admin/carreras/edit",'CarreraController@edit');
Route::post("/admin/carreras/save",'CarreraController@save');
Route::post("/admin/carreras/delete",'CarreraController@delete');


//Routes para profile de profesoresss
Route::get("/profesores/home",array('as' => 'profesores.home', 'uses' => 'ProfessorController@profesoresHome'));
Route::get("/profesores/perfil",array('as' => 'profesores.perfil', 'uses' => 'ProfessorController@profesoresProfile'));
Route::get("/profesores/grupos",array('as' => 'profesores.grupos', 'uses' => 'ProfessorController@profesoresGroups'));
Route::get("/profesores/grupos/{id}/foro",'ProfessorController@profesoresGroup');
Route::get("/profesores/grupos/{id}",array('as'=>'profesores.grupo','uses'=>'ProfessorController@profesoresGroup'));
Route::get("/profesores/grupos/{id}/{ciclo}",array('as'=>'profesores.grupo.ciclo','uses'=>'ProfessorController@profesoresGroup'));
Route::get("/profesores/grupos/{id}/miembros",'ProfessorController@profesoresGroupMembers');
Route::get("/profesores/grupos/{id}/archivos",'ProfessorController@profesoresGroupFiles');
Route::get("/profesores/grupos/{id}/configuracion",'ProfessorController@profesoresGroupConfig');
Route::get("/profesores/grupos/{id}/calendario", array('as' => 'group.calendar', 'uses' => 'ProfessorController@profesoresGroupCalendar'));