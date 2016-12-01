

        $("body").on('click', ".btn-danger", funcEliminarFila);
       $("body").on('click', ".btn-default", listarModal);
       $("body").on('click', ".btn-success", recorrer);
       $("body").on('click', ".cursoprog", programas);
      //alert("hola");


      function programas(){
          var c = $("cursoprog").val();
          console.log(c);
      }

      function table(){
         var table = $("#tabla").DataTable();
         return table;
      }

function listarModal(){
    var table = $("#tablaModal").DataTable({
        destroy: true,
        "ajax": {
            method: "POST",
            url: "http://localhost/proyecto_php/Cursos/buscarUsuarios",
        },
        columns: [
            {"data": "idusuarios"},
            {"data": "nombreusuarios"},
            {"data": "apellidosusuarios"},
            {"defaultContent": "<button type='button' class='agregar btn btn-primary'>Agregar</button>"}
        ]
    });

    obtenerData("#tablaModal tbody", table);
}

function obtenerData(tbody, table){
    $(tbody).on("click", "button.agregar", function(){
        var row = table.row($(this).parents("tr")).data();
        //console.log(row);
        var id = row.idusuarios;
        var nombre = row.nombreusuarios;
        var apellido = row.apellidosusuarios;
        //console.log(id,nombre,apellido);
        //alert(id instanceof Array);

        var tabla = $("#tabla").DataTable();
        tabla.row.add(
            [
                id,
                nombre,
                apellido,
                "<button type='button' class='btn btn-danger'>Remover</button>"
            ]
        ).draw();
    });
}

function funcEliminarFila(){
    var tb = table();
    $('#tabla tbody').on( 'click', '.btn-danger', function () {
    tb.row( $(this).parents('tr') ).remove().draw();
} );
}

function recorrer(){
    var data;
    var tb = table();
    var retorno;
    tb.rows().eq(0).each( function ( index ) {
    var row = tb.row( index );
    data = row.data();

    $.ajax ({
        method: "POST",
        url: "http://localhost/proyecto_php/Cursos/asignarApr/"+data[0]+"",
    }).done(function(valida){
        console.log(valida);
        if (valida == 1) {

            retorno = true;
            //console.log(retorno);
        }else {

        }
    });

    });
console.log(retorno);
    /*if (retorno) {
        alert("OK");
    }*/
}
