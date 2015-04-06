@extends('profesores.master')


@section('breadcrums')
<div class="breadcrumbs">
    <div class="container">
        <h1 class="pull-left">IT250-001</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="index-2.html">Inicio</a></li>
            <li><a href="#">Grupos</a></li>
            <li class="active">IT250-001</li>
        </ul>
    </div> 
</div>
@stop

@section('profile-body')
<div class="row">
    <div class="col-md-3">
        <form method="get">
            <div class="form-group">
                <label>Ciclo</label>  
                {{ Form::select('ciclo',array('todos' => 'Todos')+$ciclos,$ciclo,array('class'=>'form-control','id'=>'ciclo'))}}
            </div>
        </form>
    </div>
</div>

<div class="tab-v2">
    <ul class="nav nav-tabs">
        <li id="tab-home"><a href="foro">Foro</a></li>
        <li id="tab-files"><a href="archivos">Archivos</a></li>
        <li id="tab-calendar"><a href="calendario">Calendario</a></li>
        <li id="tab-members"><a href="miembros">Miembros</a></li>
        <li id="tab-config"><a href="configuracion">Configuración</a></li>
    </ul>                
    <div class="tab-content">
        <div class="tab-pane fade active in" id="home-1">
            @yield('tab-content')
        </div>
    </div>
</div>
@stop

@section('post-scripts')
<script type="text/javascript">
    $(document).ready(function() {

        $("#{{$activetab}}").addClass('active');
        $("#ciclo").on('change', function() {
           this.form.submit();
        });
    });
</script>
@stop