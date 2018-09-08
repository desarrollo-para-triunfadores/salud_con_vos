/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



function verificar_campos(tipo_form) {

    var verificar = true, campo = "";


    console.log(tipo_form);

    if (tipo_form === "buscar") {

        if (lsjQuery("#buscar").val() === "Buscar" || lsjQuery("#buscar").val() === "") {
            verificar = false;
            campo = "Si no escribes nada que buscar no hay nada que hacer... :D";
        }

    } else {

        if (lsjQuery("#nombre_" + tipo_form).val() === "Tú nombre *" || lsjQuery("#nombre_" + tipo_form).val() === "") {
            verificar = false;
            campo = "No te olvides de ingresar tu nombre... :P";
        }

        if (!validarEmail(lsjQuery("#correo_" + tipo_form).val())) {
            verificar = false;
            campo = "La dirección de mail ingresado no tiene un formato correcto... :O";
        }

        if (lsjQuery("#correo_" + tipo_form).val() === "Email *" || lsjQuery("#correo_" + tipo_form).val() === "") {
            verificar = false;
            campo = "No ingresaste ningún email... :P";
        }

        if ((lsjQuery("#titulo_" + tipo_form).val() === "Título *" || lsjQuery("#titulo_" + tipo_form).val() === "") && tipo_form === "foro") {
            verificar = false;
            campo = "No escribiste ningún título descriptivo para tu pregunta... :P";
        }

        if (lsjQuery("#contenido_" + tipo_form).val() === "Mensaje *" || lsjQuery("#contenido_" + tipo_form).val() === "") {
            verificar = false
            campo = "Si no escribes una pregunta no tendremos nada que responderte... :D";
        }

        if (lsjQuery("#categoria_" + tipo_form).val() === "" && tipo_form === "foro") {
            verificar = false;
            campo = "No te olvides de seleccionar la categoría a la que pertenece tu pregunta... :P";
        }

    }

    if (!verificar) {
        swal({
            type: 'error',
            title: 'Oops...',
            text: campo
        });
    }

    return verificar;
}

function validarEmail(email)
{
    var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email) ? true : false;
}


lsjQuery("form").on('submit', function (evt) {
    evt.preventDefault();
    var formulario = lsjQuery(this)[0], tipo_form = formulario[0]["value"];

    if (verificar_campos(tipo_form)) {
        formulario.submit();
    }
});





