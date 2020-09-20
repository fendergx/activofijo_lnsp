//Retrasar la carga de la tabla hasta que se cargue todo lo demás
$(window).load(function(){
	$('#postTable').removeAttr('style');
});

//Abrir modals //

/* agregar*/ 
$(document).on('click', '.add-modal', function() {
            // Vaciar imputs
            $('#nombre_cliente').val('');
            //mostrar modal
            $('#modal-registro-cliente').modal("show");
        });

/* editar*/
$(document).on('click', '.edit-modal', function() {
	$('#id_edit').val($(this).data('id'));
	$('#cliente_editar').val($(this).data('cliente'));
	id = $('#id_edit').val();
	$('#modal-editar-cliente').modal('show');
});

/* Eliminar */
$(document).on('click', '.delete-modal', function() {
	$('#id_delete').val($(this).data('id'));

	$('#modal-eliminar-cliente').modal('show');
	id = $('#id_delete').val();
});


// acciones ajax y validaciones con toastr//

/* eliminar */
$('.modal-footer').on('click', '.delete', function() {
    $.ajax({
        type: 'DELETE',
        url: 'cliente/' + id,
        data: {
            '_token': $('input[name=_token]').val(),
        },
        success: function(data) {
            toastr.success('Se ha eliminado el cliente', 'Éxito!', {timeOut: 5000});
            $('.itemCliente' + data['id_cliente']).remove();
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
		url: 'cliente',
		data: {
			'_token': $('input[name=_token]').val()
			,            'nombre_cliente': $('#nombre_cliente').val(),
		},

		success: function(data) {
			if ((data.errors)) {
				setTimeout(function () {
					$('#modal-registro-cliente').modal('show');
					toastr.error('Llene correctamente los campos!', 'Ha ocurrido un error', {timeOut: 7000});
				}, 500);
				if (data.errors.nombre_cliente) {
					if($('#nombre_cliente').val() ==''){
						toastr.warning('Debe ingresar el nombre del cliente');
					}else{
                        toastr.warning('El cliente solo puede contener letras', '', {timeOut: 3000});
                    }
                } //end if data.error
            } else { 
            	//en caso de que se inserte correctamente
            	toastr.success('Se ha agregado el cliente!', 'Éxito!', {timeOut: 2300});
            	$('#postTable').append("<tr class='itemCliente" + data.id_cliente + "'><td>" + data.nombre_cliente+"<td><button class='edit-modal btn btn-info' data-id='"+data.id_cliente+"' data-cliente='"+data.nombre_cliente+"'><span class='fas fa-edit'></span>&nbsp;Editar</button> <button class='delete-modal btn btn-danger' data-id='"+data.id_cliente+"' data-cliente='"+data.nombre_cliente+"'><span class='fas fa-trash'></span>&nbsp;Eliminar</button></td>");

            }
        },
    }).fail( function( jqXHR, textStatus, errorThrown ) {
    	toastr.warning('Ya existe un cliente con ese nombre', 'Cliente no agregado!');
    });
});


/* Editar */
$('.modal-footer').on('click', '.edit', function() {
    $.ajax({
        type: 'PUT',
        url: 'cliente/' + id,
        data: {
            '_token': $('input[name=_token]').val(),
            'id_cliente': $("#id_edit").val(),
            'nombre_cliente': $('#cliente_editar').val(),
        },
        success: function(data) {

            if ((data.errors)) {

                setTimeout(function () {
                    $('#modal-editar-cliente').modal('show');
                    toastr.error('Llene correctamente los campos!', 'Error', {timeOut: 7000});
                }, 500);
                if (data.errors.nombre_cliente) {
                    if($('#cliente_editar').val() ==''){
                        toastr.warning('Debe ingresar el nombre del cliente');
                    }else{
                        toastr.warning('El cliente solo puede contener letras', '', {timeOut: 3000});
                    }
                    
                }
                
            } else {
                toastr.success('Se ha editado el cliente!', 'Éxito!', {timeOut: 2000});
                $('.itemCliente' + data.id_cliente).replaceWith("<tr class='itemCliente" + data.id_cliente + "'><td>" + data.nombre_cliente+"<td><button class='edit-modal btn btn-info' data-id='"+data.id_cliente+"' data-cliente='"+data.nombre_cliente+"'><span class='fas fa-edit'></span>&nbsp;Editar</button> <button class='delete-modal btn btn-danger' data-id='"+data.id_cliente+"' data-cliente='"+data.nombre_cliente+"'><span class='fas fa-trash'></span>&nbsp;Eliminar</button></td>");
                
            }
        }
    }).fail( function( jqXHR, textStatus, errorThrown ) {
        setTimeout(function () {
            $('#modal-editar-cliente').modal('show');}, 500);
        toastr.warning('Ya existe un cliente con ese nombre', 'Cliente no editado!');
    });
});
