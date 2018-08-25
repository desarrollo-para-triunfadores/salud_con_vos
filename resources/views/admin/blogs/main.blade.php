@extends('admin.partes.index') @section('title') Blogs registrados @endsection 

@section('content')

<div class="content-wrapper" style="min-height: 916px;">
    <section class="content-header">
        <h1>
            Blogs
            <small>Registros almacenados</small>
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
                        <table id="example" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>                             
                                    <th class="text-center">Titulo</th>
                                    <th class="text-center">Autor</th>
                                    <th class="text-center">Categoría</th>
                                    <th class="text-center">Fecha de creación</th>
                                    <th class="text-center">Cantidad de comentarios</th>
                                    <th class="text-center">Publicado</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($blogs as $blog)
                                <tr>                                    
                                    <td class="text-center">{{$blog->titulo}}</td>
                                    <td class="text-center">{{$blog->user->name}}</td>
                                    <td class="text-center">{{$blog->categoria->nombre}}</td>
                                    <td class="text-center">{{$blog->created_at->format('d/m/Y')}}</td>
                                    <td class="text-center">{{$blog->comentarios->count()}}</td>
                                    @if ($blog->publicado === 'Si')
                                    <td class="text-center" style="color:#229954">Publicado</td>
                                    @else
                                    <td class="text-center" style="color:#ff0000">No Publicado</td>
                                    @endif
                                    <td class="text-center" width="100">
                                        <a type="button" href="/admin/blogs/{{$blog->id}}" title="Mostrar" class="btn btn-social-icon btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                        <a type="button" href="/admin/blogs/{{$blog->id}}/edit" title="Editar" class="btn btn-social-icon btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                        <a onclick="abrir_modal_borrar({{$blog->id}})" title="Eliminar este registro" class="btn btn-social-icon btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr> 
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>                                  
                                    <th class="text-center">Titulo</th>
                                    <th class="text-center">Autor</th>
                                    <th class="text-center">Categoría</th>
                                    <th class="text-center">Fecha de creación</th>
                                    <th class="text-center">Cantidad de comentarios</th>
                                    <th class="text-center">Publicado</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div> 
                    <div class="box-footer">
                        <a title="Redactar un blog" type="button" href="/admin/blogs/create" class="btn btn-primary pull-right">
                            <i class="fa fa-plus-circle"></i> &nbsp;Redactar Blog
                        </a>                          
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

@endsection