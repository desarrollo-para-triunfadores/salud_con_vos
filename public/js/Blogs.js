/** Inicio Código de Sidebar */
$("#side-blogs-li").addClass("active");
$("#side-blogs-ul").addClass("menu-open");
$("#side-ele-blogs").addClass("active");
/** Fin Código de Sidebar */
/** Modal de update y de delete */
function completar_campos(blog) {

    $('#update-nombre').val(blog.nombre); //Numeral es para identificar el id. Para clases se usa punto en vez de numeral.
    $('#update-descripcion').val(blog.descripcion);
    $('#form-update').attr('action', '/admin/blogs/' + blog.id); //Modifica atributos "attr"
    $('#modal-update').modal('show');
}

function abrir_modal_borrar(id) {
    $('#form-delete').attr('action', '/admin/blogs/' + id);
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

    $("#sinopsis").wysihtml5();
    $("#contenido").wysihtml5();
    
    $('.input_archivo').fileinput({
        theme: 'fa',
        language: 'es',
        showUpload: false,
        uploadUrl: '#',
        allowedFileExtensions: ['jpg', 'jpeg']
    });
