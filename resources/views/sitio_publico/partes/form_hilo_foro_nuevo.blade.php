<div id="panel" style="margin-left: -235px;" >
    <div id="panel-admin">
        <div class="comment_form_float"  style=" overflow: auto;">
            <div class="contact_form">
                <h4 class="comentario">¡Pregunta lo que quieras!</h4>
                <form id="nuevo-hilo" action="/front_foros" method="POST" autocomplete="off">
                    <input type="hidden" value="foro">    
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">  
                    <div class="panel-admin-box">
                        <select name="categoria_id" id="categoria_foro" style="display: none;">
                            <option value="">Categoría</option>
                            @foreach($categorias as $categoria)
                            <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                            @endforeach                          
                        </select>
                    </div>
                    <input style="color: #ffffff" type="text" id="nombre_foro" name="nombre" placeholder="Tú nombre *">
                    <input style="color: #ffffff" type="text" id="correo_foro" name="correo"  placeholder="Email *">
                    <input style="color: #ffffff" type="text" id="titulo_foro" name="titulo"   placeholder="Título *">
                    <textarea style="color: #ffffff" name="contenido" id="contenido_foro" rows="10" placeholder="Mensaje *" class="placeholder"></textarea>
                    <span class="submit_button" style="margin-left: 35px;">
                        <input class="button small" style="color: #ffffff; background-color: #3498db;" type="submit" value="Enviar">
                    </span>
                </form>
            </div>					
        </div>
    </div>
    <a class="open opened" href="#"></a>
</div>