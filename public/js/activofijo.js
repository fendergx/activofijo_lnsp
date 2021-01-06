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