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

                                <!-- Campo título -->
                                <div class="col-md-6"> 
                                    <div class="form-group">
                                        <label>Título</label>
                                        <span class="form-control">{{$blog->titulo}}</span>
                                    </div>
                                </div>

                                <!-- Campo de categoría -->
                                <div class="col-md-6"> 
                                    <div class="form-group">
                                        <label>Categoría</label>
                                        <span class="form-control">{{$blog->categoria->nombre}}</span>
                                    </div>
                                </div>

                                <!-- Campo sinopsis -->
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label>Sinopsis</label>
                                        <textarea style="width: 100%;" rows="6" readonly>{{$blog->sinopsis}}</textarea>                      
                                    </div>
                                </div>

                                <!-- Campo link de video de youtube -->
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label>Link video</label>
                                        <div class="input-group">
                                            <span class="form-control">{{$blog->linkvideo}}</span>
                                            <span class="input-group-addon">
                                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Campo imagenes -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Imágenes para carrusel</label>
                                        <input name="imagenes[]" id="imagenes" type="file" multiple>
                                        <p class="help-block">Formatos permitidos: .JPEG y .JPG</p>
                                    </div>
                                </div>

                                <!-- Campo contenido -->
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label>Contenido</label>
                                        <textarea style="width: 100%;" rows="12" readonly>{{$blog->contenido}}</textarea>
                                    </div>
                                </div>

                                <!-- Campo estado de publicación -->
                                <div class="col-md-2"> 
                                    <div class="form-group">
                                        <label>Estado</label>
                                        @if ($blog->publicado === 'Si')
                                        <span style="color:#229954" class="form-control"><b>Publicado</b></span>
                                        @else
                                        <span style="color:#ff0000" class="form-control"><b>No Publicado</b></span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </form>

                        <!-- Footer-->
                        <div class="box-footer">
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="{{route('blogs.index') }}" title="Volver a la pantalla anterior" class="btn btn-default btn-sm"><i class="fa fa-arrow-left"></i>Volver</a>
                                    <a title="Redactar un blog" type="button" href="/admin/blogs/create" class="btn btn-primary btn-sm">
                                        <i class="fa fa-plus-circle"></i> &nbsp;Redactar Blog
                                    </a>
                                    <div class="pull-right">                                    
                                        <a href="/admin/blogs/{{$blog->slug}}/edit" title="Editar este registro" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i>Editar registro</a>
                                        <a onclick="abrir_modal_borrar({{$blog->id}})" title="Eliminar este registro" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>Eliminar registro</a>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>                                               
            </div>
            </div>
    </section>
</div>

@include('admin.blogs.form.delete')

@endsection 

@section('script')
<script src="{{ asset('js/Blogs.js') }}"></script>
<script>
                    var urls = '{{$urls}}';
                    var datos_imagenes = '{{$datos_imagenes}}';
                    var urls_parseados = JSON.parse(urls.replace(/&quot;/g, '"'));
                    var datos_parseados = JSON.parse(datos_imagenes.replace(/&quot;/g, '"'));
                    $("#imagenes").fileinput({
                        fileActionSettings:{
                            showRemove: false,
                            showDownload: true,
                            showUpload :false,
                        },
                        theme: 'fa',
                        language: 'es',
                        uploadUrl: '#',
                        allowedFileExtensions: ['jpg', 'jpeg'],
                        initialPreview: urls_parseados,
                        initialPreviewAsData: true,
                        initialPreviewConfig: datos_parseados,
                        overwriteInitial: false
                    });
</script>
@endsection