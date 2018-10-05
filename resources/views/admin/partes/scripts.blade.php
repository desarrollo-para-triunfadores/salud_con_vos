
<!-- jQuery 2.2.3 -->
<script src="{{ asset('plantillas/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>

<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plantillas/AdminLTE/plugins/jQuery/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('plantillas/AdminLTE/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- datepicker -->
<script src="{{ asset('plantillas/AdminLTE/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('plantillas/AdminLTE/plugins/datepicker/locales/bootstrap-datepicker.es.js') }}"></script>

<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('plantillas/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>

<!-- AdminLTE App -->
<script src="{{ asset('plantillas/AdminLTE/dist/js/app.min.js') }}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{ asset('plantillas/AdminLTE/dist/js/demo.js') }}"></script>

<!-- DataTables -->
<script src="{{ asset('plantillas/AdminLTE/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plantillas/AdminLTE/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>

<!-- Select2 -->
<script src="{{ asset('plantillas/AdminLTE/plugins/select2/select2.full.min.js') }}"></script>

<!-- Croppie -->
<!--<script src="{{ asset('plantillas/AdminLTE/plugins/croppie/js/deploy.js') }}"></script>-->
<script src="{{ asset('plantillas/AdminLTE/plugins/croppie/js/croppie.min.js') }}"></script>

<!--bootbox-->
<script src="{{ asset('plantillas/AdminLTE/plugins/bootbox/bootbox.min.js') }}"></script>


<!-- boostrap-fileinput -->
<script src="{{ asset('plantillas/AdminLTE/plugins/bootstrap-fileinput/js/plugins/sortable.js') }}" type="text/javascript"></script>
<script src="{{ asset('plantillas/AdminLTE/plugins/bootstrap-fileinput/js/fileinput.js') }}" type="text/javascript"></script>
<script src="{{ asset('plantillas/AdminLTE/plugins/bootstrap-fileinput/js/locales/es.js') }}" type="text/javascript"></script>
<script src="{{ asset('plantillas/AdminLTE/plugins/bootstrap-fileinput/themes/explorer-fa/theme.js') }}" type="text/javascript"></script>
<script src="{{ asset('plantillas/AdminLTE/plugins/bootstrap-fileinput/themes/fa/theme.js') }}" type="text/javascript"></script>

<!-- Para el Toggle Button en Roles -->
<script src="{{ asset('plantillas/AdminLTE/plugins/bootstrap-toogle/bootstrap-toggle.min.js') }}" type="text/javascript"></script>


<script>
$(".select2").select2({
    placeholder: "Seleccione una opción"
});

//var msj_validacion_jquery = {
//    required: 'Este campo es obligatorio.',
//    remote: 'Por favor, rellena este campo.',
//    email: 'Por favor, escribe una dirección de correo válida',
//    url: 'Por favor, escribe una URL válida.',
//    date: 'Por favor, escribe una fecha válida.',
//    dateISO: 'Por favor, escribe una fecha (ISO) válida.',
//    number: 'Por favor, escribe un número entero válido.',
//    digits: 'Por favor, escribe sólo dígitos.',
//    creditcard: 'Por favor, escribe un número de tarjeta válido.',
//    equalTo: 'Por favor, escribe el mismo valor de nuevo.',
//    accept: 'Por favor, escribe un valor con una extensión aceptada.',
//    maxlength: jQuery.validator.format('Por favor, no escribas más de {0} caracteres.'),
//    minlength: jQuery.validator.format('Por favor, no escribas menos de {0} caracteres.'),
//    rangelength: jQuery.validator.format('Por favor, escribe un valor entre {0} y {1} caracteres.'),
//    range: jQuery.validator.format('Por favor, escribe un valor entre {0} y {1}.'),
//    max: jQuery.validator.format('Por favor, escribe un valor menor o igual a {0}.'),
//    min: jQuery.validator.format('Por favor, escribe un valor mayor o igual a {0}.')
//  };

//esta variable se usa para traducir todas las tablas del sistema. Por alguna razón hay incompatibilidad entre el cambio del lenguaje y los filtros individaules en las columnas. Por eso se recurre a esto.
var tabla_traducida = {
    "sProcessing": "Procesando...",
    "sLengthMenu": "Mostrar _MENU_ registros",
    "sZeroRecords": "No se encontraron resultados",
    "sEmptyTable": "Ningún dato disponible en esta tabla",
    "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix": "",
    "sSearch": "Buscar:",
    "sUrl": "",
    "sInfoThousands": ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst": "Primero",
        "sLast": "Último",
        "sNext": "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
};

</script>

<!-- Directorios imágenes-->
<script>
    var url_imagenes_usuarios = "{{ asset('imagenes/usuarios/') }}/";
</script>

