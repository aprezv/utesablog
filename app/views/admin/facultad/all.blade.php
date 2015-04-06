@extends ('admin.master')

@section ('scripts')
{{HTML::script('assets/js/admin/faculties.js')}}
@stop

@section ('content')
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <button class="btn btn-primary flat" id="nuevo"><i class="fa fa-file"></i> Nuevo</button>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table table-hover table-bordered table-striped table-condensed">
            <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th class="action-row">Acción</th>
            </thead>
            <tbody>
                @foreach ($faculties as $f)
                <tr>
                    <td>{{$f->id}}</td>
                    <td>{{$f->name}}</td>
                    <td>
                        <button class="btn btn-xs btn-flat btn-warning view"><i class="fa fa-eye"></i> Ver</button>
                        <button id="{{$f->id}}" class="btn btn-xs btn-flat btn-info edit"><i class="fa fa-edit"></i> Editar</button>
                        <button id="{{$f->id}}" class="btn btn-xs btn-flat btn-danger delete"><i class="fa fa-trash"></i> Borrar</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
