//función js para capturar las áreas de una coordinación
//para el formulario A 
$(document).ready(function() {
    $('.dynamic1').change(function(){  
        if($(this).val()!= ''){
            var select = 'id_coord';
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
        }
    });


    $('.dynamic2').change(function(){  
        if($(this).val()!= ''){
            var select = 'id_coord';
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
        }
    });

    $('.dynamic-area').change(function(){  
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

//para prevención de escoger la misma coordinacion
$(function(){
    $('.submit').on('submit', function(event){
        if(id_coord_1.value === id_coord_2.value){
            toastr.warning("No debe seleccionar la misma coordinación","Error")
            event.preventDefault();
        }
    });
});