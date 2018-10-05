@extends('sitio_publico.partes.index') 

@section('title') Salud con Vos | Blogs
@endsection 

@section('estilos') 
<link type="text/css" rel="stylesheet" href="{{ asset('css/front/blogs.css') }}">
@endsection 

@section('content')
<div class="content fondo-blogs section-parallax">
    <div class="content_inner animation_content">
        <!--Título-->
        <div class="title loaded">
            <div class="container">
                <div class="container_inner clearfix">
                    <h1>¿Sobre qué querés saber?</h1>
                    <span class="subtitle">En nuestro blog podrás encontrar muchos artículos muy interesantes que te pueden servir. ¡Echale un vistaso!</span>
                </div>
            </div>
        </div>
        <!--Contenido-->
        <div class="full_width">
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
<script src="{{ asset('js/front/botones_redes.js') }}"></script>
@endsection