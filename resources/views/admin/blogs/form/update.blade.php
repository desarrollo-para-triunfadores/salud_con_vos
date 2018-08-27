@extends('admin.partes.index') @section('title') Blog @endsection 

@section('content')

<div class="content-wrapper" style="min-height: 916px;">
    <section class="content-header">
        <h1>
            Blog
            <small>Redacción de Blog</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-users"></i>Blogs</a>
            </li>
            <li class="active">Blogs</li>
        </ol>
    </section>

    <!-- Inicio Tabla de Blogs -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <br>
                <div class="box box-primary">
                    <div class="box-body ">                            
                        @include('admin.partes.msj_acciones')

                        <!-- Form de creación de Blog -->

                        <form id="form" action="/admin/blogs/{{$blog->id}}"  method="POST" enctype="multipart/form-data">
                            <input name="_method" type="hidden" value="PUT">
                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            <div class="row"> 

                                <!-- Campo para titulo -->
                                <div class="col-md-6"> 
                                    <div class="form-group">
                                        <label>Título</label>
                                        <input value="{{$blog->titulo}}" type="text" name="titulo" class="form-control" placeholder="Campo obligatorio" required>
                                    </div>
                                </div>

                                <!-- Campo de seleccion de categoria -->
                                <div class="col-md-6"> 
                                    <div class="form-group">
                                        <label>Categoría</label>
                                        <select style="width: 100%"  name="categoria_id" id="categoria_id"  placeholder="Campo obligatorio"  class="select2 form-control" required>
                                            <option></option>
                                            @foreach($categorias as $categoria)
                                            <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>                                                    
                                            @endforeach
                                        </select> 
                                    </div>                 
                                </div>

                                <!-- Campo sinopsis -->
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label>Sinopsis</label>
                                        <textarea maxlength="280" id="sinopsis" name="sinopsis" style="width: 100%;" rows="4" readonly>{{$blog->sinopsis}}</textarea>                      
                                    </div>
                                </div>

                                <!-- Campo para link de video de youtube -->
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label>Link video</label>
                                        <div class="input-group">
                                            <input name="linkvideo" value="{{$blog->linkvideo}}" type="text" class="form-control" placeholder="Link YouTube">
                                            <span class="input-group-addon">
                                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Campo para carga de imagenes -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Imágenes para carrusel</label>
                                        <input name="imagenes[]" id="imagenes" type="file" multiple >
                                        <p class="help-block">Formatos permitidos: .JPEG y .JPG</p>
                                    </div>
                                </div>

                                <!-- Campo contenido -->
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label>Contenido</label>
                                        <textarea maxlength="10000" id="contenido" name="contenido" style="width: 100%;" rows="12" readonly>{{$blog->contenido}}</textarea>
                                    </div>
                                </div>


                                <!--Campo seleccion de estado de publicación -->
                                <div class="col-md-6"> 
                                    <div>
                                        <label>Estado</label>
                                        <br>
                                        @if($blog->publicado === 'Si')
                                        <input name="publicado" type="checkbox" checked data-toggle="toggle" data-width="130" data-onstyle="success" data-offstyle="danger" data-on="Publicado" data-off="No publicado">
                                        @else
                                        <input name="publicado" type="checkbox" data-toggle="toggle" data-width="130" data-onstyle="success" data-offstyle="danger" data-on="Publicado" data-off="No publicado">
                                        @endif
                                    </div>
                                </div>


                                <!-- Boton submiteo oculto -->    
                                <button id="boton_submit_update" type="submit" class="btn btn-primary hide"></button>
                        </form>

                        <!-- Footer con boton de registro -->
                    </div> 
                    <div class="box-footer">
                        <a href="http://localhost:8000/admin/blogs" title="Volver a la pantalla anterior" class="btn btn-default btn-sm"><i class="fa fa-arrow-left"></i>Volver</a>
                        <button type="button" class="btn btn-warning pull-right" onclick="$('#boton_submit_update').click()">
                            <i class="fa fa-pencil"></i> &nbsp;Guardar cambios
                        </button>
                    </div>
                </div>
            </div>                                               
        </div>
    </section>
</div>


@endsection 

@section('script')
<script src="{{ asset('js/Blogs.js') }}"></script>
<script>
                            //Con esa cosa seteamos el valor del select
                            $('#categoria_id').val('{{$blog->categoria_id}}').trigger("change");

                            //Imágenes
                            var urls = '{{$urls}}';
                            var datos_imagenes = '{{$datos_imagenes}}';
                            var urls_parseados = JSON.parse(urls.replace(/&quot;/g, '"'));
                            var datos_parseados1 = JSON.parse(datos_imagenes.replace(/&quot;/g, '"'));
                            var datos_parseados2 = [];
                            var token = $("#token").val();

                            datos_parseados1.forEach(function (element) {
                                var imagen = element;
                                imagen.extra = {'_token': token};
                                datos_parseados2.push(imagen);
                            });                   

                            $("#imagenes").fileinput({
                                language: 'es',
                                allowedFileExtensions: ['jpg', 'jpeg'],
                                initialPreview: urls_parseados,
                                initialPreviewAsData: true,
                                initialPreviewConfig: datos_parseados2,
                                deleteUrl: "/admin/eliminar_imagen",
                                overwriteInitial: false,
                                maxFileSize: 5120
                            });



</script>
@endsection