//Delay table load until everything else is loaded
$(window).load(function(){
    $('#postTable').removeAttr('style');
});


/* Eliminar*/
$(document).on('click', '.delete-modal', function() {
    $('#id_delete').val($(this).data('id'));

    $('#modal-eliminar-fuente').modal('show');
    id = $('#id_delete').val();
});
$('.modal-footer').on('click', '.delete', function() {
    $.ajax({
        type: 'DELETE',
        url: 'fuente/' + id,
        data: {
            '_token': $('input[name=_token]').val(),
        },
        success: function(data) {
            toastr.success('Se ha eliminado la fuente de activo fijo', 'Éxito!', {timeOut: 5000});
            $('.itemFuente' + data['id_fuente']).remove();
            $('.col1').each(function (index) {
                $(this).html(index+1);
            });
        }
        
        
    }).fail( function( jqXHR, textStatus, errorThrown ) {
        toastr.error('No se puede eliminar la fuente de activo fijo, ya que tiene\nregistros dependientes', 'Error!');
    });
});

/* agregar*/ 
$(document).on('click', '.add-modal', function() {
            // Vaciar imputs
            $('#nombre_fuente').val('');
            $('.errorFuente').addClass('hidden');

            //mostrar modal
            $('#modal-registro-fuente').modal("show");

        });
/*insertar*/
$('.modal-footer').on('click', '.addFuente', function() {
    $.ajax({
        type: 'POST',
        url: 'fuente',
        data: {
            '_token': $('input[name=_token]').val()
            ,            'nombre_fuente': $('#nombre_fuente').val(),
        },

        success: function(data) {
            //$('.errorCoordinacion').addClass('hidden');

            if ((data.errors)) {

                setTimeout(function () {
                    $('#modal-registro-fuente').modal('show');
                    toastr.error('Llene correctamente los campos!', 'Ha ocurrido un error', {timeOut: 7000});
                }, 500);
                if (data.errors.nombre_fuente) {
                    if($('#nombre_fuente').val() ==''){
                        toastr.warning('Debe ingresar el nombre de la fuente de activo fijo');
                    }else{
                        //$('.errorCoordinacion').removeClass('hidden');
                        $('.errorFuente').text(data.errors.nombre_fuente);
                        toastr.warning('La fuente de activo fijo solo puede contener letras', '', {timeOut: 3000});
                    }
                    
                }
            } else {
                toastr.success('Se ha agregado la fuente de activo fijo!', 'Éxito!', {timeOut: 2300});
                $('#postTable').append("<tr class='itemFuente" + data.id_fuente + "'><td>" + data.nombre_fuente+"<td><button class='edit-modal btn btn-info' data-id='"+data.id_fuente+"' data-fuente='"+data.nombre_fuente+"'><span class='fas fa-edit'></span>&nbsp;Editar</button> <button class='delete-modal btn btn-danger' data-id='"+data.id_fuente+"' data-fuente='"+data.nombre_fuente+"'><span class='fas fa-trash'></span>&nbsp;Eliminar</button></td>");

            }
        },
    }).fail( function( jqXHR, textStatus, errorThrown ) {
        toastr.warning('Ya existe una fuente de activo fijo con ese nombre', 'Fuente no agregada!');
    });
});


// editar
$(document).on('click', '.edit-modal', function() {
    $('#id_edit').val($(this).data('id'));
    $('#fuente_editar').val($(this).data('fuente'));
    id = $('#id_edit').val();
    $('#modal-editar-fuente').modal('show');
});
$('.modal-footer').on('click', '.edit', function() {
    $.ajax({
        type: 'PUT',
        url: 'fuente/' + id,
        data: {
            '_token': $('input[name=_token]').val(),
            'id_fuente': $("#id_edit").val(),
            'nombre_fuente': $('#fuente_editar').val(),
        },
        success: function(data) {
            $('.errorFuente').addClass('hidden');

            if ((data.errors)) {

                setTimeout(function () {
                    $('#modal-editar-coordinacion').modal('show');
                    toastr.error('Llene correctamente los campos!', 'Error', {timeOut: 7000});
                }, 500);
                if (data.errors.nombre_fuente) {
                    if($('#nombre_coord').val() ==''){
                        toastr.warning('Debe ingresar el nombre de la fuente de activo fijo');
                    }else{
                        //$('.errorCoordinacion').removeClass('hidden');
                        $('.errorFuente').text(data.errors.nombre_fuente);
                        toastr.warning('La fuente de activo fijo solo puede contener letras', '', {timeOut: 3000});
                    }
                    
                }
                
            } else {
                toastr.success('Se ha editado la fuente de activo fijo!', 'Éxito!', {timeOut: 2000});
                $('.itemFuente' + data.id_fuente).replaceWith("<tr class='itemFuente" + data.id_fuente + "'><td>" + data.nombre_fuente+"<td><button class='edit-modal btn btn-info' data-id='"+data.id_fuente+"' data-fuente='"+data.nombre_fuente+"'><span class='fas fa-edit'></span>&nbsp;Editar</button> <button class='delete-modal btn btn-danger' data-id='"+data.id_fuente+"' data-fuente='"+data.nombre_fuente+"'><span class='fas fa-trash'></span>&nbsp;Eliminar</button></td>");
                
            }
        }
    }).fail( function( jqXHR, textStatus, errorThrown ) {
        setTimeout(function () {
            $('#modal-editar-fuente').modal('show');}, 500);
        toastr.warning('Ya existe una fuente de activo fijo con ese nombre', 'Fuente de AF no editada!');
    });
});
