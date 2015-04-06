@extends('layouts.master')

@section('header')
{{$header}}
@stop

@section('content')
<div class="content">
<h3>All Users List</h3>
@if (Session::has('message'))
{{Session::get('message')}}
@endif
	<table>
	@foreach($users as $user)
		<tr>
        	<td>
            	{{HTML::linkRoute('user',$user->real_name,array($user->id),array('id'))}}
            </td>
            <td>
            	{{HTML::linkRoute('user','Delete',array($user->id),array($user->id))}}
            </td>
            <td>
            	{{HTML::linkRoute('editUser','Update',array($user->id),array($user->id))}}
            </td>
       	</tr>
	@endforeach
	</table>

	{{HTML::linkRoute('newUser','New User',array(),array())}}
    {{Lang::get('messages.mensaje');}}
<div>
@stop