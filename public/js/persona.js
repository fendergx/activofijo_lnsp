$(window).load(function(){
    $('#postTable').removeAttr('style');
});

function obtener_texto_select() {
    valor = $('select[id="cliente"] option:selected').text();
    var cadena2 = valor.slice(0, -27);
    return valor;
};


$(document).ready(Principal);
function Principal(){
  $(document).on('keyup','[id=dui]',function(e){
    if($(this).val().length == 8) {
      $(this).val($(this).val()+"-");
  }
})

  $(document).on('keyup','[id=editar_dui]',function(e){
    if($(this).val().length == 8) {
      $(this).val($(this).val()+"-");
  }
})

}


/* Eliminar*/
$(document).on('click', '.delete-modal', function() {
    $('#id_delete').val($(this).data('id')); 
    
    $('#modal-eliminar-persona').modal("show");
    id = $('#id_delete').val();
});
$('.modal-footer').on('click', '.delete', function() {
    $.ajax({
        type: 'DELETE',
        url: 'persona/' + id,
        data: {
            '_token': $('input[name=_token]').val(),
        },
        success: function(data) {
            toastr.success('Se ha eliminado el registro', 'Éxito!', {timeOut: 5000});
            $('.itemPersona' + data['id_persona']).remove();
            $('.col1').each(function (index) {
                $(this).html(index+1);
            });
        }


    }).fail( function( jqXHR, textStatus, errorThrown ) {
        toastr.error('No se puede eliminar el registro de la persona, ya que tiene\ndependencias', 'Error!');
    });
});

/* agregar */
$(document).on('click', '.add-modal', function() {
            // Vaciar imputs
            $('#nombre_persona').val('');
            $('#apellido_persona').val('');
            $('#dui').val('');
            $('#cliente').val('');

            //mostrar modal
            $('#modal-registro-persona').modal("show");

        });

/*insertar*/
$('.modal-footer').on('click', '.addPersona', function() {
    var nombre_cliente = obtener_texto_select();

    if(nombre_persona.value==='' || apellido_persona.value==='' || cliente.value==='' ||dui.value===''){
        setTimeout(function () {
            $('#modal-registro-persona').modal('show');
            toastr.error('Llene los campos!', 'Error', {timeOut: 7000});
        }, 500);

    }else if(dui.value===''){
        setTimeout(function () {
            $('#modal-registro-persona').modal("show");
            toastr.warning('le faltó escribir el DUI', {timeOut: 4000});
        }, 500);
    }else if (!dui.checkValidity()) {
        setTimeout(function () {
            $('#modal-registro-persona').modal("show");
            toastr.warning('Escriba el DUI correctamente', {timeOut: 4000});
        }, 500);
    }else{
    //alert(coord);
    $.ajax({
        type: 'POST',
        url: 'persona',
        data: {
            '_token': $('input[name=_token]').val(),
            'nombre_persona': $('#nombre_persona').val(),
            'apellido_persona': $('#apellido_persona').val(),
            'dui': $('#dui').val(),
            'id_cliente': $('#cliente').val(),

        },
        success: function(data) {


            if ((data.errors)) {
                setTimeout(function () {
                    $('#modal-registro-persona').modal('show');
                    toastr.error('Llene correctamente los campos!', 'Ha ocurrido un error', {timeOut: 7000});
                }, 500);
                if (data.errors.nombre_persona) {
                    if($('#nombre_persona').val() == ''){
                        toastr.warning('Debe de ingresar el nombre de persona');
                    }else{

                        $('.errorPersona').text(data.errors.nombre_persona);
                        toastr.warning('Los nombres solo puede contener letras');

                    }

                }else if (data.errors.id_cliente) {

                    $('.errorPersona').text(data.errors.id_cliente);
                    toastr.warning('Debe seleccionar un cliente', '', {timeOut: 3000});

                }
            } else {
                toastr.success('Se ha agregado la persona correctamente!', 'Éxito!', {timeOut: 2300});
                setTimeout(function(){
                   window.location.reload(1);
               }, 3200);
                //$('#postTable').append("<tr class='itemPersona" + data.id_persona + "'><td>" + data.nombre_persona+ " " + data.apellido_persona + "</td><td>" + data.dui+"</td><td>"+nombre_cliente+"</td><td><button class='edit-modal btn btn-info' data-id='"+data.id_persona+"' data-persona='"+data.nombre_persona+"' data-persona='"+data.apellido_persona+"' data-persona='"+data.dui+"'data-cliente='"+cliente+"'><span class='fas fa-edit'></span>&nbsp;Editar</button> <button class='delete-modal btn btn-danger' data-id='"+data.id_persona+"'><span class='fas fa-trash'></span>&nbsp;Eliminar</button></td>");

            }
        },
    }).fail( function( jqXHR, textStatus, errorThrown ) {
        toastr.warning('Ya existe una persona con ese nombre', 'Persona no agregada!');
    });
} //fin if --secuenciales
});



