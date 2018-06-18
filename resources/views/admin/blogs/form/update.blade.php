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
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
                                        <textarea id="sinopsis" name="sinopsis" style="width: 100%;" rows="6" readonly>{{$blog->sinopsis}}</textarea>                      
                                    </div>
                                </div>

                                <!-- Campo para link de video de youtube -->
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label>Link video</label>
                                        <div class="input-group">
                                            <input name="linkvideo" value="{{$blog->linkvideo}}" type="url" class="form-control" placeholder="Link YouTube">
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
                                        <input name="imagenes[]" id="file-es" type="file" multiple>
                                        <p class="help-block">Formatos permitidos: .JPEG y .JPG</p>
                                    </div>
                                </div>

                                <!-- Campo contenido -->
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label>Contenido</label>
                                        <textarea id="contenido" name="contenido" style="width: 100%;" rows="12" readonly>{{$blog->contenido}}</textarea>
                                    </div>
                                </div>

                                <!-- Campo seleccion de publicación -->
                                <div class="col-md-6"> 
                                    <label class="radio-inline">
                                        <h4><input type="radio" name="publicado" value="1" id="publicado"><b style="color:#229954">Publicar ahora</b></h4>
                                    </label>
                                    <label class="radio-inline">
                                        <h4> <input type="radio" name="publicado" value="0" id="nopublicado"><b style="color:#c0392b">No publicar ahora</b></h4>
                                    </label>
                                </div>


                                <!-- Boton submiteo oculto -->    
                                <button id="boton_submit_update" type="submit" class="btn btn-primary hide"></button>
                        </form>

                        <!-- Footer con boton de registro -->
                    </div> 
                    <div class="box-footer">
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
    $('#sinopsis').val('{{$blog->sinopsis}}');
    $('#contenido').val('{{$blog->contenido}}');

    if ('{{$blog->publicado}}' === '1') {
        $('#publicado').prop('checked', true);
    } else {
        $('#no_publicado').prop('checked', true);
    }
    
    //Imágenes
    
    var urls = '{{$urls}}';
    var datos_imagenes = '{{$datos_imagenes}}';
    var urls_parseados = JSON.parse(urls.replace(/&quot;/g,'"'));
    var datos_parseados = JSON.parse(datos_imagenes.replace(/&quot;/g,'"'));

    $("#imagenes").fileinput({
        theme: 'fa',
        language: 'es',
        showUpload: false,
        uploadUrl: '#',
        allowedFileExtensions: ['jpg', 'jpeg'],
        initialPreview: urls_parseados,
        initialPreviewAsData: true,
        initialPreviewConfig: datos_parseados,                        
        overwriteInitial: false
    });
</script>
@endsection