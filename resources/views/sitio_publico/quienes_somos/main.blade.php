@extends('sitio_publico.partes.index') 

@section('title') Salud con Vos | ¿Quiénes somos?
@endsection 

@section('estilos') 
<link type="text/css" rel="stylesheet" href="{{ asset('css/front/quienes-somos.css') }}">
@endsection 

@section('content')
<div class="content fondo section-parallax">
    <div class="content_inner animation_content">
        <!--Título-->
        <div class="title loaded">
            <div class="container">
                <div class="container_inner clearfix">
                    <h1>¿Quiénes  somos?</h1>
                    <span class="subtitle" <strong>Salud con vos</strong> es el portal del Programa Provincial de Salud Integral del Adolescente del Ministerio de Salud de la Provincia de Misiones que busca <strong>empoderar mediante la comunicación</strong> a los y las adolescentes.</span>
                    <span class="subtitle">Nuestro <strong>objetivo</strong> es promover y garantizar los derechos de salud de los y las adolescentes, entendiendo la salud desde una perspectiva  integral que contemple la salud física, la psicológica y emocional.</span> 
                </div>
            </div>
        </div>
        <!--Contenido-->
        <div class="full_width animation_content">
            <div class="full_width_inner">
                @include('sitio_publico.quienes_somos.quienes_somos')
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
    lsjQuery("#nav-quienes-somos").addClass("active");
</script>
<!--<script src="{{ asset('js/front/inicio.js') }}"></script>-->
@endsection