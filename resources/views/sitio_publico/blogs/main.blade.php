@extends('sitio_publico.partes.index') 

@section('title') Salud con Vos | Blogs
@endsection 

@section('estilos') 
<link type="text/css" rel="stylesheet" href="{{ asset('css/front/blogs.css') }}">
@endsection 

@section('content')

<div class="content">
    <div class="content_inner">
        <div class="full_width animation_content">
            <div class="full_width_inner">
                @include('sitio_publico.blogs.articulos')
            </div>
        </div>
    </div
</div>

@endsection

@section('script')
<script>
    lsjQuery("#nav-blog").addClass("active");
</script>
<!--<script src="{{ asset('js/front/inicio.js') }}"></script>-->
@endsection