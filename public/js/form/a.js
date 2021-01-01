//función js para capturar las áreas de una coordinación
//para el formulario A 
$(document).ready(function() {
    $('.dynamic').change(function(){  
        if($(this).val()!= ''){
            var select = $(this).attr('id');
            var value = $(this).val();
            var dependent = $(this).data('dependent');
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: "../getareas/fetch",
                method:"POST",
                data:{select:select, value:value, _token:_token, dependent:dependent},
                success:function(result){
                    $('#'+dependent).html(result);
                }
            })

            var select2 = select;
            var value2 = value;
            var dependent2 = 'nombre_area_2';
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: "../getareas/fetch",
                method:"POST",
                data:{select:select2, value:value2, _token:_token, dependent:dependent2},
                success:function(result){
                    $('#'+dependent2).html(result);
                }
            })
        }
    });
});

//para traer los activos de un area
$(document).ready(function() {
    $('.dynamic2').change(function(){  
        if($(this).val()!= ''){
            var value = $(this).val();
            var dependent = $(this).data('dependent');
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: "../activofijo/fetch",
                method:"POST",
                data:{value:value, _token:_token},
                success:function(result){
                    $('#'+dependent).html(result);
                }
            })
        }
    });
});


//para mostrar u ocultar detalles de traslado
$(document).ready(function() {
    $('#id_clase').change(function(){  
        if($(this).val()!= ''){
            if($(this).val()== '3'){
                $("#form-especificar").show(400);
                $('#especificar').attr('required', 'required');
            }else{
                $("#form-especificar").hide(400);
                $('#especificar').removeAttr('required');
            }
        }
    });
});