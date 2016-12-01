

$(document).ready(function(){
    $('#programas').change(function(){
      $('#cursos').removeAttr('disabled');
    });

    $('#cursos').change(function(){
      $('#identificacion').removeAttr('disabled');
     // $('#nombre').removeAttr('disabled');
    });
alert('hola');

        $("#nuevo").click(function(){
            //newRow();
            funcNuevoAlineamiento();
        });

        $("#remover").click(function(){
	           $(this).parent().parent().fadeOut( "slow", function() { $(this).remove(); } );
            //removeRow('fila');
        });

        var cont=0;

        function selected(id_fila){
            if ($('#'+id_fila).hasClass('seleccionada')) {
                $('#'+id_fila).removeClass('seleccionada');
            }else{
                $('#'+id_fila).addClass('seleccionada');
            }

        }

        function funcNuevoAlineamiento()
{
	$("#tabla")
	.append
	(
		$('<tr>')
        .append
        (
        	$('<td>')
            .append
            (
            	$('<input>').attr('type', 'text').addClass('form-control').attr('name', 'estrategias[]')
            )
        )
        .append
        (
        	$('<td>')
            .append
            (
            	$('<input>').attr('type', 'text').addClass('form-control').attr('name', 'alineamientos[]')
            )
        )
        .append
        (
        	$('<td>').addClass('text-center')
            .append
            (
            	$('<div>').addClass('btn btn-primary').text('Guardar')
            )
            .append
            (
            	$('<div>').addClass('btn btn-danger').text('Eliminar')
            )
        )
    );
	//.append("<tr><td>123</td><td>456</td></tr>");
}

    /*function newRow(){
        cont++;
        var fila = '<tr id="fila+'+cont+'" onclick="selected(fila'+cont+');"><td>1</td><td>Gerlis</td><td>Alvarez</td><td><a href="#" class="btn btn-danger" id="remover">Remover</a></td></tr>'
        $("#tabla").append(fila);
    }*/


});
