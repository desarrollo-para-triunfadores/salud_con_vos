<div class="modal fade" id="modal-create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Registrar categoría</h4>
            </div>
            <div class="modal-body">
           <form action="/admin/categoriasHilos" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">                                                           
                    <h3>Detalles del registro</h3>
                    <br>
                    <div class="form-group">
                        <label>Nombre:</label>
                        <input name="nombre" type="text" maxlength="60" class="form-control" placeholder="Campo requerido" required>
                    </div>   
                    <div class="form-group">
                        <label>Descripción:</label>
                        <textarea name="descripcion" type="text" maxlength="140" rows="3" class="form-control" placeholder="Breve descripción de no más de 140 caracteres"></textarea>
                    </div>
                    <button id="boton_submit_create" type="submit" class="btn btn-primary hide"></button>
                </form>
                <br>      
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Volver</button>
                <button type="button" class="btn btn-primary" onclick="$('#boton_submit_create').click()">Registrar categoría</button>
            </div>
        </div>          
    </div>
</div>