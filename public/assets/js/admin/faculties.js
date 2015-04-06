$(document).ready(function() {
    $(".delete").on('click', function() {
        if (confirm("Esta seguro que desea eliminar?")) {
            $.ajax({
                url: 'facultades/delete',
                dataType: 'json',
                type: 'post',
                data: {
                    id: $(this).attr('id')
                },
                success: function(data) {
                    if (data) {
                        window.location.reload();
                    }
                }
            }
            );
        }
    });

    $(".edit").on('click', function() {
        $.ajax({
            url: 'facultades/edit',
            dataType: 'html',
            type: 'post',
            data: {
                id: $(this).attr('id')
            },
            success: function(data) {
                var modal = $(data).modal().show();
                $(modal).on("hidden.bs.modal", function() {
                    $(this).remove();
                });
            }
        }
        );
    });

    $("#nuevo").on('click', function() {
        $.ajax({
            type: "get",
            dataType: "html",
            url: "facultades/modal",
            success: function(data) {
                var modal = $(data).modal().show();
                $(modal).on("hidden.bs.modal", function() {
                    $(this).remove();
                });
            }
        });
    });
     
});
