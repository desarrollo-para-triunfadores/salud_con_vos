/** Inicio Código de Sidebar */
$("#side-foros-li").addClass("active");
$("#side-foros-ul").addClass("menu-open");
$("#side-ele-foros").addClass("active");
/** Fin Código de Sidebar */

/** Modal de update y de delete */
function completar_campos(hilo_foro) {
    $('#update-titulo').val(hilo_foro.titulo); //Numeral es para identificar el id. Para clases se usa punto en vez de numeral.
    $('#form-update').attr('action', '/admin/foros/' + hilo_foro.id); //Modifica atributos "attr"

    //Con esa cosa seteamos el valor del select
    $('#categoria_id').val(hilo_foro.categoria_id).trigger("change");

    //Seteo el valor del boton deslizante segun el estado de publicacion, 
    //en este caso el atributo del foro es Si o No
    if (hilo_foro.publicado === 'true') {
        $('#publicado-update').bootstrapToggle('on');
    }
    else {
        $('#publicado-update').bootstrapToggle('off');
    };
    
    $('#modal-update').modal('show');
}



function abrir_modal_borrar(id) {
    $('#form-delete').attr('action', '/admin/foros/' + id);
    $('#modal-delete').modal('show');
}
 //El numeral es para el id y el punto para la clase.


//Datatable
var table = $('.example').DataTable({
    language: tabla_traducida
});

$('a.toggle-vis').on('click', function (e) {
    e.preventDefault();
    // Get the column API object
    var column = table.column($(this).attr('data-column'));
    // Toggle the visibility
    column.visible(!column.visible());
});

$('.example tbody').on('mouseenter', 'td', function () {
    var colIdx = table.cell(this).index().column;

    $(table.cells().nodes()).removeClass('highlight');
    $(table.column(colIdx).nodes()).addClass('highlight');
});

$("#mensaje").wysihtml5();

//Codigo switch
$('#toggle-one').bootstrapToggle();


function actualizar_estado(valor, comentario_id) {
    $.ajax({
        url: '/admin/comentarios/' + comentario_id, //direccion del metodo del controller al que le pedimos los datos (ruta del sistema de ruteo de laravel)
        data: {
            publicado: valor, //estructura JSON
            _token: token
        },
        type: 'PUT',
        dataType: 'json',
        success: function (data) { //Succes si va todo bien, failed y si nunca mas te responde, data seria como el request hacia nosotros desde el controller
        }
    });

}
function actualizar_input_publicado(valor) {
    console.log(valor);
   if (valor) {
        $('#publicado-update-oculto').attr('value', 'true');
    }
    else {
        $('#publicado-update-oculto').attr('value', 'false');
    };
    console.log($('#publicado-update-oculto').attr('value'));
    
    
    
    
}