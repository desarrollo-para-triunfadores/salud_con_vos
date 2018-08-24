<section id="section-lista-blogs" class="section-parallax">
    <div class="parallax_content ">
        <div style="margin-top:35px;margin-bottom:35px;" class="separator transparent"></div>
        <div class="column_inner">
            <div  class="widget widget_tag_cloud">											
                <div class="tagcloud">
                    <a href='/front_blogs' class='link-filtro' title='{{$blogs->count()}} entradas'>Todo</a>          
                    @foreach($categorias as $categoria)            
                    <a href='/front_blogs?categoria={{$categoria->id}}' class='link-filtro' title='{{$categoria->hilos_foros->count()}} entradas'>{{$categoria->nombre}}</a>          
                    @endforeach
                </div>
            </div>
        </div>	
        <!--Indicación sobre contenido-->
        <h5 class="margin-aclaracion">Mostrando el contenido de <b>{{$categoria_seleccionada}}</b>.</h5>        
        <!--Contenido-->
        <div class=" blog_holder_v3" style="position: relative; overflow: hidden; height: 1053px;">

            @if($blogs->count()>0)
            @foreach($blogs as $blog)     

            <article class="galllery " style="position: absolute; left: 0px; top: 0px;">
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
                        <a href="#" title="{{$blog->titulo}}">
                            <img width="1010" height="568" src="{{ asset('imagenes/blogs/'.$blog->imagen()->nombre) }}" class="attachment-full wp-post-image">
                        </a>
                        @elseif($blog->linkvideo)
                        <!--Muestro Video-->
                        <div class="post_image_video">
                            <div class="fluid-width-video-wrapper" style="padding-top: 68.4932%;">                                
                                {!! $blog->linkvideo !!}
                            </div>
                        </div>
                        @endif

                    </div>
                    <div class="post_text">
                        <span class="info">
                            <span class="left">{{$blog->created_at->diffForHumans() }} en: 
                                <a href="/front_blogs?categoria={{$blog->categoria->id}}" title="ver todos los artículos referidos a este tema">{{$blog->categoria->nombre}}</a>                                   
                            </span>
                        </span>
                        <h4>
                            <a href="/front_blogs/{{$blog->id}}" title="{{$blog->titulo}}">{{$blog->titulo}}</a>
                        </h4>
                        <p>{{$blog->sinopsis}}</p>
                    </div>
                </div>
                <div class="post_info">
                    <div class="inner">
                        <div class="left">
                            <a class="comments" href="#">{{$blog->comentarios_publicados()->count()}}</a>
                        </div>
                        <div class="right">
                            <span class="social_share_holder">
                                <span class="social_share_icon">Compartir</span>
                                <div class="social_share_dropdown">
                                    <span class="inner_arrow_social"></span>
                                    <ul>
                                        <li>
                                            <h5>Redes</h5>
                                        </li>
                                        <li class="facebook_share">
                                            <a href="#" onclick="window.open('https://www.facebook.com/sharer.php?s=100&amp;p%5Btitle%5D=Welcome+to+Cartoon+Land&amp;p%5Bsummary%5D=The+term+minimalism+is+also+used+to+describe+a+trend+in+design+and+architecture+where+in+the+subject+is+reduced+to+its+necessary+elements.&amp;p%5Burl%5D=http%3A%2F%2Fdemo.qodeinteractive.com%2Fsimplicity%2Fwelcome-to-cartoon-land%2F&amp;p%5Bimages%5D%5B0%5D=http%3A%2F%2Fdemo.qodeinteractive.com%2Fsimplicity%2Fwp-content%2Fuploads%2F2013%2F08%2F012.jpg&amp;', 'sharer', 'toolbar=0,status=0,width=620,height=280');">
                                                <span class="social_image">
                                                    <span class="social_image_inner"></span>
                                                </span>
                                                <span class="share_text">Like</span>
                                            </a>
                                        </li>
                                        <li class="twitter_share">
                                            <a href="#" onclick="popUp = window.open('http://twitter.com/share?url=http%3A%2F%2Fdemo.qodeinteractive.com%2Fsimplicity%2Fwelcome-to-cartoon-land%2F&amp;text=The+term+minimalism+is+also+used+to+describe+a+trend+in+design+&amp;count=horiztonal', 'popupwindow', 'scrollbars=yes,width=800,height=400');
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
                        </div>
                    </div>

                </div>
            </article>



            @endforeach
            <div style="margin-top:20px;margin-bottom:20px;" class="separator transparent"></div>
            {!! $blogs->render() !!}

            @else
            <h3>¡Ups!... no hay nada que mostrar.</h3>
            @endif


        </div>
        <div style="margin-top:35px;margin-bottom:35px;" class="separator transparent"></div>
    </div>
</section>