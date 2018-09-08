<div class="column_inner">
    <div class="blog_holder_v2">        
        <!--Indicación sobre contenido-->
        <h5 class="margin-aclaracion">Mostrando el contenido de <b>{{$categoria_seleccionada}}</b>.</h5>        
        <!--Contenido-->

        @if($hilos_foros->count()>0)
        @foreach($hilos_foros as $hilo_foro)               
        <article class="quote element_fade_in show_item div-lindo">
            <div class="post_info">
                <div class="inner">
                    <div class="post_date">
                        <span class="date">{{$hilo_foro->created_at->format('d')}}</span>
                        <span class="month">{{$hilo_foro->created_at->format('m/Y')}}</span>
                    </div>
                    <div class="blog_like">
                        <a href="#" class="qode-like" id="qode-like-367" title="Comentarios">
                            <span class="qode-like-count">{{$hilo_foro->comentarios_publicados()->count()}}</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="post_content_holder">
                <div class="post_content_quote">
                    <div class="post_text">
                        <span class="info">
                            <span class="left">Por: <b>{{$hilo_foro->nombre}}</b>.
                                <a href="/front_foros?categoria={{$hilo_foro->categoria->slug}}" title="ver todas las preguntas referidas a este tema">{{$hilo_foro->categoria->nombre}}</a>
                            </span>
                        </span>
                        <h4>
                            <a href="/front_foros/{{$hilo_foro->slug}}">{{$hilo_foro->titulo}}</a>
                        </h4>                      
                    </div>
                </div>
            </div>
        </article>
        @endforeach
        <div style="margin-top:20px;margin-bottom:20px;" class="separator transparent"></div>
        {!! $hilos_foros->render() !!}
        @else
        <h3>¡Ups!... no hay nada que mostrar.</h3>
        @endif


    </div>
</div>
