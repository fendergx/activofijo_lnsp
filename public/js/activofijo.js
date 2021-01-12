//Delay table load until everything else is loaded
$(window).load(function(){
	$('#postTable').removeAttr('style');
});

/* Eliminar*/
$(document).on('click', '.delete-modal', function() {
	$('#id_delete').val($(this).data('id')); 
	$('#modal-eliminar-activo-fijo').modal("show");
	id = $('#id_delete').val();
});
$('.modal-footer').on('click', '.delete', function() {
	$.ajax({
		type: 'DELETE',
		url: 'af/' + id,
		data: {
			'_token': $('input[name=_token]').val(),
		},
		success: function(data) {
			toastr.success('Se ha eliminado el activo fijo', 'Éxito!', {timeOut: 5000});
			$('.item' + id).remove();
			$('.col1').each(function (index) {
				$(this).html(index+1);
			});
		}
	}).fail( function( jqXHR, textStatus, errorThrown ) {
		toastr.error('No se puede eliminar el activo fijo, ya que tiene\ndependencias', 'Error!');
	});
});

/* Exportar a Excel*/
$(document).on('click', '.excel', function() {
	$('#modal-exportar-excel').modal("show");
});

$('.modal-footer').on('click', '.exportar', function() {
	setTimeout(function(){ $('#modal-exportar-excel').modal('hide'); }, 750);
});

/* Editar */

//$('.update-activo').on('click', '.edit-activo', function() {
$(document).on('click', '.edit-activo', function() {
	id = $("#id_af").val()

    toastr.warning('El sistema esta procesando', 'Espere...', {timeOut: 4000});
    $.ajax({
        type: 'PUT',
        url: '../af/' + id,
        data: {
			'_token': $('input[name=_token]').val(),
			'id_af': $("#id_af").val(),
			'codigo_af': $('#codigoAF').val(),
			'nombre_af': $('#nombreAF').val(),
			'marca_af': $('#marcaAF').val(),
            'modelo_af': $('#modeloAF').val(),
            'serie_af': $('#serieAF').val(),
            'fecha_adq_af': $('#fechaAdqAF').val(),
			'valor_adq_af': $('#valorAdqAF').val(),
			'valor_actual_af': $('#valorActAF').val(),
            'descripcion_af': $('#descripcionAF').val(),
            'id_coord': $('#coordinacionAF').val(),
            'id_area': $('#areaAF').val(),
			'id_ubicacion': $('#ubicacionAF').val(),
			'id_color': $('#colorAF').val(),
			'id_fuente': $('#fuenteAF').val(),
			'persona_encargada': $('#encargadoAF').val()
        },
        success: function(data) { 

            if ((data.errors)) {
                setTimeout(function () {
                    toastr.error('Llene correctamente los campos!', 'Error', {timeOut: 7000});
                }, 500);
                
            } else {
                toastr.clear();
                toastr.success('el acrivo fue editado correctamente', 'Éxito!');
                setTimeout(function(){
                    window.location.replace("../af");
                }, 5000);
            }
        }
    }).fail( function( jqXHR, textStatus, errorThrown ) {
        toastr.warning('Ha ocurrido un error interno del sistema', 'Activo no editado!');
    });
});