@extends('layouts.master')

@section('header')
	{{$header}}
@stop

@section('content')
	{{$user->real_name}}
@stop