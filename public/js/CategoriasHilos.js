/** Inicio Código de Sidebar */
$("#side-categoriasHilos-li").addClass("active");
$("#side-categoriasHilos-ul").addClass("menu-open");
$("#side-ele-categoriasHilos").addClass("active");
/** Fin Código de Sidebar */
/** Modal de update y de delete */
function completar_campos(categoriaHilo) {

    $('#update-nombre').val(categoriaHilo.nombre); //Numeral es para identificar el id. Para clases se usa punto en vez de numeral.
    $('#update-descripcion').val(categoriaHilo.descripcion);
    $('#form-update').attr('action', '/admin/categoriasHilos/' + categoriaHilo.id); //Modifica atributos "attr"
    $('#modal-update').modal('show');
}

function abrir_modal_borrar(id) {
    $('#form-delete').attr('action', '/admin/categoriasHilos/' + id);
    $('#modal-delete').modal('show');
}

//Datatable
var table = $('#example').DataTable({
    language: tabla_traducida
});

$('a.toggle-vis').on('click', function (e) {
    e.preventDefault();
    // Get the column API object
    var column = table.column($(this).attr('data-column'));
    // Toggle the visibility
    column.visible(!column.visible());
});

$('#example tbody').on('mouseenter', 'td', function () {
    var colIdx = table.cell(this).index().column;

    $(table.cells().nodes()).removeClass('highlight');
    $(table.column(colIdx).nodes()).addClass('highlight');
});