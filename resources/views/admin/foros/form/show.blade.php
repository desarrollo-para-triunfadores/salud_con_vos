@extends('admin.partes.index') @section('title') Foro @endsection 
@section('content')
<div class="content-wrapper" style="min-height: 916px;">
    <section class="content-header">
        <h1>
            Foro
            <small>Hilo</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-users"></i>Foros</a>
            </li>
            <li class="active">Hilos</li>
        </ol>
    </section>

    <!-- Inicio Tabla de Hilos -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                @include('admin.partes.msj_acciones')

                <div class="row">
                    <!-- Perfil de usuario -->
                    <div class="col-md-3">
                        <div class="box box-primary">
                            <div class="box-body box-profile">
                                <img style="width:90px;height:90px" alt="User Avatar" class="profile-user-img img-responsive img-circle" src="{{ asset('imagenes/usuarios/sin_imagen.png') }}">
                                <h3 class="profile-username text-center">{{$hilo_foro->nombre}}</h3>
                                <p class="text-muted text-center">{{$hilo_foro->correo}}</p>
                                <ul class="list-group list-group-unbordered">
                                    <li class="list-group-item">
                                        <b>Título</b> <p>{{$hilo_foro->titulo}}</p>
                                    </li>

                                    <li class="list-group-item">
                                        <b>Contenido</b> <p>{{$hilo_foro->contenido}}</p>
                                    </li>

                                    <li class="list-group-item">
                                        <b>Categoría</b> <a class="pull-right">{{$hilo_foro->categoria->nombre}}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Cantidad de mensajes</b> <a class="pull-right">{{$hilo_foro->comentarios->count()}}</a>
                                    </li>
                                </ul>

                                <!-- Boton publicado -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="button" class="btn btn-warning btn-block btn-sm" onclick="completar_campos({{$hilo_foro}})"><i class="fa fa-pencil"></i>  Editar</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="button" class="btn btn-danger btn-block btn-sm" onclick="abrir_modal_borrar({{$hilo_foro->id}})"><i class="fa fa-trash"></i>  Eliminar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fin perfil de usuario -->

                    <!-- Comentarios del hilo -->
                    <div class="col-md-9">
                        <div class="box box-primary">
                            <div class="box-body">  
                                @if ($hilo_foro->comentarios->count()>0)
                                @foreach($hilo_foro->comentarios as $comentario)
                                <div class="post" >
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm" src="{{asset('imagenes/usuarios/sin_imagen.png')}}">
                                        <!-- Boton de publicado -->
                                        <div class="pull-right" >
                                            <form id="boton-publicado" action="" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                                                <input name="_method" type="hidden" value="PUT">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                @if($comentario->publicado == 'true')
                                                <input type="checkbox" onchange="actualizar_estado($(this).prop('checked'), {{$comentario->id}})" checked data-toggle="toggle" data-width="130" data-onstyle="success" data-offstyle="danger" data-on="Publicado" data-off="No publicado">
                                                @else
                                                <input type="checkbox" onchange="actualizar_estado($(this).prop('checked'), {{$comentario->id}})" data-toggle="toggle" data-width="130" data-onstyle="success" data-offstyle="danger" data-on="Publicado" data-off="No publicado">
                                                @endif
                                            </form>
                                        </div>


                                        <!-- Nombre usuario que hizo el comentario -->
                                        <span class="username">
                                            <a href="#">{{$comentario->nombre}}</a>
                                        </span>
                                        <!-- Fecha de creacion del comentario -->

                                        <span id="span-fecha" class="description">Creado el {{$comentario->created_at->format('d/m/Y')}}</span> 

                                        @if($comentario->moderado === 'true') 
                                            <span id="span-moderacion" class="description" style="color:#229954">Moderado</span>
                                        @else 
                                            <span id="span-moderacion" class="description" style="color:#ff0000">No moderado</span>
                                        @endif


                                    </div>
                                    <!-- Contenido del comentario -->
                                    @if ($comentario->respuesta_id)                               
                                    <div class="well well-lg">
                                        <div class="user-block">
                                            <img class="img-circle img-bordered-sm" src="{{asset('imagenes/usuarios/sin_imagen.png')}}">
                                            <!-- Nombre del usuario que hizo el comentario -->
                                            <span class="username">
                                                {{$comentario->nombre}} <b>dijo:</b>
                                            </span>
                                            <!-- Fecha de creacion del comentario -->
                                            <span class="description">Publicado el {{$comentario->created_at->format('d/m/Y')}}</span>
                                        </div>
                                        <textarea class="form-control input-sm" rows="1" disabled>{!! $comentario->respuesta->contenido !!}</textarea>

                                    </div>
                                    @endif
                                    <div class="post" >
                                        <div class="user-block">
                                            <div class="col-sm-12 pull-right">
                                                {!! $comentario->contenido !!}
                                                <br>
                                                <!-- Enviar respuesta al comentario-->
                                                <div class="post clearfix">
                                                    <form class="form-horizontal" action="/admin/comentarios" method="POST">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <input name="respuesta_id" value="{{$comentario->id}}" class="hide">
                                                        <input name="hilo_foro_id" value="{{$hilo_foro->id}}" class="hide">
                                                        <div class="form-group margin-bottom-none">
                                                            <div class="col-sm-10">
                                                                <textarea name="contenido" class="form-control input-sm" placeholder="Responder a este mensaje.." maxlength="500" rows="1" required></textarea>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <button type="submit" class="btn btn-primary pull-right btn-block btn-sm">Enviar respuesta</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- Fin comentario -->
                                @endforeach
                                <!--Sin comentarios-->
                                @else
                                <div class="post text-center" >
                                    <div class="user-block">
                                        <h2>Sin comentarios</h2>
                                    </div>
                                </div>    
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- Comentar sobre el foro-->
                    <div class="col-md-9 pull-right">
                        <div class="box box-primary">
                            <div class="box-body box-profile">
                                <div class="post clearfix">
                                    <form class="form-horizontal" action="/admin/comentarios" method="POST">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input name="hilo_foro_id" value="{{$hilo_foro->id}}" class="hide">
                                        <div class="form-group margin-bottom-none">
                                            <div class="col-md-10">
                                                <textarea name="contenido" class="form-control input-md" placeholder="Comentar en el foro.." maxlength="500" rows="1" required></textarea>
                                            </div>
                                            <div class="col-md-2">
                                                <button type="submit" class="btn btn-primary pull-right btn-block btn-md">Comentar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fin Comentar sobre el foro-->

                </div>
            </div>
        </div>
    </section>
</div>

@include('admin.foros.form.delete')
@include('admin.foros.form.update')
@endsection 

@section('script')
<script src="{{ asset('js/Foros.js') }}"></script>

<script>
                                                            var token = '{{ csrf_token() }}';
</script>
@endsection