{{--Carrera--}}
<div class="modal fade" id="modal-nuevo" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
    <div class="modal-dialog">
        <form id="form-nuevo" method="post" onsubmit="submitForm(event, $(this));">
            <input type="hidden" name="id" id="id" value="{{$c->id or ''}}">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">{{$action or 'Nueva' }} Carrera</h3>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label>Facultad</label>
                        {{Form::select('faculty_id', $f, $c->faculty_id, array('class' => 'form-control'))}}
                    </div>
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="name" value="{{$c->name or ''}}"  class="form-control">
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary flat"><i class="fa fa-save"></i> Guardar</button>
                    <button type="button" data-dismiss="modal" class="btn btn-danger flat"><i class="fa fa-times-circle"></i> Cancelar</button>
                </div>
              
            </div>
        </form>
    </div>
    <script type="text/javascript">
        $(function(){
            $('form').find('input').first().focus();
        });
        function submitForm(event, form) {
            event.preventDefault();
            var data = $(form).serializeArray();

            $.ajax({
                url: 'carreras/save',
                type: 'post',
                dataType: 'json',
                data: data,
                success: function(data) {
                    if(data){
                        window.location.reload();
                    }
                }
            });
        }
    </script>
</div>
