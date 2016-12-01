$(document).ready(function(){

    //alert('hola soy cursos');
    var cont = 0;


    $("body").on('click', ".btn-danger", funcEliminarFila);
    $("body").on('click', ".btn-primary", funcAgregarAprendiz);

    function funcEliminarFila(){
        $(this).parent().parent().fadeOut( "slow", function() { $(this).remove(); } );
    }

    function funcAgregarAprendiz() {
        $("#tabla")
        .append
        (
        $('<tr>')
        .append
        (
            $('<td>')
            .append
            (
                '<?php echo row["nombreusuarios"]; ?>'
            )
        )
        .append
        (
            $('<td>')
            .append
            (
                'td 2'
            )
        )
        .append
        (
            $('<td>')
            .append
            (
                'td 3'
            )
        )
        .append
        (
            $('<td>')
            .append
            (
                $('<div id="agregar">').addClass('btn btn-danger').text('Eliminar')
            )
        )
        );
    }



});