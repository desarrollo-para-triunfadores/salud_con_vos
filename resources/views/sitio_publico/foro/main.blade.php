@extends('sitio_publico.partes.index') 

@section('title') Salud con Vos | Foro
@endsection 

@section('estilos') 
<link type="text/css" rel="stylesheet" href="{{ asset('css/front/foro.css') }}">
@endsection 

@section('content')

<div class="content">
    <div class="content_inner">
        <div class="full_width animation_content">
            <div class="full_width_inner">
                @include('sitio_publico.foro.hilos')
            </div>
        </div>
    </div
</div>

@endsection

@section('script')
<script>
    lsjQuery("#nav-foro").addClass("active");
</script>
<!--<script src="{{ asset('js/front/inicio.js') }}"></script>-->
@endsection