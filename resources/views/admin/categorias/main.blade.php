
@extends('admin.partes.index') @section('title') Categorías registradas @endsection 

@section('content')

<div class="content-wrapper" style="min-height: 916px;">
    <section class="content-header">
        <h1>
            Categorías
            <small>Registros almacenados</small>
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">
                    <i class="fa fa-users"></i> Foros</a>
            </li>
            <li class="active">Categorías</li>
        </ol>
    </section>

    <!-- Inicio Tabla de Categorias -->
<section class="content">
        <div class="row">
            <div class="col-md-12">
                <br>
                <div class="box box-primary">                   
                    <div class="box-body ">                            
                        @include('admin.partes.msj_acciones')
                        <table id="example" class="display responsive" cellspacing="0" width="100%">
                            <thead>
                                <tr>                                  
                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">Contenidos</th>
                                    <th class="text-center">Fecha de alta</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categorias as $categoria)
                                <tr>                                    
                                    <td class="text-center ">{{$categoria->nombre}}</td>
                                    <td class="text-left">{{$categoria->contenidos}}</td>
                                    <td class="text-center">{{$categoria->created_at->format('d/m/Y')}}</td>
                                    <td class="text-center">
                                        <a onclick="completar_campos({{$categoria}})" title="Editar este registro" class="btn btn-social-icon btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                        <a onclick="abrir_modal_borrar({{$categoria->id}})" title="Eliminar este registro" class="btn btn-social-icon btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr> 
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>                                  
                                    <th class="text-center">Nombre</th>
                                    <th class="text-center">Contenidos</th>
                                    <th class="text-center">Fecha de alta</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div> 
                    <div class="box-footer">
                        <button title="Registrar una categoría" type="button" id="boton-modal-create" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-create">
                            <i class="fa fa-plus-circle"></i> &nbsp;Registrar categoría
                        </button>
                    </div>
                </div>
            </div>                                               
        </div>
    </section>
</div>

 
 @include('admin.categorias.form.update') 
 @include('admin.categorias.form.delete')
@include('admin.categorias.form.create')

@endsection 

@section('script')
<script src="{{ asset('js/Categorias.js') }}"></script>
@endsection