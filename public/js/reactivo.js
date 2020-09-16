//Delay table load until everything else is loaded
$(window).load(function(){
    $('#postTable').removeAttr('style');
});

/* Detalle */
$(document).on('click', '.detalle-modal', function() {
    $('#nombre_ver').val($(this).data('nombre'));
    $('#precio_ver').val($(this).data('precio'));
    $('#presentacion_ver').val($(this).data('presentacion'));
    $('#base_ver').val($(this).data('base'));
    $('#medida_ver').val($(this).data('medida'));

    $('#modal-detalle-reactivo').modal('show');
});



/* Eliminar*/
$(document).on('click', '.delete-modal', function() {
    $('#id_delete').val($(this).data('id'));

    $('#modal-eliminar-reactivo').modal("show");
    id = $('#id_delete').val();
});
$('.modal-footer').on('click', '.delete', function() {
    $.ajax({
        type: 'DELETE',
        url: 'reactivo/' + id,
        data: {
            '_token': $('input[name=_token]').val(),
        },
        success: function(data) {
            toastr.success('Se ha eliminado el reactivo', 'Éxito!', {timeOut: 5000});
            $('.itemReactivo' + data['id_reactivo']).remove();
            $('.col1').each(function (index) {
                $(this).html(index+1);
            });
        }


    }).fail( function( jqXHR, textStatus, errorThrown ) {
        toastr.error('No se puede eliminar el reactivo', 'Error!');
    });
});

/* agregar */
$(document).on('click', '.add-modal', function() {
            // Vaciar imputs
            $('#nombre_reactivo').val('');
            $('#precio_reactivo').val('');
            $('#presentacion').val('');
            $('#unidad_base').val('');
            $('#unidad_medida').val('');
            //mostrar modal
            $('#modal-registro-reactivo').modal("show");

        });
/*insertar*/
$('.modal-footer').on('click', '.addReactivo', function() {
    $.ajax({
        type: 'POST',
        url: 'reactivo',
        data: {
            '_token': $('input[name=_token]').val(),
            'nombre_reactivo': $('#nombre_reactivo').val(),
            'precio_reactivo': $('#precio_reactivo').val(),
            'presentacion': $('#presentacion').val(),
            'unidad_base': $('#unidad_base').val(),
            'unidad_medida': $('#unidad_medida').val(),
        },

        success: function(data) {
            //$('.errorCoordinacion').addClass('hidden');
            if (data.errors) {

                setTimeout(function () {
                    $('#modal-registro-reactivo').modal('show');
                    toastr.error('Llene correctamente los campos!', 'Ha ocurrido un error', {timeOut: 7000});
                }, 500);
                if (data.errors.nombre_reactivo) {
                    if($('#nombre_reactivo').val() == ''){
                        toastr.warning('Debe de ingresar el nombre de reactivo');
                    }else{
                    //$('.errorCoordinacion').removeClass('hidden');
                    $('.errorReactivo').text(data.errors.nombre_reactivo);
                    toastr.warning('El reactivo solo puede contener letras');
                }
            }
        } else {
            toastr.success('Se ha agregado el reactivo correctamente!', 'Éxito!', {timeOut: 2300});
            setTimeout(function(){
             window.location.reload(1);
         }, 3200);
            //$('#postTable').append("<tr class='itemReactivo" + data.id_reactivo + "'><td>"+data.nombre_reactivo+"</td><td>"+data.precio_reactivo+"</td><td>"+data.presentacion+"</td><td>"+data.unidad_base+"</td><td>"+data.unidad_medida+"</td><td><button class='edit-modal btn btn-info' data-id='"+data.id_reactivo+"' data-nombre='"+data.nombre_reactivo+"' data-precio='"+data.precio_reactivo+"' data-presentacion='"+data.presentacion+"' data-base='"+data.unidad_base+"' data-medida='"+data.unidad_medida+"'><span class='fas fa-edit'></span>&nbsp;Editar</button> <button class='delete-modal btn btn-danger' data-id='"+data.id_reactivo+"'><span class='fas fa-trash'></span>&nbsp;Eliminar</button></td></tr>");
        } 
    },
}).fail( function( jqXHR, textStatus, errorThrown ) {
    toastr.warning('Ya existe un reactivo con ese nombre', 'Reactivo no agregado!');
});
});


// editar
$(document).on('click', '.edit-modal', function() {
    $('#id_edit').val($(this).data('id'));
    $('#reactivo_editar').val($(this).data('nombre'));
    $('#precio_editar').val($(this).data('precio'));
    $('#presentacion_editar').val($(this).data('presentacion'));
    $('#base_editar').val($(this).data('base'));
    $('#medida_editar').val($(this).data('medida'));

    //asociar el id al modal
    id = $('#id_edit').val();
    $('#modal-editar-reactivo').modal('show');
});
$('.modal-footer').on('click', '.edit', function() {
    //alert(elemento);

    $.ajax({
        type: 'PUT',
        url: 'reactivo/'+id,
        data: {
            '_token': $('input[name=_token]').val(),
            'nombre_reactivo': $('#reactivo_editar').val(),
            'precio_reactivo': $('#precio_editar').val(),
            'presentacion': $('#presentacion_editar').val(),
            'unidad_base': $('#base_editar').val(),
            'unidad_medida': $('#medida_editar').val(),

        },

        success: function(data) {
            if ((data.errors)) {

                setTimeout(function () {
                    $('#modal-editar-reactivo').modal('show');
                    toastr.error('Llene correctamente los campos!', 'Ha ocurrido un error', {timeOut: 7000});
                }, 500);
                if (data.errors.nombre_reactivo) {
                    toastr.warning('El reactivo solo puede contener letras', '', {timeOut: 3000});

                }
            } else {
                toastr.success('Se ha editado el reactivo correctamente!', 'Éxito!', {timeOut: 2300});
                setTimeout(function(){
                 window.location.reload(1);
             }, 3200);
                //$('.itemArea' + data.id_area).replaceWith("<tr class='itemArea" + data.id_area + "'><td>" + data.nombre_area+"</td><td>"+nombre_coordinacion2+"</td><td><button class='edit-modal btn btn-info' data-id='"+data.id_area+"' data-area='"+data.nombre_area+"'data-coordinacion='"+coordinacion+"'><span class='fas fa-edit'></span>&nbsp;Editar</button> <button class='delete-modal btn btn-danger' data-id='"+data.id_area+"'><span class='fas fa-trash'></span>&nbsp;Eliminar</button></td>");

            }
        },
    }).fail( function( jqXHR, textStatus, errorThrown ) {
        toastr.warning('Ya existe un reactivo con ese nombre', 'Reactivo no agregado!');
    });
});