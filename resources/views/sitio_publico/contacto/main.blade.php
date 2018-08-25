@extends('sitio_publico.partes.index') 

@section('title') Salud con Vos | Inicio
@endsection 

@section('estilos') 
<link type="text/css" rel="stylesheet" href="{{ asset('css/front/inicio.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('css/front/contacto.css') }}">
@endsection 

@section('content')

<div class="content fondo-contacto section-parallax">
    <div class="content_inner animation_content">
        <!--Título-->
        <div class="title loaded">
            <div class="container">
                <div class="container_inner clearfix">
                    <h1>¿Donde recibir atención?</h1>
                    <span class="subtitle"> Tenés derecho a recibir atención en cualquier centro de salud de la provincia. Además podes podés consultar aquí
                        las asesorías y consultorios especializados.</span>
                </div>
            </div>
        </div>
        <!--Contenido-->
        <div class="full_width animation_content">
            <div class="full_width_inner">
                @include('sitio_publico.contacto.mapa')
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
    lsjQuery("#nav-contacto").addClass("active");
</script>
<script src="{{ asset('js/front/mapa.js') }}"></script>
@endsection