//Delay table load until everything else is loaded
$(window).load(function(){
    $('#postTable').removeAttr('style');
});


/* Eliminar*/
$(document).on('click', '.delete-modal', function() {
    $('#id_delete').val($(this).data('id'));

    $('#modal-eliminar-color').modal('show');
    id = $('#id_delete').val();
});
$('.modal-footer').on('click', '.delete', function() {
    $.ajax({
        type: 'DELETE',
        url: 'color/' + id,
        data: {
            '_token': $('input[name=_token]').val(),
        },
        success: function(data) {
            toastr.success('Se ha eliminado el color', 'Éxito!', {timeOut: 5000});
            $('.itemColor' + data['id_color']).remove();
            $('.col1').each(function (index) {
                $(this).html(index+1);
            });
        }
        
        
    }).fail( function( jqXHR, textStatus, errorThrown ) {
        toastr.error('No se a podido eliminar el color', 'Error!');
    });
});

/* agregar*/ 
$(document).on('click', '.add-modal', function() {
            // Vaciar imputs
            $('#color_af').val('');
            $('.errorColor').addClass('hidden');

            //mostrar modal
            $('#modal-registro-color').modal("show");

        });
/*insertar*/
$('.modal-footer').on('click', '.addColor', function() {
    $.ajax({
        type: 'POST',
        url: 'color',
        data: {
            '_token': $('input[name=_token]').val(),
            'color_af': $('#color_af').val(),
        },

        success: function(data) {
            //$('.errorCoordinacion').addClass('hidden');

            if ((data.errors)) {

                setTimeout(function () {
                    $('#modal-registro-color').modal('show');
                    toastr.error('Llene correctamente los campos!', 'Ha ocurrido un error', {timeOut: 7000});
                }, 500);
                if (data.errors.nombre_coord) {
                    if($('#color_af').val() ==''){
                        toastr.warning('Debe ingresar el nombre del color');
                    }else{
                        //$('.errorCoordinacion').removeClass('hidden');
                        $('.errorColor').text(data.errors.color_af);
                        toastr.warning('El color solo puede contener letras', '', {timeOut: 3000});
                    }
                    
                }
            } else {
                toastr.success('Se ha agregado el color!', 'Éxito!', {timeOut: 2300});
                $('#postTable').append("<tr class='itemColor" + data.id_color + "'><td>" + data.color_af+"<td> <button class='edit-modal btn btn-info' data-id='"+data.id_color+"' data-color_af='"+data.color_af+"'> <span class='fas fa-edit'></span>&nbsp;Editar</button> <button class='delete-modal btn btn-danger' data-id='"+data.id_color+"' data-color_af='"+data.color_af+"'><span class='fas fa-trash'></span>&nbsp;Eliminar</button></td>");

            }
        },
    }).fail( function( jqXHR, textStatus, errorThrown ) {
        toastr.warning('Ya existe una color con ese nombre', 'Color no agregado!');
    });
});


// editar
$(document).on('click', '.edit-modal', function() {
    $('#id_edit').val($(this).data('id'));
    $('#color_editar').val($(this).data('color'));
    id = $('#id_edit').val();
    $('#modal-editar-color').modal('show');
});
$('.modal-footer').on('click', '.edit', function() {
    $.ajax({
        type: 'PUT',
        url: 'color/' + id,
        data: {
            '_token': $('input[name=_token]').val(),
            'id_color': $("#id_edit").val(),
            'color_af': $('#color_editar').val(),
        },
        success: function(data) {
            $('.errorColor').addClass('hidden');

            if ((data.errors)) {

                setTimeout(function () {
                    $('#modal-editar-color').modal('show');
                    toastr.error('Llene correctamente los campos!', 'Error', {timeOut: 7000});
                }, 500);
                if (data.errors.nombre_coord) {
                    if($('#color_af').val() ==''){
                        toastr.warning('Debe ingresar el nombre del color');
                    }else{
                        //$('.errorCoordinacion').removeClass('hidden');
                        $('.errorCoordinacion').text(data.errors.nombre_coord);
                        toastr.warning('El color solo puede contener letras', '', {timeOut: 3000});
                    }
                }             
            } else {
                toastr.success('Se ha editado el color!', 'Éxito!', {timeOut: 2000});
                $('.itemColor' + data.id_color).replaceWith("<tr class='itemColor" + data.id_color + "'><td>" + data.color_af+"<td><button class='edit-modal btn btn-info' data-id='"+data.id_color+"' data-color_af='"+data.color_af+"'><span class='fas fa-edit'></span>&nbsp;Editar</button> <button class='delete-modal btn btn-danger' data-id='"+data.id_color+"' data-color_af='"+data.color_af+"'><span class='fas fa-trash'></span>&nbsp;Eliminar</button></td>");
                
            }
        }
    }).fail( function( jqXHR, textStatus, errorThrown ) {
        setTimeout(function () {
            $('#modal-editar-color').modal('show');}, 500);
        toastr.warning('Ya existe un color con ese nombre', 'Color no editado!');
    });
});