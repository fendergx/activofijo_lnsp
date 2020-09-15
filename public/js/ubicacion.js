//Retrasar la carga de la tabla hasta que se cargue todo lo demás
$(window).load(function(){
	$('#postTable').removeAttr('style');
});

//Abrir modals //

/* agregar*/ 
$(document).on('click', '.add-modal', function() {
            // Vaciar imputs
            $('#ubicacion_af').val('');
            //mostrar modal
            $('#modal-registro-ubicacion').modal("show");
        });

/* editar*/
$(document).on('click', '.edit-modal', function() {
	$('#id_edit').val($(this).data('id'));
	$('#ubicacion_editar').val($(this).data('ubicacion'));
	id = $('#id_edit').val();
	$('#modal-editar-ubicacion').modal('show');
});

/* Eliminar */
$(document).on('click', '.delete-modal', function() {
	$('#id_delete').val($(this).data('id'));

	$('#modal-eliminar-ubicacion').modal('show');
	id = $('#id_delete').val();
});


// acciones ajax y validaciones con toastr//

/* eliminar */
$('.modal-footer').on('click', '.delete', function() {
    $.ajax({
        type: 'DELETE',
        url: 'ubicacion/' + id,
        data: {
            '_token': $('input[name=_token]').val(),
        },
        success: function(data) {
            toastr.success('Se ha eliminado la ubicación', 'Éxito!', {timeOut: 5000});
            $('.itemUbicacion' + data['id_ubicacion']).remove();
            $('.col1').each(function (index) {
                $(this).html(index+1);
            });
        }
        
        
    }).fail( function( jqXHR, textStatus, errorThrown ) {
        toastr.error('No se puede eliminar ya que tiene dependencias', 'Error!');
    });
});


/* insertar */
$('.modal-footer').on('click', '.add', function() {
	$.ajax({
		type: 'POST',
		url: 'ubicacion',
		data: {
			'_token': $('input[name=_token]').val()
			,            'ubicacion_af': $('#ubicacion_af').val(),
		},

		success: function(data) {
			if ((data.errors)) {
				setTimeout(function () {
					$('#modal-registro-ubicacion').modal('show');
					toastr.error('Llene correctamente los campos!', 'Ha ocurrido un error', {timeOut: 7000});
				}, 500);
				if (data.errors.ubicacion_af) {
					if($('#ubicacion_af').val() ==''){
						toastr.warning('Debe ingresar el nombre de la ubicación');
					}else{
                        toastr.warning('La ubicación solo puede contener letras', '', {timeOut: 3000});
                    }
                } //end if data.error
            } else { 
            	//en caso de que se inserte correctamente
            	toastr.success('Se ha agregado la ubicación!', 'Éxito!', {timeOut: 2300});
            	$('#postTable').append("<tr class='itemUbicacion" + data.id_ubicacion + "'><td>" + data.ubicacion_af+"<td><button class='edit-modal btn btn-info' data-id='"+data.id_ubicacion+"' data-ubicacion='"+data.ubicacion_af+"'><span class='fas fa-edit'></span>&nbsp;Editar</button> <button class='delete-modal btn btn-danger' data-id='"+data.id_ubicacion+"' data-ubicacion='"+data.ubicacion_af+"'><span class='fas fa-trash'></span>&nbsp;Eliminar</button></td>");

            }
        },
    }).fail( function( jqXHR, textStatus, errorThrown ) {
    	toastr.warning('Ya existe una ubicación con ese nombre', 'Ubicación no agregada!');
    });
});


/* Editar */
$('.modal-footer').on('click', '.edit', function() {
    $.ajax({
        type: 'PUT',
        url: 'ubicacion/' + id,
        data: {
            '_token': $('input[name=_token]').val(),
            'id_ubicacion': $("#id_edit").val(),
            'ubicacion_af': $('#ubicacion_editar').val(),
        },
        success: function(data) {

            if ((data.errors)) {

                setTimeout(function () {
                    $('#modal-editar-ubicacion').modal('show');
                    toastr.error('Llene correctamente los campos!', 'Error', {timeOut: 7000});
                }, 500);
                if (data.errors.ubicacion_af) {
                    if($('#ubicacion_af').val() ==''){
                        toastr.warning('Debe ingresar el nombre de la ubicación');
                    }else{
                        toastr.warning('La ubicación solo puede contener letras', '', {timeOut: 3000});
                    }
                    
                }
                
            } else {
                toastr.success('Se ha editado la ubicación!', 'Éxito!', {timeOut: 2000});
                $('.itemUbicacion' + data.id_ubicacion).replaceWith("<tr class='itemUbicacion" + data.id_ubicacion + "'><td>" + data.ubicacion_af+"<td><button class='edit-modal btn btn-info' data-id='"+data.id_ubicacion+"' data-ubicacion='"+data.ubicacion_af+"'><span class='fas fa-edit'></span>&nbsp;Editar</button> <button class='delete-modal btn btn-danger' data-id='"+data.id_ubicacion+"' data-ubicacion='"+data.ubicacion_af+"'><span class='fas fa-trash'></span>&nbsp;Eliminar</button></td>");
                
            }
        }
    }).fail( function( jqXHR, textStatus, errorThrown ) {
        setTimeout(function () {
            $('#modal-editar-ubicacion').modal('show');}, 500);
        toastr.warning('Ya existe una ubicación con ese nombre', 'Ubicación no editada!');
    });
});
