@extends('admin.partes.index') @section('title') Foros registrados @endsection 

@section('content')
Imprimir esto primero
<div class="content-wrapper" style="min-height: 916px;">
    <section class="content-header">
        <h1>
            Foros
            <small>Registros almacenados</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-users"></i>Foros</a>
            </li>
            <li class="active">Hilos</li>
        </ol>
    </section>
    <br>
    <section class="content">
        @include('admin.partes.msj_acciones')

        <!-- Pestañas -->
        <div class="col-md-12">
            <!-- Cabeceras de pestañas -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Hilos foros</a></li>
                    <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Comentarios</a></li>
                </ul>

                <!-- Contenido de pestañas -->
                <div class="tab-content">

                    <!-- Pestaña Foros -->
                    <div class="tab-pane active" id="tab_1">

                        <!-- Inicio Tabla de Foros no moderados -->
                        <div class="row">
                            <div class="col-md-12">
                                <br>
                                                          

                                        <table class="display example" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>                             
                                                    <th class="text-center">Titulo</th>
                                                    <th class="text-center">Autor</th>
                                                    <th class="text-center">Correo</th>
                                                    <th class="text-center">Categoría</th>
                                                    <th class="text-center">Fecha de creación</th>
                                                    <th class="text-center">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($hilos_foros as $hilo_foro)
                                                <tr>                                    
                                                    <td class="text-center">{{$hilo_foro->titulo}}</td>
                                                    <td class="text-center">{{$hilo_foro->nombre}}</td>
                                                    <td class="text-center">{{$hilo_foro->correo}}</td>
                                                    <td class="text-center">{{$hilo_foro->categoria->nombre}}</td>
                                                    <td class="text-center">{{$hilo_foro->created_at->format('d/m/Y')}}</td>
                                                    <td class="text-center" width="100">
                                                        <a type="button" href="/admin/foros/{{$hilo_foro->id}}" title="Mostrar" class="btn btn-social-icon btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                                        <a type="button" onclick="completar_campos({{$hilo_foro}})" title="Editar" class="btn btn-social-icon btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                                        <a onclick="abrir_modal_borrar({{$hilo_foro->id}})" title="Eliminar este registro" class="btn btn-social-icon btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr> 
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>                                  
                                                    <th class="text-center">Titulo</th>
                                                    <th class="text-center">Autor</th>
                                                    <th class="text-center">Correo</th>
                                                    <th class="text-center">Categoría</th>
                                                    <th class="text-center">Fecha de creación</th>
                                                    <th class="text-center">Acciones</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    
                            </div>                                               
                        </div>
                    </div>
                    <!-- Pestaña Comentarios de Foros -->
                    <div class="tab-pane" id="tab_2">

                        <!-- Inicio Tabla de comentarios no moderados -->
                        <div class="row">
                            <div class="col-md-12">
                                <br>
                                                           

                                        <table class="display example" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>                             
                                                    <th class="text-center">Autor</th>
                                                    <th class="text-center">Correo</th>
                                                    <th class="text-center">Contenido</th>
                                                    <th class="text-center">Blog</th>
                                                    <th class="text-center">Foro</th>
                                                    <th class="text-center">Fecha de creación</th>
                                                    <th class="text-center">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($comentarios as $comentario)
                                                <tr>                                    
                                                    <td class="text-center">{{$comentario->nombre}}</td>
                                                    <td class="text-center">{{$comentario->correo}}</td>
                                                    <td class="text-center">{{$comentario->contenido}}</td>
                                                    @if(!is_null($comentario->hilo_foro))
                                                    <td class="text-center">{{$comentario->hilo_foro->titulo}}</td>
                                                    @else
                                                    <td class="text-center">Ninguno</td>
                                                    @endif
                                                    @if(!is_null($comentario->blog))
                                                    <td class="text-center">{{$comentario->blog->titulo}}</td>
                                                    @else
                                                    <td class="text-center">Ninguno</td>
                                                    @endif
                                                    <td class="text-center">{{$comentario->created_at->format('d/m/Y')}}</td>
                                                    <td class="text-center" width="100">
                                                        <a type="button" href="/admin/foros/{{$comentario->id}}" title="Mostrar" class="btn btn-social-icon btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                                        <a type="button" onclick="completar_campos({{$comentario}})" title="Editar" class="btn btn-social-icon btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                                        <a onclick="abrir_modal_borrar({{$comentario->id}})" title="Eliminar este registro" class="btn btn-social-icon btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr> 
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>                                  
                                                    <th class="text-center">Autor</th>
                                                    <th class="text-center">Correo</th>
                                                    <th class="text-center">Contenido</th>
                                                    <th class="text-center">Blog</th>
                                                    <th class="text-center">Foro</th>
                                                    <th class="text-center">Fecha de creación</th>
                                                    <th class="text-center">Acciones</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    
                            </div>                                               
                        </div>
                    </div>
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- nav-tabs-custom --> 
        </div>
        <!-- Fin pestañas -->
    </section>     
</div>

@endsection 

@section('script')
<script src="{{ asset('js/Foros.js') }}"></script>

@endsection