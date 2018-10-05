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
                    <h1>{{$blog->titulo}}</h1>
                    <span class="subtitle sombra">{{$blog->sinopsis}}</span>
                </div>
            </div>
        </div>
        <!--Contenido-->
        <div class="full_width">
            <div class="full_width_inner">
                <section id="section-articulo-blog">
                    <div class="parallax_content ">
                        <div style="margin-top:35px;margin-bottom:35px;" class="separator transparent"></div>
                        <div class="container animation_content start">
                            <div class="container_inner" style="transform: none;">
                                <div class="container_inner2 clearfix">
                                    <div class="two_columns_75_25 background_color_sidebar grid2 clearfix">
                                        <div class="column1">
                                            <div class="column_inner">
                                                <div class="blog_single_holder blog_holder_v2">
                                                    <article class="standard">
                                                        <div class="post_info">
                                                            <div class="inner">
                                                                <div class="post_date">
                                                                    <span class="date">{{$blog->created_at->format('d')}}</span>
                                                                    <span class="month">{{$blog->created_at->format('m/Y')}}</span>
                                                                </div>
                                                                <div class="blog_like">
                                                                    <a href="#" class="qode-like" id="qode-like-415" title="Cantidad de comentarios">
                                                                        <span class="qode-like-count">{{$blog->comentarios_publicados()->count()}}</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="post_content_holder">
                                                            <div class="post_image">

                                                                @if($blog->imagenes->count()>1)
                                                                <!--Muestro Carrusel-->
                                                                <div class="flexslider">
                                                                    <div class="flex-viewport" style="overflow: hidden; position: relative;">
                                                                        <ul class="slides" style="width: 1400%; margin-left: -438px;">
                                                                            @foreach($blog->imagenes as $imagen)     
                                                                            <li class="clone" style="width: 219px; float: left; display: block;">
                                                                                <a href="#" title="{{$blog->titulo}}">
                                                                                    <img width="1010" height="568" src="{{ asset('imagenes/blogs/'.$imagen->nombre) }}" class="attachment-full" alt="09">
                                                                                </a>
                                                                            </li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                    <ul class="flex-direction-nav">
                                                                        <li>
                                                                            <a class="flex-prev" href="#">Anterior</a>
                                                                        </li>
                                                                        <li>
                                                                            <a class="flex-next" href="#">Siguiente</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                @elseif($blog->imagenes->count()>0)
                                                                <!--Muestro una Imagen-->
                                                                <div class="inner">
                                                                    <a href="index.html" title="{{$blog->titulo}}">
                                                                        <img width="1010" height="568" src="{{ asset('imagenes/blogs/'.$blog->imagen()->nombre) }}" class="attachment-full wp-post-image"></a>
                                                                </div>
                                                                @elseif($blog->linkvideo)
                                                                <!--Muestro Video-->
                                                                <div class="post_image_video">
                                                                    <div class="fluid-width-video-wrapper" style="padding-top: 68.4932%;">                                
                                                                        {{!! $blog->linkvideo !!}}
                                                                    </div>
                                                                </div>
                                                                @endif
                                                            </div>
                                                            <div class="post_text">
                                                                <div class="inner">
                                                                    <span class="info">
                                                                        <span class="left">Por: <b>{{$blog->user->name}}</b>. 
                                                                            <a href="/front_blogs?categoria={{$blog->categoria->slug}}" title="ver todos los artículos referidos a este tema">{{$blog->categoria->nombre}}</a>
                                                                        </span>
                                                                        <span class="right">
                                                                            <span id="{{$blog->slug}}" estado="cerrado" onclick="mostrar_botones('{{$blog->slug}}')" class="social_share_holder">
                                                                                <span class="social_share_icon">Compartir</span>
                                                                                <div id="social_share_dropdown_{{$blog->slug}}" class="social_share_dropdown">
                                                                                    <span class="inner_arrow_social"></span>
                                                                                    <ul style="width: 91px;">
                                                                                        <li>
                                                                                            <h5>Redes</h5>
                                                                                        </li>
                                                                                        <li class="facebook_share">
                                                                                            <a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + window.location.href+'front_blogs/{{$blog->slug}}', 'sharer', 'toolbar=0,status=0,width=620,height=280');">
                                                                                                <span class="social_image">
                                                                                                    <span class="social_image_inner"></span>
                                                                                                </span>
                                                                                                <span class="share_text">Like</span>
                                                                                            </a>
                                                                                        </li>                                                                                                                        
                                                                                        <li class="twitter_share">
                                                                                            <a href="#" onclick="popUp = window.open('http://twitter.com/share?url=' + window.location.href+'front_blogs/{{$blog->slug}}', 'popupwindow', 'scrollbars=yes,width=800,height=400');
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
                                                                    </span>
                                                                    <div class="sombra">  {!! $blog->contenido !!}</div>
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
                                            @include('sitio_publico.blogs.panel')
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
    lsjQuery("#nav-blog").addClass("active");
</script>
<script src="{{ asset('js/front/botones_redes.js') }}"></script>
@endsection