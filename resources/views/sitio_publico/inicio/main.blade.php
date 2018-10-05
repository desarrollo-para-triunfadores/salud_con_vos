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
        <!--Carrusel-->
        @include('sitio_publico.inicio.carrusel')
        <div class="full_width animation_content start">
            <div class="full_width_inner">
                <!--Artículos-->

                <div class="fondo-articulo-blog section-parallax">
                    <!--Titulo y leyenda-->
                    <div style="margin-top:35px;margin-bottom:35px;" class="separator transparent"></div>
                    <h2 class="h2-inicio">¿Sobre qué querés saber?</h2>
                    <p class="p-leyend">En nuestro blog podrás encontrar muchos artículos muy interesantes que te pueden servir. ¡Echale un vistaso!</p>                    
                    <!--Contenido-->
                    @include('sitio_publico.inicio.articulos')
                </div>
                <!--Mapa y Contacto-->
                <div class="fondo-contacto section-parallax">
                    <!--Titulo y leyenda-->
                    <div style="margin-top:35px;margin-bottom:35px;" class="separator transparent"></div>
                    <h2 class="h2-inicio">¿Donde recibir atención?</h2>
                    <p class="p-leyend">Tenés derecho a recibir atención en cualquier centro de salud de la provincia. Además podes podés consultar aquí
                        las asesorías y consultorios especializados.</p>                    
                    <!--Contenido-->
                    @include('sitio_publico.contacto.mapa')
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
    lsjQuery("#nav-inicio").addClass("active");
    if ('{{Session::has("message_contacto")}}') {
        swal('¡Mensaje enviado!', '{{Session::get("message_contacto")}}', 'success');
    }
</script>
<script src="{{ asset('js/front/inicio.js') }}"></script>
<script src="{{ asset('js/front/mapa.js') }}"></script>
<script src="{{ asset('js/front/botones_redes.js') }}"></script>
@endsection