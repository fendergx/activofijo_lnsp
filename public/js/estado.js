//Retrasar la carga de la tabla hasta que se cargue todo lo demás
$(window).load(function(){
	$('#postTable').removeAttr('style');
});

//Abrir modals //

/* agregar*/ 
$(document).on('click', '.add-modal', function() {
            // Vaciar imputs
            $('#estado_af').val('');
            //mostrar modal
            $('#modal-registro-estado').modal("show");
        });

/* editar*/
$(document).on('click', '.edit-modal', function() {
	$('#id_edit').val($(this).data('id'));
	$('#estado_editar').val($(this).data('estado'));
	id = $('#id_edit').val();
	$('#modal-editar-estado').modal('show');
});

/* Eliminar */
$(document).on('click', '.delete-modal', function() {
	$('#id_delete').val($(this).data('id'));

	$('#modal-eliminar-estado').modal('show');
	id = $('#id_delete').val();
});


// acciones ajax y validaciones con toastr//

/* eliminar */
$('.modal-footer').on('click', '.delete', function() {
    $.ajax({
        type: 'DELETE',
        url: 'estado/' + id,
        data: {
            '_token': $('input[name=_token]').val(),
        },
        success: function(data) {
            toastr.success('Se ha eliminado el estado', 'Éxito!', {timeOut: 5000});
            $('.itemEstado' + data['id_estado']).remove();
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
		url: 'estado',
		data: {
			'_token': $('input[name=_token]').val()
			,            'estado_af': $('#estado_af').val(),
		},

		success: function(data) {
			if ((data.errors)) {
				setTimeout(function () {
					$('#modal-registro-estado').modal('show');
					toastr.error('Llene correctamente los campos!', 'Ha ocurrido un error', {timeOut: 7000});
				}, 500);
				if (data.errors.estado_af) {
					if($('#estado_af').val() ==''){
						toastr.warning('Debe ingresar el nombre del estado');
					}else{
                        toastr.warning('El estado solo puede contener letras', '', {timeOut: 3000});
                    }
                } //end if data.error
            } else { 
            	//en caso de que se inserte correctamente
            	toastr.success('Se ha agregado el estado!', 'Éxito!', {timeOut: 2300});
            	$('#postTable').append("<tr class='itemEstado" + data.id_estado + "'><td>" + data.estado_af+"<td><button class='edit-modal btn btn-info' data-id='"+data.id_estado+"' data-estado='"+data.estado_af+"'><span class='fas fa-edit'></span>&nbsp;Editar</button> <button class='delete-modal btn btn-danger' data-id='"+data.id_estado+"' data-estado='"+data.estado_af+"'><span class='fas fa-trash'></span>&nbsp;Eliminar</button></td>");

            }
        },
    }).fail( function( jqXHR, textStatus, errorThrown ) {
    	toastr.warning('Ya existe un estado con ese nombre', 'Estado no agregada!');
    });
});


/* Editar */
$('.modal-footer').on('click', '.edit', function() {
    $.ajax({
        type: 'PUT',
        url: 'estado/' + id,
        data: {
            '_token': $('input[name=_token]').val(),
            'id_estado': $("#id_edit").val(),
            'estado_af': $('#estado_editar').val(),
        },
        success: function(data) {

            if ((data.errors)) {

                setTimeout(function () {
                    $('#modal-editar-estado').modal('show');
                    toastr.error('Llene correctamente los campos!', 'Error', {timeOut: 7000});
                }, 500);
                if (data.errors.estado_af) {
                    if($('#estado_af').val() ==''){
                        toastr.warning('Debe ingresar el nombre del estado');
                    }else{
                        toastr.warning('El estado solo puede contener letras', '', {timeOut: 3000});
                    }
                    
                }
                
            } else {
                toastr.success('Se ha editado el estado!', 'Éxito!', {timeOut: 2000});
                $('.itemEstado' + data.id_estado).replaceWith("<tr class='itemEstado" + data.id_estado + "'><td>" + data.estado_af+"<td><button class='edit-modal btn btn-info' data-id='"+data.id_estado+"' data-estado='"+data.estado_af+"'><span class='fas fa-edit'></span>&nbsp;Editar</button> <button class='delete-modal btn btn-danger' data-id='"+data.id_estado+"' data-estado='"+data.estado_af+"'><span class='fas fa-trash'></span>&nbsp;Eliminar</button></td>");
                
            }
        }
    }).fail( function( jqXHR, textStatus, errorThrown ) {
        setTimeout(function () {
            $('#modal-editar-estado').modal('show');}, 500);
        toastr.warning('Ya existe un estado con ese nombre', 'Estado no editado!');
    });
});
