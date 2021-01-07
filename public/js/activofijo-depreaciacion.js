//Delay table load until everything else is loaded
$(window).load(function(){
	$('#postTable').removeAttr('style');
});

/* Modal depreciar*/
$(document).on('click', '.depreciar-modal', function() {

	id = $('#id_delete').val($(this).data('id'));
	$('#modal-depreciar-activo-fijo').modal({backdrop: 'static', keyboard: false},"show");
});

/* Acción de depreciar mediante ajax */
$('.modal-footer').on('click', '.edit', function() {
	$.ajax({
		type: 'PUT',
		url: 'area/'+id,
		data: {
			'_token': $('input[name=_token]').val(),
			'nombre_area': $('#editar_area').val(),
			'id_coord': elemento,

		},

		success: function(data) {
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