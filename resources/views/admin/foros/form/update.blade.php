<div class="modal fade" id="modal-update">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Actualizar hilo</h4>
            </div>
            <div class="modal-body">
                @include('admin.partes.msj_lista_errores')
                <!-- Form de creación de Hilo -->
                <form id="form-update" action="" method="POST" enctype="multipart/form-data">
                    <input name="_method" type="hidden" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <!--Campo titulo -->
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" name="titulo" id="update-titulo" class="form-control" placeholder="Campo obligatorio" >
                    </div>
                    
                    <!--Campo titulo -->
                    <div class="form-group">
                        <label>Contenido</label>
                        <input type="text" name="contenido" id="update-contenido" class="form-control" placeholder="Campo obligatorio" >
                    </div>

                    <!-- Campo de seleccion de categoria -->
                    <div class="form-group">
                        <label>Categoría</label>
                        <select style="width: 100%" name="categoria_id" id="categoria_id"  placeholder="Campo obligatorio"  class="select2 form-control" >
                            <option></option>
                            @foreach($categorias as $categoria)
                            <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>                                                    
                            @endforeach
                        </select> 
                    </div>                 
                    

                    <!--Campo seleccion de publicación -->
                    <div class="form-group">
                        <label>Estado</label>
                        <br>
                        <input id="publicado-update" onchange="actualizar_input_publicado($(this).prop('checked'))" type="checkbox" data-width="130" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Publicado" data-off="No Publicado">
                        <input id="publicado-update-oculto" name="publicado" type="text" class="hide" value="">
                    </div>

                    <button id="boton_submit_update" type="submit" class="btn btn-primary hide"></button>
                </form>
                <br>      
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Volver</button>
                <button type="button" class="btn btn-primary" onclick="$('#boton_submit_update').click()">Actualizar Hilo</button>
            </div>
        </div>          
    </div>
</div>