@extends('sitio_publico.partes.index') 

@section('title') Salud con Vos | Foro
@endsection 

@section('estilos') 
<link type="text/css" rel="stylesheet" href="{{ asset('css/front/articulo.css') }}">
@endsection 

@section('content')
<div class="content fondo-articulo-blog section-parallax">
    <div class="content_inner animation_content">
        <!--Título-->
        <div class="title loaded">
            <div class="container">
                <div class="container_inner clearfix">
                    <h1>{{$hilo_foro->titulo}}</h1>
                    <span class="subtitle">Por {{$hilo_foro->nombre}} en <a href="/front_foros?categoria={{$hilo_foro->categoria->slug}}" title="ver todas las preguntas referidas a este tema">{{$hilo_foro->categoria->nombre}}</a></span>                                                         
                </div>
            </div>
        </div>
        <!--Contenido-->
        <div class="full_width">
            <div class="full_width_inner">
                <section id="section-articulo-blog">
                    <div class="parallax_content ">
                        <div style="margin-top:35px;margin-bottom:35px;" class="separator transparent"></div>
                        <!--Contenido-->
                        <div class="container animation_content start">
                            <div class="container_inner" style="transform: none;">
                                <div class="container_inner clearfix">
                                    <div class="two_columns_75_25 clearfix">
                                        <div class="column1">
                                            <div class="column_inner">
                                                <div class="blog_single_holder blog_holder_v2">
                                                    <article class="quote div-traslucido">
                                                        <div class="post_info">
                                                            <div class="inner">
                                                                <div class="post_date">
                                                                    <span class="date">{{$hilo_foro->created_at->format('d')}}</span>
                                                                    <span class="month">{{$hilo_foro->created_at->format('m/Y')}}</span>
                                                                </div>
                                                                <div class="blog_like">
                                                                    <a href="#" class="qode-like" id="qode-like-415" title="Cantidad de comentarios">
                                                                        <span class="qode-like-count">{{$hilo_foro->comentarios_publicados()->count()}}</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="post_content_holder">
                                                            <div class="post_image">
                                                                <div class="post_content_quote">
                                                                    <h4>{{$hilo_foro->contenido}}</h4>
                                                                </div>
                                                            </div>
                                                            <div class="post_text post_text_hilo">
                                                                <div class="inner">
                                                                    <span class="info">
                                                                        <span class="left">
                                                                            <span id="{{$hilo_foro->slug}}" estado="cerrado" onclick="mostrar_botones('{{$hilo_foro->slug}}')" class="social_share_holder">
                                                                                <span class="social_share_icon">Compartir</span>
                                                                                <div id="social_share_dropdown_{{$hilo_foro->slug}}" class="social_share_dropdown">
                                                                                    <span class="inner_arrow_social"></span>
                                                                                    <ul style="width: 91px;">
                                                                                        <li>
                                                                                            <h5>Redes</h5>
                                                                                        </li>
                                                                                        <li class="facebook_share">
                                                                                            <a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + window.location.href+'front_foros/{{$hilo_foro->slug}}', 'sharer', 'toolbar=0,status=0,width=620,height=280');">
                                                                                                <span class="social_image">
                                                                                                    <span class="social_image_inner"></span>
                                                                                                </span>
                                                                                                <span class="share_text">Like</span>
                                                                                            </a>
                                                                                        </li>                                                                                                                        
                                                                                        <li class="twitter_share">
                                                                                            <a href="#" onclick="popUp = window.open('http://twitter.com/share?url=' + window.location.href+'/front_foros/{{$hilo_foro->slug}}', 'popupwindow', 'scrollbars=yes,width=800,height=400');
                                                                                                popUp.focus();
                                                                                                return false;"
                                                                                               target="_blank" rel="nofollow">
                                                                                                <span class="social_image">
                                                                                                    <span class="social_image_inner"></span>
                                                                                                </span>
                                                                                                <span class="share_text">Tweet</span>
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </span>
                                                                        </span>
                                                                        <span id="fecha-movil" class="right">{{$hilo_foro->created_at->diffForHumans()}}</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                                @include('sitio_publico.partes.comentarios')
                                                @include('sitio_publico.partes.comentario_nuevo')
                                            </div>
                                        </div>
                                        <div class="column2">
                                            <div class="column_inner">
                                                @include('sitio_publico.foro.panel')
                                            </div>
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
<script src="{{ asset('js/front/foro.js') }}"></script>
<script src="{{ asset('js/front/botones_redes.js') }}"></script>
@endsection