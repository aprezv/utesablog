@extends('profesores.group-master')

@section('tab-content')
<div class="panel panel-green margin-bottom-40">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-users"></i> Miembros</h3>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Matricula</th>
                <th>Carrera</th>
            </tr>
        </thead>
        <tbody>
            @foreach($members as $m)
            <tr>
                <td><a href="grupos/1/home">{{$m->person->first_name.' '.$m->person->last_name}}</a></td>
                <td>{{$m->person->email}}</td>
                <td>{{$m->login}}</td>
                <td>Informática</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop