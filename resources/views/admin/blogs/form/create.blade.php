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
                        <form action="/admin/blogs" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row"> 

                                <!-- Campo para titulo -->
                                <div class="col-md-6"> 
                                    <div class="form-group">
                                        <label>Título</label>
                                        <input type="text" name="titulo" class="form-control" placeholder="Campo obligatorio" required>
                                    </div>
                                </div>

                                <!-- Campo de seleccion de categoria -->
                                <div class="col-md-6"> 
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

                                <!-- Campo para redaccion de sinopsis -->
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label>Sinopsis</label>
                                        <textarea id="sinopsis" name="sinopsis" placeholder="Escriba aquí la sinopsis..." style="width: 100%;" rows="6" required></textarea>
                                    </div>
                                </div>

                                <!-- Campo para link de video de youtube -->
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label>Link video</label>
                                        <div class="input-group">
                                            <input name="linkvideo" type="url" class="form-control" placeholder="Link YouTube">
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
                                        <input name="imagenes[]" class="input_archivo" type="file" multiple>
                                        <p class="help-block">Formatos permitidos: .JPEG y .JPG</p>
                                    </div>
                                </div>

                                <!-- Campo para redaccion de contenido -->
                                <div class="col-md-12"> 
                                    <div class="form-group">
                                        <label>Contenido</label>
                                        <textarea id="contenido" name="contenido" placeholder="Escriba aquí el contenido del Blog..." style="width: 100%;" rows="12" required></textarea>
                                    </div>
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


                            <button id="boton_submit_create" type="submit" class="btn btn-primary hide"></button>
                        </form>

                        <!-- Footer con boton de registro -->
                    </div> 
                    <div class="box-footer">
                        <button type="button" class="btn btn-primary pull-right" onclick="$('#boton_submit_create').click()">
                            <i class="fa fa-plus-circle"></i> &nbsp;Guardar
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
@endsection