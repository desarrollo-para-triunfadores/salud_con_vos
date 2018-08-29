
/** Modal de update y de delete */
function completar_campos(hilo_foro) {
    $('#update-titulo').val(hilo_foro.titulo); //Numeral es para identificar el id. Para clases se usa punto en vez de numeral.
    $('#update-contenido').val(hilo_foro.contenido);
    $('#form-update').attr('action', '/admin/foros/' + hilo_foro.id); //Modifica atributos "attr"

    //Con esa cosa seteamos el valor del select
    $('#categoria_id').val(hilo_foro.categoria_id).trigger("change");

    //Seteo el valor del boton deslizante segun el estado de publicacion, 
    //en este caso el atributo del foro es Si o No
    if (hilo_foro.publicado === 'Publicado') {
        $('#publicado-update').bootstrapToggle('on');
    }
    else {
        $('#publicado-update').bootstrapToggle('off');
    }
    ;

//attr sirve para setear y obtener un valor de un atributo.
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

//Instanciación de barra de herramientas de edición de texto
$("#mensaje").wysihtml5();

//Codigo switch (instanciación de boton deslizante)
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
    if (valor) {
        $('#publicado-update-oculto').attr('value', 'true');
    }
    else {
        $('#publicado-update-oculto').attr('value', 'false');
    }
    ;
}




//----SECCION SETEO DE VECTORES PARA PUBLICAR, MODERAR Y ELIMINAR-----


var comentarios = [];
var hilos_foros = [];
var comentarios_publicar = [];
var hilos_foros_publicar = [];

function seteo_global(tipo, accion) {

    if (accion === 'checked-publicar') {
        if (tipo === 'comentarios') {
            $(".checkbox-comentarios-publicar").each(function (index) {
                actualizar_array($(this).attr("id_elemento"), "comentario-publicar");
            });
        } else {
            $(".checkbox-hilos-publicar").each(function (index) {
                actualizar_array($(this).attr("id_elemento"), "hilo-publicar");
            });
        }
    } else if (accion === 'checked-moderar') {
        if (tipo === 'comentarios') {
            $(".checkbox-comentarios-moderar").each(function (index) {
                actualizar_array($(this).attr("id_elemento"), "comentario-moderar");
            });
        } else {
            $(".checkbox-hilos-moderar").each(function (index) {
                actualizar_array($(this).attr("id_elemento"), "hilo-moderar");
            });
        }
    } else if (accion === 'unchecked-publicar') {
        if (tipo === 'comentarios') {
            $(".checkbox-comentarios-publicar").each(function (index) {
                actualizar_array($(this).attr("id_elemento"), "comentario-publicar");
            });
        } else {
            $(".checkbox-hilos-publicar").each(function (index) {
                actualizar_array($(this).attr("id_elemento"), "hilo-publicar");
            });
        }
    } else if (accion === 'unchecked-moderar') {
        if (tipo === 'comentarios') {
            comenarios = [];
            comentarios_publicar = [];
            $(".checkbox-comentarios-moderar").prop("checked", false);
            $(".checkbox-comentarios-publicar").prop("checked", false);
        } else {
            hilos_foros = [];
            hilos_foros_publicar = [];
            $(".checkbox-hilos-moderar").prop("checked", false);
            $(".checkbox-hilos-publicar").prop("checked", false);
        }
    }
}


