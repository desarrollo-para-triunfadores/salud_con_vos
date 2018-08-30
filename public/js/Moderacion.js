/** Inicio Código de Sidebar */
$("#side-moderar-li").addClass("active");
/** Fin Código de Sidebar */


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
    if (valor) {
        $('#publicado-update-oculto').attr('value', 'true');
    }
    else {
        $('#publicado-update-oculto').attr('value', 'false');
    }
    ;
}

var comentarios = [];
var hilos_foros = [];

function actualizar_array(id, tipo) {
    if (tipo === "comentario") {
        if (comentarios.indexOf(id) >= 0) {
            comentarios.splice(comentarios.indexOf(id), 1);
        } else {
            comentarios.push(id);
        }
    } else {
        if (hilos_foros.indexOf(id) >= 0) { //Si encuentra el id en el array
            hilos_foros.splice(hilos_foros.indexOf(id), 1);
        } else { //Si el id no está en el array
            hilos_foros.push(id);
        }
    }
}

function seteo_global(tipo, accion) {
    if (tipo === 'comentario') {
        comentarios = [];
        if (accion === "checked") {
            $(".checkbox-comentarios").each(function (index) {
                actualizar_array($(this).attr("id_elemento"), "comentario");
            });
            $(".checkbox-comentarios").prop("checked", true);
        } else {
            $(".checkbox-comentarios").prop("checked", false);
        }

    } else {
        hilos_foros = [];
        if (accion === "checked") {
            $(".checkbox-hilos").each(function (index) {
                actualizar_array($(this).attr("id_elemento"), "hilo");
            });
            $(".checkbox-hilos").prop("checked", true);
        } else {
            $(".checkbox-hilos").prop("checked", false);
        }
    }
}

function moderar(tipo) {
    if (tipo === 'hilos' && hilos_foros.length > 0) {
        $.ajax({
            url: '/admin/moderar_masivamente_hilos', //direccion del metodo del controller al que le pedimos los datos (ruta del sistema de ruteo de laravel)
            data: {
                array: hilos_foros
            },
            type: 'GET',
            dataType: 'json',
            success: function (data) { //Succes si va todo bien, failed y si nunca mas te responde, data seria como el request hacia nosotros desde el controller
                location.href = "/admin/indexNuevos";
            }
        });
    } else if (tipo === 'comentarios' && comentarios.length > 0) {
        $.ajax({
            url: '/admin/moderar_masivamente_comentarios', //direccion del metodo del controller al que le pedimos los datos (ruta del sistema de ruteo de laravel)
            data: {
                array: comentarios
            },
            type: 'GET',
            dataType: 'json',
            success: function (data) { //Succes si va todo bien, failed y si nunca mas te responde, data seria como el request hacia nosotros desde el controller
                location.href = "/admin/indexNuevos";
            }
        });
    }
}

function eliminar(tipo) {
    if (tipo === 'hilos' && hilos_foros.length > 0) {
        $.ajax({
            url: '/admin/eliminar_masivamente_hilos',
            data: {
                array: hilos_foros
            },
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                location.href = "/admin/indexNuevos";
            }
        });
    } else if (tipo === 'comentarios' && comentarios.length > 0) {
        $.ajax({
            url: '/admin/eliminar_masivamente_comentarios',
            data: {
                array: comentarios
            },
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                location.href = "/admin/indexNuevos";
            }
        });
    }
}