@extends ('admin.master')

@section ('scripts')
{{HTML::script('assets/js/admin/allUsers.js')}}
@stop

@section ('content')
<div class="row">
    <div class="col-md-12">
        <table class="table table-hover table-bordered table-striped table-condensed">
            <thead>
            <th>Nombre</th>
            <th>Apellido</th>
            <th class="action-row">Acción</th>
            </thead>
            <tbody>
                @foreach ($users as $u)
                <tr>
                    <td>{{$u->first_name}}</td>
                    <td>{{$u->last_name}}</td>
                    <td>
                        <button class="btn btn-xs btn-flat btn-warning view"><i class="fa fa-eye"></i> Ver</button>
                        <button class="btn btn-xs btn-flat btn-info edit"><i class="fa fa-edit"></i> Editar</button>
                        <button class="btn btn-xs btn-flat btn-danger delete"><i class="fa fa-trash"></i> Borrar</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop
