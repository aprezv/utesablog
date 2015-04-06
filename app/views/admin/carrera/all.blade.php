@extends ('admin.master')

@section ('scripts')
{{HTML::script('assets/js/admin/careers.js')}}
@stop

@section ('content')
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <button id="nuevo" class="btn btn-primary flat"><i class="fa fa-file"></i> Nuevo</button>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table table-hover table-bordered table-striped table-condensed">
            <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Facultad</th>
            <th class="action-row">Acción</th>
            </thead>
            <tbody>
                @foreach ($careers as $c)
                <tr>
                    <td>{{$c->id}}</td>
                    <td>{{$c->name}}</td>
                    <td>{{$c->faculty->name}}</td>
                    <td>
                        <button  id="{{$c->id}}"  class="btn btn-xs btn-flat btn-warning view"><i class="fa fa-eye"></i> Ver</button>
                        <button  id="{{$c->id}}"  class="btn btn-xs btn-flat btn-info edit"><i class="fa fa-edit"></i> Editar</button>
                        <button  id="{{$c->id}}"  class="btn btn-xs btn-flat btn-danger delete"><i class="fa fa-trash"></i> Borrar</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop
