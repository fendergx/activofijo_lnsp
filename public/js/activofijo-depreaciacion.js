//Delay table load until everything else is loaded
$(window).load(function(){
	$('#postTable').removeAttr('style');
});

/* Modal depreciar*/
$(document).on('click', '.modal-depreciacion', function() {
    id = $(this).data('id');
    actual = parseFloat($(this).data('actual'));
    document.getElementById('label_af').innerHTML=$(this).data('nombre');
    document.getElementById('valor_actual_af').innerHTML='$ '+$(this).data('actual');
    $('#modal-depreciar-activo-fijo').modal({backdrop: 'static', keyboard: false},"show");
});

/* Acción de depreciar mediante ajax */
$('.modal-footer').on('click', '.depreciar', function() {
    valor = $('#nuevo').val();
    if(valor<=0){
        setTimeout(function () {
            $('#modal-depreciar-activo-fijo').modal('show');
            toastr.warning('Debe colocar un valor positivo', 'Atención!', {timeOut: 7000});
        }, 500);
    }else if(valor>=actual){
        setTimeout(function () {
            $('#modal-depreciar-activo-fijo').modal('show');
            toastr.warning('No debe colocar el mismo valor o mayor que el actual', 'Atención!', {timeOut: 7000});
        }, 500);
    }else{
     $.ajax({
      type: 'PUT',
      url: 'depreciar/'+id,
      data: {
       '_token': $('input[name=_token]').val(),
       'valor': valor,
   },

   success: function(data) {
       toastr.success('Se ha depreciado correctamente!', 'Éxito!', {timeOut: 2300});
       setTimeout(function(){
          window.location.reload(1);
      }, 3200);      
   },
}).fail( function( jqXHR, textStatus, errorThrown ) {
   toastr.error('El sistema no procesó su solicitud', 'Error!');
});
 }//fin else
});