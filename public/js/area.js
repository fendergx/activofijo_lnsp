//Delay table load until everything else is loaded
$(window).load(function(){
    $('#postTable').removeAttr('style');
});

function obtener_texto_select() {
    valor = $('select[id="coordinacion"] option:selected').text();
    var cadena2 = valor.slice(0, -27);
    return valor;
};

/* Eliminar*/
$(document).on('click', '.delete-modal', function() {
    $('#id_delete').val($(this).data('id')); 
    $('#modal-eliminar-area').modal("show");
    id = $('#id_delete').val();
});
$('.modal-footer').on('click', '.delete', function() {
    $.ajax({
        type: 'DELETE',
        url: 'area/' + id,
        data: {
            '_token': $('input[name=_token]').val(),
        },
        success: function(data) {
            toastr.success('Se ha eliminado el área', 'Éxito!', {timeOut: 5000});
            $('.itemArea' + data['id_area']).remove();
            $('.col1').each(function (index) {
                $(this).html(index+1);
            });
        }


    }).fail( function( jqXHR, textStatus, errorThrown ) {
        toastr.error('No se puede eliminar el área, ya que tiene\ndependencias', 'Error!');
    });
});

/* agregar */
$(document).on('click', '.add-modal', function() {
            // Vaciar imputs
            $('#nombre_area').val('');
            $('#coordinacion').val('');
            $('.errorArea').addClass('hidden');

            //mostrar modal
            $('#modal-registro-area').modal("show");

        });
/*insertar*/
$('.modal-footer').on('click', '.addArea', function() {
    var nombre_coordinacion = obtener_texto_select();
    //alert(coord);
    $.ajax({
        type: 'POST',
        url: 'area',
        data: {
            '_token': $('input[name=_token]').val(),
            'nombre_area': $('#nombre_area').val(),
            'id_coord': $('#coordinacion').val(),

        },

        success: function(data) {
            //$('.errorCoordinacion').addClass('hidden');

            if ((data.errors)) {

                setTimeout(function () {
                    $('#modal-registro-area').modal('show');
                    toastr.error('Llene correctamente los campos!', 'Ha ocurrido un error', {timeOut: 7000});
                }, 500);
                if (data.errors.nombre_area) {
                    if($('#nombre_area').val() == ''){
                        toastr.warning('Debe de ingresar el nombre de área');
                    }else{


                    //$('.errorCoordinacion').removeClass('hidden');
                    $('.errorArea').text(data.errors.nombre_area);
                    toastr.warning('El área solo puede contener letras');
                }

            }else if (data.errors.id_coord) {
                    //$('.errorCoordinacion').removeClass('hidden');
                    $('.errorArea').text(data.errors.id_coord);
                    toastr.warning('Debe seleccionar una coordinación', '', {timeOut: 3000});

                }
            } else {
                toastr.success('Se ha agregado el área correctamente!', 'Éxito!', {timeOut: 2300});
                $('#postTable').append("<tr class='itemArea" + data.id_area + "'><td>" + data.nombre_area+"</td><td>"+nombre_coordinacion+"</td><td><button class='edit-modal btn btn-info' data-id='"+data.id_area+"' data-area='"+data.nombre_area+"'data-coordinacion='"+coordinacion+"'><span class='fas fa-edit'></span>&nbsp;Editar</button> <button class='delete-modal btn btn-danger' data-id='"+data.id_area+"'><span class='fas fa-trash'></span>&nbsp;Eliminar</button></td>");

            }
        },
    }).fail( function( jqXHR, textStatus, errorThrown ) {
        toastr.warning('Ya existe un area con ese nombre', 'Área no agregada!');
    });
});


// editar
$(document).on('click', '.edit-modal', function() {
    $('#id_edit').val($(this).data('id'));
    $('#editar_area').val($(this).data('area'));
    // parte importante para obtener la coordinación asociada
    $('#id_coordinacion').val($(this).data('coord_id'));
    //asociar el id al modal
    id = $('#id_edit').val();
    $('#modal-editar-area').modal('show');
});
$('.modal-footer').on('click', '.edit', function() {
    var nombre_coordinacion2 = obtener_texto_select();
    var elemento = $('#id_coordinacion').val();

    //alert(elemento);

    $.ajax({
        type: 'PUT',
        url: 'area/'+id,
        data: {
            '_token': $('input[name=_token]').val(),
            'nombre_area': $('#editar_area').val(),
            'id_coord': elemento,

        },

        success: function(data) {
            //$('.errorCoordinacion').addClass('hidden');

            if ((data.errors)) {

                setTimeout(function () {
                    $('#modal-editar-area').modal('show');
                    toastr.error('Llene correctamente los campos!', 'Ha ocurrido un error', {timeOut: 7000});
                }, 500);
                if (data.errors.nombre_area) {
                    //$('.errorCoordinacion').removeClass('hidden');
                    $('.errorArea').text(data.errors.nombre_area);
                    toastr.warning('El área solo puede contener letras', '', {timeOut: 3000});

                }else if (data.errors.id_coord) {
                    //$('.errorCoordinacion').removeClass('hidden');
                    $('.errorArea').text(data.errors.id_coord);
                    toastr.warning('Debe seleccionar una coordinación', '', {timeOut: 3000});

                }
            } else {
                toastr.success('Se ha editado el área correctamente!', 'Éxito!', {timeOut: 2300});
                setTimeout(function(){
                   window.location.reload(1);
               }, 3200);
                //$('.itemArea' + data.id_area).replaceWith("<tr class='itemArea" + data.id_area + "'><td>" + data.nombre_area+"</td><td>"+nombre_coordinacion2+"</td><td><button class='edit-modal btn btn-info' data-id='"+data.id_area+"' data-area='"+data.nombre_area+"'data-coordinacion='"+coordinacion+"'><span class='fas fa-edit'></span>&nbsp;Editar</button> <button class='delete-modal btn btn-danger' data-id='"+data.id_area+"'><span class='fas fa-trash'></span>&nbsp;Eliminar</button></td>");

            }
        },
    }).fail( function( jqXHR, textStatus, errorThrown ) {
        toastr.warning('Ya existe un area con ese nombre', 'Área no agregada!');
    });
});
