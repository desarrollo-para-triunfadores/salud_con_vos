@extends('admin.partes.index') @section('title') Foros registrados @endsection 

@section('content')
<div class="content-wrapper" style="min-height: 916px;">
    <section class="content-header">
        <h1>
            Hilos Foros y Comentarios
            <small>Registros almacenados</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-users"></i>Moderación</a>
            </li>
            <li class="active">Foros y Comentarios</li>
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
                    <li class="active" id="li-hilos"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Hilos foros</a></li>
                    <li class="" id="li-comentarios"><a href="#tab_2" data-toggle="tab" aria-expanded="false">Comentarios</a></li>
                </ul>

                <!-- Contenido de pestañas -->
                <div class="tab-content">

                    <!-- Pestaña Foros -->
                    <div class="tab-pane active" id="tab_1">

                        <!-- Inicio Tabla de Foros no moderados -->
                        <div class="row">
                            <div class="col-md-12">

                                <!-- Select -->
                                <div class="form-group pull-right" style="margin: 10px 0 10px 0">
                                    <select id="select-hilos" onchange="seteo_global('hilos_foros', $(this).prop('value'))">
                                        <option value="">Seleccionar/Deseleccionar</option>
                                        <option value="checked-moderar">Tildar p/moderar</option>
                                        <option value="checked-publicar">Tildar p/publicar</option>
                                        <option value="unchecked-moderar">Destildar p/moderar</option>
                                        <option value="unchecked-publicar">Destildar p/publicar</option>
                                        <option value="unchecked-moderar">Destildar todo</option>
                                    </select>
                                </div>
                                <div class="form-group pull-right" style="margin: 10px 0 10px 0">
                                    <label class="col-sm-2 control-label">Selección:</label>
                                </div>

                                <table class="display example" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>                             
                                            <th class="text-center">Titulo</th>
                                            <th class="text-center">Autor</th>
                                            <th class="text-center">Correo</th>
                                            <th class="text-center">Categoría</th>
                                            <th class="text-center">Fecha de creación</th>
                                            <th class="text-center">Moderar/Eliminar</th>
                                            <th class="text-center">Publicar</th>
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
                                            @if ($hilo_foro->moderado === 'true')
                                            <td class="text-center" width="100" style="color:#229954">Moderado</td>
                                            @else
                                            <td class="text-center" width="100">
                                                <input type="checkbox" class="checkbox-hilos-moderar" id="moderar-hilo{{$hilo_foro->id}}" id_elemento="{{$hilo_foro->id}}" onChange="actualizar_array('{{$hilo_foro->id}}', 'hilo-moderar')"/>
                                            </td>    
                                            @endif
                                            <td class="text-center" width="100">
                                                <input type="checkbox" class="checkbox-hilos-publicar" id="publicar-hilo{{$hilo_foro->id}}" id_elemento="{{$hilo_foro->id}}" onChange="actualizar_array('{{$hilo_foro->id}}', 'hilo-publicar')"/>
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
                                            <th class="text-center">Moderar/Eliminar</th>
                                            <th class="text-center">Publicar</th>
                                        </tr>
                                    </tfoot>
                                </table>

                                <!--Footer con botones que se acomodan a la resolución de la pantalla-->
                                <div class="box-footer">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="pull-right">
                                                <a title="Moderar hilo" type="button" onclick="moderar_publicar('hilos')" id="boton-moderar-hilo"  class="btn btn-primary">
                                                    <i class="fa fa-check"></i> &nbsp;Moderar/Publicar seleccionados
                                                </a>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>                                               
                        </div>
                    </div>
                    <!-- Pestaña Comentarios de Foros -->
                    <div class="tab-pane" id="tab_2">

                        <!-- Inicio Tabla de comentarios no moderados -->
                        <div class="row">
                            <div class="col-md-12">

                                <!-- Select -->
                                <div class="form-group pull-right" style="margin: 10px 0 10px 0">
                                    <select id="select-comentarios" onchange="seteo_global('comentarios', $(this).prop('value'))">
                                        <option value="">Seleccionar/Deseleccionar</option>
                                        <option value="checked-moderar">Tildar p/moderar</option>
                                        <option value="checked-publicar">Tildar p/publicar</option>
                                        <option value="unchecked-moderar">Destildar p/moderar</option>
                                        <option value="unchecked-publicar">Destildar p/publicar</option>
                                        <option value="unchecked-moderar">Destildar todo</option>
                                    </select>
                                </div>
                                <div class="form-group pull-right" style="margin: 10px 0 10px 0">
                                    <label class="col-sm-2 control-label">Selección:</label>
                                </div>

                                <table class="display example" cellspacing="0" width="100%">
                                    <thead>
                                        <tr class="active">                             
                                            <th class="text-center">Autor</th>
                                            <th class="text-center">Correo</th>
                                            <th class="text-center">Contenido</th>
                                            <th class="text-center">Tipo (Foro/Blog)</th>
                                            <th class="text-center">Nombre</th>
                                            <th class="text-center">Fecha de creación</th>
                                            <th class="text-center">Moderar/Eliminar</th>
                                            <th class="text-center">Publicar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($comentarios as $comentario)
                                        <tr>                                    
                                            <td class="text-center">{{$comentario->nombre}}</td>
                                            <td class="text-center">{{$comentario->correo}}</td>
                                            <td class="text-center">{{$comentario->contenido}}</td>
                                            @if(!is_null($comentario->hilo_foro))
                                            <td class="text-center">Foro</td>
                                            <td class="text-center">{{$comentario->hilo_foro->titulo}}</td>
                                            @else
                                            <td class="text-center">Blog</td>
                                            <td class="text-center">{{$comentario->blog->titulo}}</td>
                                            @endif
                                            <td class="text-center">{{$comentario->created_at->format('d/m/Y')}}</td>
                                            @if ($comentario->moderado === 'true')
                                            <td class="text-center" width="100" style="color:#229954">Moderado</td>
                                            @else
                                            <td class="text-center" width="100">
                                                <input type="checkbox" class="checkbox-comentarios-moderar" id="moderar-comentario{{$comentario->id}}" id_elemento="{{$comentario->id}}" onChange="actualizar_array('{{$comentario->id}}', 'comentario-moderar')"/>
                                            </td>
                                            @endif
                                            <td class="text-center" width="100">
                                                <input type="checkbox" class="checkbox-comentarios-publicar" id="publicar-comentario{{$comentario->id}}" id_elemento="{{$comentario->id}}" onChange="actualizar_array('{{$comentario->id}}', 'comentario-publicar')"/>
                                            </td>
                                        </tr> 
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>                                  
                                            <th class="text-center">Autor</th>
                                            <th class="text-center">Correo</th>
                                            <th class="text-center">Contenido</th>
                                            <th class="text-center">Tipo (Foro/Blog)</th>
                                            <th class="text-center">Nombre</th>
                                            <th class="text-center">Fecha de creación</th>
                                            <th class="text-center">Moderar/Eliminar</th>
                                            <th class="text-center">Publicar</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                <!--Footer con botones que se acomodan a la resolución de la pantalla-->
                                <div class="box-footer">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="pull-right">
                                                <a title="Moderar/Publicar comentario" type="button" onclick="moderar_publicar('comentarios')" id="boton-moderar-comentario"  class="btn btn-primary">
                                                    <i class="fa fa-check"></i> &nbsp;Moderar/Publicar seleccionados
                                                </a>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
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
<script src="{{ asset('js/Moderacion.js') }}"></script>
@endsection