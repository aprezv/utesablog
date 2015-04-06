@extends('layouts.master')

@section('header')
	{{$header}}
@stop

@section('content')


{{Form::open(array('route'=>'updateUser'))}}
<table>
	<tr>
		<td>{{Form::label('real_name','Name: ')}}</td>
		<td>{{Form::text('real_name',$user->real_name)}}</td>
	</tr>
	<tr>
		<td>{{Form::label('email','Email: ')}}</td>
		<td>{{Form::text('email',$user->email)}}</td>
	</tr>
	<tr>
		<td>{{Form::label('password','Password: ')}}</td>
		<td>{{Form::text('password',$user->password)}}</td>
	</tr>
	<tr>
		<td>{{Form::hidden('id',$user->id)}}</td>
		<td>{{Form::submit('Update User')}}</td>
	</tr>

</table>
{{Form::close()}}
@stop