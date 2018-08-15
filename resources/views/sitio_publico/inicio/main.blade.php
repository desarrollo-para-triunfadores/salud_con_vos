@extends('sitio_publico.partes.index') 

@section('title') Salud con Vos | Inicio
@endsection 

@section('estilos') 
<link type="text/css" rel="stylesheet" href="{{ asset('css/front/inicio.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('css/front/contacto.css') }}">
@endsection 

@section('content')

<div class="content">
    <div class="content_inner">
        @include('sitio_publico.inicio.carrusel')
        <div class="full_width animation_content">
            <div class="full_width_inner">
                @include('sitio_publico.inicio.articulos')
                @include('sitio_publico.contacto.mapa')
            </div>
        </div>
    </div
</div>

@endsection

@section('script')
<script>
    lsjQuery("#nav-inicio").addClass("active");
</script>
<script src="{{ asset('js/front/inicio.js') }}"></script>
<script src="{{ asset('js/front/mapa.js') }}"></script>
@endsection