<div class="comment_form">
    <div class="contact_form">
        <h2 class="comentario">Déjanos un comentario:</h2>
        <form id="nuevo-comentario" action="/front_comentarios" method="POST" autocomplete="off">
            <input type="hidden" value="comentario">    
            <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
            @if($blog)
            <input type="hidden" name="blog_id" value="{{ $blog->id }}"> 
            @elseif($hilo_foro)
            <input type="hidden" name="hilo_foro_id" value="{{ $hilo_foro->id }}"> 
            @endif

            <div class="two_columns_50_50 clearfix">
                <div class="column1">
                    <div class="column_inner">
                        <input style="color: #ffffff" type="text" class="requiredField placeholder" name="nombre" id="nombre_comentario" value="" placeholder="Tú nombre *">
                    </div>
                </div>
                <div class="column1">
                    <div class="column_inner">
                        <input style="color: #ffffff" type="text" class="requiredField email placeholder" name="correo" id="correo_comentario" value="" placeholder="Email *">
                    </div>
                </div>
            </div>
            <textarea style="color: #ffffff" name="contenido" id="contenido_comentario" rows="10" placeholder="Mensaje" class="placeholder"></textarea>
            <span class="submit_button">
                <input class="button small" type="submit" value="Enviar">
            </span>
        </form>
    </div>
    <!-- #respond -->
</div>