// editar
$(document).on('click', '.edit-modal', function() {
    $('#id_edit').val($(this).data('id'));
    $('#editar_nombre').val($(this).data('nombre'));
    $('#editar_apellido').val($(this).data('apellido'));
    $('#editar_dui').val($(this).data('dui'));
    // parte importante para obtener el cliente asociado
    $('#id_cliente').val($(this).data('clienteid'));
    //asociar el id al modal
    id = $('#id_edit').val();
    $('#modal-editar-persona').modal('show');
});
$('.modal-footer').on('click', '.edit', function() {
    var nombre_cliente2 = obtener_texto_select();
    var elemento = $('#id_cliente').val();

    if(editar_nombre.value==='' || editar_apellido.value==='' || id_cliente.value==='' ||editar_dui.value===''){
        setTimeout(function () {
            $('#modal-editar-persona').modal('show');
            toastr.error('Llene los campos!', 'Error', {timeOut: 7000});
        }, 500);

    }else if(editar_dui.value===''){
        setTimeout(function () {
            $('#modal-editar-persona').modal("show");
            toastr.warning('le faltó escribir el DUI', {timeOut: 4000});
        }, 500);
    }else if (!editar_dui.checkValidity()) {
        setTimeout(function () {
            $('#modal-editar-persona').modal("show");
            toastr.warning('Escriba el DUI correctamente', {timeOut: 4000});
        }, 500);
    }else{

    //alert(elemento);

    $.ajax({
        type: 'PUT',
        url: 'persona/'+id,
        data: {
            '_token': $('input[name=_token]').val(),
            'nombre_persona': $('#editar_nombre').val(),
            'apellido_persona': $('#editar_apellido').val(),
            'dui': $('#editar_dui').val(),
            'id_cliente': elemento,

        },

        success: function(data) {

            if ((data.errors)) {

                setTimeout(function () {
                    $('#modal-editar-persona').modal('show');
                    toastr.error('Llene correctamente los campos!', 'Ha ocurrido un error', {timeOut: 7000});
                }, 500);
                if (data.errors.nombre_persona) {
                    $('.errorPersona').text(data.errors.nombre_persona);
                    toastr.warning('El nombre solo puede contener letras', '', {timeOut: 3000});

                }else if (data.errors.id_cliente) {
                    $('.errorPersona').text(data.errors.id_cliente);
                    toastr.warning('Debe seleccionar un cliente', '', {timeOut: 3000});

                }
            } else {
                toastr.success('Se ha editado la persona correctamente!', 'Éxito!', {timeOut: 2300});
                setTimeout(function(){
                   window.location.reload(1);
               }, 3200);

            }
        },
    }).fail( function( jqXHR, textStatus, errorThrown ) {
        toastr.warning('Ya existe una persona con ese nombre', 'Persona no agregada!');
    });
}
});