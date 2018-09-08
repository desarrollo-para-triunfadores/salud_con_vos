<div class="column_inner div-lindo">
    <aside>
        <div id="search-3" class="widget widget_search posts_holder">
            <h5>Buscar</h5>
            <form method="get" id="searchform" class="searchform" action="/front_foros">
               <input type="hidden" value="buscar">   
                <div>
                    <label class="screen-reader-text" for="s">Search for:</label>
                    <input type="text" value="" name="buscar" id="buscar" placeholder="Buscar">
                    <input type="submit" id="searchsubmit" value="Search">
                </div>
            </form>
        </div>
        <div id="recent-posts-5" class="widget widget_recent_entries posts_holder">
            <h5>Preguntas Recientes</h5>
            <ul>
                <!--Hilos Foros más recientes-->
                @foreach($hilos as $hilo)               
                <li>
                    <a href="/front_foros/{{$hilo->slug}}">{{$hilo->titulo}}</a>
                </li>               
                @endforeach
            </ul>
        </div>
        <div id="tag_cloud-4" class="widget widget_tag_cloud posts_holder">
            <h5>Temas</h5>
            <div class="tagcloud">
                <a href='/front_foros' class='tag-link-12' title='Todas las entradas' style='font-size: 13.25pt;'>Todos</a>          
                @foreach($categorias as $categoria)            
                <a href='/front_foros?categoria={{$categoria->slug}}' class='tag-link-12' title='{{$categoria->hilos_foros->count()}} entradas' style='font-size: 13.25pt;'>{{$categoria->nombre}}</a>          
                @endforeach
            </div>
        </div>
    </aside>
</div>
