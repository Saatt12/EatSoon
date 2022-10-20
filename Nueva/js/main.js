$(busca_datos());
function saludo(){
    alert ("hola eatSoon");
}
function busca_datos(consulta){
    $.ajax({
        url: 'Nueva carpeta\buscar.php',
        type: 'POST',
        dataType: 'html',
        data: {consulta:consulta},
    })
    .done(function(respuesta){
        $("#datos").html(respuesta);
    })
    .fail(function(){
        console.log("error");
    })
}

$(document).on('keyup','#buscador',function(){
    var valor = $(this).val();
    if(valor!=""){
        busca_datos(valor);
    }else{
        busca_datos();
    }
});