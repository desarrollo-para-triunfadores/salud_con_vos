@extends('sitio_publico.partes.index') 

@section('title') Salud con Vos | ¿Quiénes somos?
@endsection 

@section('estilos') 
<link type="text/css" rel="stylesheet" href="{{ asset('css/front/quienes-somos.css') }}">
@endsection 

@section('content')

<div class="content">
    <div class="content_inner">
        <div class="full_width animation_content">
            <div class="full_width_inner">
                @include('sitio_publico.quienes_somos.quienes_somos')
            </div>
        </div>
    </div
</div>

@endsection

@section('script')
<script>
    lsjQuery("#nav-quienes-somos").addClass("active");
</script>
<!--<script src="{{ asset('js/front/inicio.js') }}"></script>-->
@endsection