@extends('profesores.master')

@section('breadcrums')
<div class="breadcrumbs">
    <div class="container">
        <h1 class="pull-left">Grupos</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="index-2.html">Inicio</a></li>
            <li class="active">Grupos</li>
        </ul>
    </div>
</div>
@stop

@section('profile-body')

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-green margin-bottom-40">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-users"></i> Grupos</h3>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Materia</th>
                        <th>Materia</th>
                        <th>Miembros</th>
                        <th>Fecha creación</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($materias as $m)
                    <tr>
                        <td><a href="grupos/{{$m->code}}">{{$m->name}}</a></td>
                        <td></td>
                        <td><a href="#">34</a></td>
                        <td>15 febrero 2015</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>                  
    </div>
</div>
@stop