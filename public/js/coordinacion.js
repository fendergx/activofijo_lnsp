//Delay table load until everything else is loaded
$(window).load(function(){
    $('#postTable').removeAttr('style');
});


/* Eliminar*/
$(document).on('click', '.delete-modal', function() {
    $('#id_delete').val($(this).data('id'));

    $('#modal-eliminar-coordinacion').modal('show');
    id = $('#id_delete').val();
});
$('.modal-footer').on('click', '.delete', function() {
    $.ajax({
        type: 'DELETE',
        url: 'coordinacion/' + id,
        data: {
            '_token': $('input[name=_token]').val(),
        },
        success: function(data) {
            toastr.success('Se ha eliminado la coordinación', 'Éxito!', {timeOut: 5000});
            $('.itemCoordinacion' + data['id_coord']).remove();
            $('.col1').each(function (index) {
                $(this).html(index+1);
            });
        }
        
        
    }).fail( function( jqXHR, textStatus, errorThrown ) {
        toastr.error('No se puede eliminar la coordinación, ya que tiene\náreas dependientes', 'Error!');
    });
});

/* agregar*/ 
$(document).on('click', '.add-modal', function() {
            // Vaciar imputs
            $('#nombre_coord').val('');
            $('.errorCoordinacion').addClass('hidden');

            //mostrar modal
            $('#modal-registro-coordinacion').modal("show");

        });
/*insertar*/
$('.modal-footer').on('click', '.addCoordinacion', function() {
    $.ajax({
        type: 'POST',
        url: 'coordinacion',
        data: {
            '_token': $('input[name=_token]').val()
            ,            'nombre_coord': $('#nombre_coord').val(),
        },

        success: function(data) {
            //$('.errorCoordinacion').addClass('hidden');

            if ((data.errors)) {

                setTimeout(function () {
                    $('#modal-registro-coordinacion').modal('show');
                    toastr.error('Llene correctamente los campos!', 'Ha ocurrido un error', {timeOut: 7000});
                }, 500);
                if (data.errors.nombre_coord) {
                    if($('#nombre_coord').val() ==''){
                        toastr.warning('Debe ingresar el nombre de la coordinación');
                    }else{
                        //$('.errorCoordinacion').removeClass('hidden');
                        $('.errorCoordinacion').text(data.errors.nombre_coord);
                        toastr.warning('La coordinacion solo puede contener letras', '', {timeOut: 3000});
                    }
                    
                }
            } else {
                toastr.success('Se ha agregado la coordinacion!', 'Éxito!', {timeOut: 2300});
                $('#postTable').append("<tr class='itemCoordinacion" + data.id_coord + "'><td>" + data.nombre_coord+"<td><button class='edit-modal btn btn-info' data-id='"+data.id_coord+"' data-coordinacion='"+data.nombre_coord+"'><span class='fas fa-edit'></span>&nbsp;Editar</button> <button class='delete-modal btn btn-danger' data-id='"+data.id_coord+"' data-coordinacion='"+data.nombre_coord+"'><span class='fas fa-trash'></span>&nbsp;Eliminar</button></td>");

            }
        },
    }).fail( function( jqXHR, textStatus, errorThrown ) {
        toastr.warning('Ya existe una coordinación con ese nombre', 'Coordinación no agregada!');
    });
});


// editar
$(document).on('click', '.edit-modal', function() {
    $('#id_edit').val($(this).data('id'));
    $('#coordinacion_editar').val($(this).data('coordinacion'));
    id = $('#id_edit').val();
    $('#modal-editar-coordinacion').modal('show');
});
$('.modal-footer').on('click', '.edit', function() {
    $.ajax({
        type: 'PUT',
        url: 'coordinacion/' + id,
        data: {
            '_token': $('input[name=_token]').val(),
            'id_coord': $("#id_edit").val(),
            'nombre_coord': $('#coordinacion_editar').val(),
        },
        success: function(data) {
            $('.errorCoordinacion').addClass('hidden');

            if ((data.errors)) {

                setTimeout(function () {
                    $('#modal-editar-coordinacion').modal('show');
                    toastr.error('Llene correctamente los campos!', 'Error', {timeOut: 7000});
                }, 500);
                if (data.errors.nombre_coord) {
                    if($('#nombre_coord').val() ==''){
                        toastr.warning('Debe ingresar el nombre de la coordinación');
                    }else{
                        //$('.errorCoordinacion').removeClass('hidden');
                        $('.errorCoordinacion').text(data.errors.nombre_coord);
                        toastr.warning('La coordinacion solo puede contener letras', '', {timeOut: 3000});
                    }
                    
                }
                
            } else {
                toastr.success('Se ha editado la coordinación!', 'Éxito!', {timeOut: 2000});
                $('.itemCoordinacion' + data.id_coord).replaceWith("<tr class='itemCoordinacion" + data.id_coord + "'><td>" + data.nombre_coord+"<td><button class='edit-modal btn btn-info' data-id='"+data.id_coord+"' data-coordinacion='"+data.nombre_coord+"'><span class='fas fa-edit'></span>&nbsp;Editar</button> <button class='delete-modal btn btn-danger' data-id='"+data.id_coord+"' data-coordinacion='"+data.nombre_coord+"'><span class='fas fa-trash'></span>&nbsp;Eliminar</button></td>");
                
            }
        }
    }).fail( function( jqXHR, textStatus, errorThrown ) {
        setTimeout(function () {
            $('#modal-editar-coordinacion').modal('show');}, 500);
        toastr.warning('Ya existe una coordinación con ese nombre', 'Coordinación no editada!');
    });
});
