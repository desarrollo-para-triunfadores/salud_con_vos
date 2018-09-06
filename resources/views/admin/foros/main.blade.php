@extends('admin.partes.index') @section('title') Foros registrados @endsection 

@section('content')

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


    <!-- Inicio Tabla de Foros -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <br>
                <div class="box box-primary">

                    <div class="box-body ">                            
                        @include('admin.partes.msj_acciones')
                        <table class="example" cellspacing="0" width="100%">
                            <thead>
                                <tr>                             
                                    <th class="text-center">Titulo</th>
                                    <th class="text-center">Autor</th>
                                    <th class="text-center">Correo</th>
                                    <th class="text-center">Categoría</th>
                                    <th class="text-center">Estado</th>
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
                                    @if ($hilo_foro->publicado === 'true')
                                    <td class="text-center" width="100" style="color:#229954">Publicado</td>
                                    @else
                                    <td class="text-center" width="100" style="color:#ff0000">No Publicado</td>
                                    @endif
                                    <td class="text-center">{{$hilo_foro->created_at->format('d/m/Y')}}</td>
                                    <td class="text-center" width="100">
                                        <a type="button" href="/admin/foros/{{$hilo_foro->slug}}" title="Mostrar" class="btn btn-social-icon btn-info btn-sm"><i class="fa fa-eye"></i></a>
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
                                    <th class="text-center">Estado</th>
                                    <th class="text-center">Fecha de creación</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div> 

                    <div class="box-footer">
                        <a title="Crear un foro" type="button" id="boton-modal-crear"  class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-crear">
                            <i class="fa fa-plus-circle"></i> &nbsp;Crear foro
                        </a>                          
                    </div>
                </div>
            </div>                                               
        </div>
    </section>
</div>


@include('admin.foros.form.update')
@include('admin.foros.form.delete')
@include('admin.foros.form.create')

@endsection 

@section('script')
<script src="{{ asset('js/Foros.js') }}"></script>

<script>
   $("#side-foros-li").addClass("active");
</script>

@endsection