function actualizar_array(id, tipo) {
    if (tipo === 'comentario-moderar') { //Para moderar solamente
        if (comentarios.indexOf(id) >= 0) {
            comentarios.splice(comentarios.indexOf(id), 1);
            $("#moderar-comentario" + id).prop("checked", false);
            if (comentarios_publicar.indexOf(id) >= 0) {
                comentarios_publicar.splice(comentarios_publicar.indexOf(id), 1);
                $("#publicar-comentario" + id).prop("checked", false);
            }
        } else {
            comentarios.push(id);
            $("#moderar-comentario" + id).prop("checked", true);
        }

    } else if (tipo === 'comentario-publicar') { //Moderar y publicar, se analizan los dos array
        if (comentarios_publicar.indexOf(id) >= 0) {
            comentarios_publicar.splice(comentarios_publicar.indexOf(id), 1);
            $("#publicar-comentario" + id).prop("checked", false);
        } else {
            comentarios_publicar.push(id);
            $("#publicar-comentario" + id).prop("checked", true);
            if (comentarios.indexOf(id) < 0) {
                comentarios.push(id);
                $("#moderar-comentario" + id).prop("checked", true);
            }
        }

    } else if (tipo === 'hilo-moderar') {//Para moderar solamente
        if (hilos_foros.indexOf(id) >= 0) {
            hilos_foros.splice(hilos_foros.indexOf(id), 1);
            if (hilos_foros_publicar.indexOf(id) >= 0) {
                hilos_foros_publicar.splice(hilos_foros_publicar.indexOf(id), 1);
                $("#publicar-hilo" + id).prop("checked", false);
            }
        } else {
            hilos_foros.push(id);
            $("#moderar-hilo" + id).prop("checked", true);
        }

    } else if (tipo === 'hilo-publicar') { //Moderar y publicar, se analizan los dos array
        if (hilos_foros_publicar.indexOf(id) >= 0) {
            hilos_foros_publicar.splice(hilos_foros_publicar.indexOf(id), 1);
            $("#publicar-hilo" + id).prop("checked", false);
        } else {
            hilos_foros_publicar.push(id);
            $("#publicar-hilo" + id).prop("checked", true);
            if (hilos_foros.indexOf(id) < 0) {
                hilos_foros.push(id);
                $("#moderar-hilo" + id).prop("checked", true);
            }
        }
    }
}

function moderar_publicar(tipo) {
    if (tipo === 'hilos' && hilos_foros.length >= 0) {
        if (hilos_foros_publicar.length < 0) {
            $.ajax({
                url: '/admin/moderar_masivamente_hilos', //direccion del metodo del controller al que le pedimos los datos (ruta del sistema de ruteo de laravel)
                data: {
                    ids_hilos_foros: hilos_foros
                },
                type: 'GET',
                dataType: 'json',
                success: function (data) { //Succes si va todo bien, failed y si nunca mas te responde, data seria como el request hacia nosotros desde el controller
                    location.href = "/admin/indexNuevos";
                }
            });
        } else if (hilos_foros_publicar.length >= 0) {
            $.ajax({
                url: '/admin/moderar_masivamente_hilos', //direccion del metodo del controller al que le pedimos los datos (ruta del sistema de ruteo de laravel)
                data: {
                    ids_hilos_foros: hilos_foros,
                    ids_hilos_foros_publicar: hilos_foros_publicar
                },
                type: 'GET',
                dataType: 'json',
                success: function (data) { //Succes si va todo bien, failed y si nunca mas te responde, data seria como el request hacia nosotros desde el controller
                    location.href = "/admin/indexNuevos";
                }
            });
        }
    } else if (tipo === 'comentarios' && comentarios.length >= 0) {
        if (hilos_foros_publicar.length < 0) {
            $.ajax({
                url: '/admin/moderar_masivamente_comentarios', //direccion del metodo del controller al que le pedimos los datos (ruta del sistema de ruteo de laravel)
                data: {
                    ids_comentarios: comentarios
                },
                type: 'GET',
                dataType: 'json',
                success: function (data) { //Succes si va todo bien, failed y si nunca mas te responde, data seria como el request hacia nosotros desde el controller
                    location.href = "/admin/indexNuevos";
                }
            });
        } else if (comentarios_publicar.length >= 0) {
            $.ajax({
                url: '/admin/moderar_masivamente_comentarios', //direccion del metodo del controller al que le pedimos los datos (ruta del sistema de ruteo de laravel)
                data: {
                    ids_comentarios: comentarios,
                    ids_comentarios_publicar: comentarios_publicar
                },
                type: 'GET',
                dataType: 'json',
                success: function (data) { //Succes si va todo bien, failed y si nunca mas te responde, data seria como el request hacia nosotros desde el controller
                    location.href = "/admin/indexNuevos";
                }
            });
        }
    }
}

function eliminar(tipo) {
    if (tipo === 'hilos' && (hilos_foros.length >= 0 || hilos_foros_publicar.length >= 0)) {
        $.ajax({
            url: '/admin/eliminar_masivamente_hilos',
            data: {
                ids_hilos_foros: hilos_foros,
                ids_hilos_foros_publicar: hilos_foros_publicar
            },
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                location.href = "/admin/indexNuevos";
            }
        });
    } else if (tipo === 'comentarios' && (comentarios.length >= 0 || comentarios_publicar >= 0)) {
        $.ajax({
            url: '/admin/eliminar_masivamente_comentarios',
            data: {
                ids_comentarios: comentarios,
                ids_comentarios_publicar: comentarios_publicar
            },
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                location.href = "/admin/indexNuevos";
            }
        });
    }
}