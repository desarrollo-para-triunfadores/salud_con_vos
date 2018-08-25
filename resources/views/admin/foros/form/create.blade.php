<div class="modal fade bs-example-modal" id="modal-crear">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Registrar hilo</h4>
            </div>
            <div class="modal-body">
                @include('admin.partes.msj_lista_errores')
                <form action="/admin/foros" method="POST">
                    @include('admin.partes.msj_acciones')

                    <!-- Form de creación de Hilo -->

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row"> 

                        <!--Campo titulo -->
                        <div class="col-md-8"> 
                            <div class="form-group">
                                <label>Título</label>
                                <input type="text" name="titulo" class="form-control" placeholder="Campo obligatorio" required>
                            </div>
                        </div>
                        
                        <!--Campo de selección de categoría -->
                        <div class="col-md-4"> 
                            <div class="form-group">
                                <label>Categoría</label>
                                <select style="width: 100%"  name="categoria_id"  placeholder="Campo obligatorio"  class="select2 form-control" required>
                                    <option></option>
                                    @foreach($categorias as $categoria)
                                    <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>                                                    
                                    @endforeach
                                </select> 
                            </div>                 
                        </div>
                        
                    </div>
                    <br>
                    <div class="row">
                         <!--Campo contenido -->
                        <div class="col-md-8"> 
                            <div class="form-group">
                                <label>Contenido</label>
                                <input type="text" name="contenido" class="form-control" placeholder="Campo obligatorio" required>
                            </div>
                        </div>
                        
                        <!--Campo seleccion de estado de publicación -->
                        <div class="col-md-4"> 
                            <div>
                                 <label>Estado</label>
                                 <br>
                                <input id="publicado-create" name="publicado" type="checkbox" data-width="130" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Publicado" data-off="No publicado">
                            </div>
                        </div>

                    </div>

                    <button id="boton_submit_crear" type="submit" class="btn btn-primary hide"></button>
                </form>
                <br>      
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Volver</button>
                <button type="button" class="btn btn-primary" onclick="$('#boton_submit_crear').click()">Registrar Hilo</button>
            </div>
        </div>          
    </div>
</div>
