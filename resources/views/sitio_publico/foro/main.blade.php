@extends('sitio_publico.partes.index') 

@section('title') Salud con Vos | Foro
@endsection 

@section('estilos') 
<link type="text/css" rel="stylesheet" href="{{ asset('css/front/foro.css') }}">
@endsection 

@section('content')

<div class="content fondo section-parallax">
    <div class="content_inner animation_content">
        <!--Título-->
        <div class="title loaded">
            <div class="container">
                <div class="container_inner clearfix">
                    <h1>Tu voz cuenta</h1>
                    <span class="subtitle"> ¡Bienvenido a nuestro foro!. Aquí podrás realizar las consultas que tengas y nosotros y otros visitantes podrán responderte
                        y tú también podrás v ayudar a alguien si lo deseas. Nuestro foro como cualquier otro se encuentra organizado en
                        categorías y en hilos. Puedes filtrar entre las categorías de interés o navegar entre los hilos hasta dar con alguno
                        que te interese.</span>
                </div>
            </div>
        </div>
        <!--Contenido-->
        <div class="full_width">
            <div class="full_width_inner">
                <section id="section-hilos">
                    <div class="parallax_content ">
                        <div style="margin-top:35px;margin-bottom:35px;" class="separator transparent"></div>                                       
                        <div class="container animation_content start">
                            <div class="container_inner" style="transform: none;">
                                <div class="container_inner2 clearfix">
                                    <div class="two_columns_75_25 background_color_sidebar grid2 clearfix">
                                        <div class="column1">                
                                            @include('sitio_publico.foro.hilos')
                                        </div>

                                        <div class="column2">                
                                            @include('sitio_publico.foro.panel')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
    lsjQuery("#nav-foro").addClass("active");
</script>
<script src="{{ asset('js/front/foro.js') }}"></script>
@endsection