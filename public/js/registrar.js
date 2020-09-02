//función js para capturar las áreas de una coordinación
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
        }
    });

});

//cambiar las casillas dependiendo del rol seleccionado
document.getElementById('id_rol').addEventListener('change', function() {
    if(this.value == '1'){
        hideCo();hideA();
    }else if(this.value == '2'){
        hideCo();hideA();
    }else if(this.value == '3'){
        hideCo();hideA();
    }else if(this.value == '4'){
        showCo();hideA();
    }else if(this.value == '5'){
        showCo();showA();
    }else if(this.value == '6'){
        showCo();showA();
    }
  //console.log('Salu2 xD, opcion seleccionada: ', this.value);
  console.log('hola uwu\nBienvenido a inspeccionar!')
});

//ocultar atributos al cargar registrar
//window.onload=setTimeout(hide(),10);

function showCo(){
    $("#div_coord").show(500);
    $('#id_coord').attr('required', 'required');
}
function hideCo(){
    $("#div_coord").hide(500);
    $('#id_coord').removeAttr('required');
}

function showA(){
    $("#div_area").show(500);
    $('#nombre_area').attr('required', 'required');
    
}
function hideA(){
    $("#div_area").hide(500);
    $('#nombre_area').removeAttr('required');
}