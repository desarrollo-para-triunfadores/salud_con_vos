<footer>
    <!--Inicio Carrusel Logos-->
    <div class="carousel_slider_holder clearfix">
        <ul class="carousel_slider">
            <li>
                <a href="#">
                    <img src="{{ asset('plantillas/simplicity/assets/icons/carrusel-logo/3.png') }}" title="" alt="" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{ asset('plantillas/simplicity/assets/icons/carrusel-logo/2.png') }}" title="" alt="" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{ asset('plantillas/simplicity/assets/icons/carrusel-logo/3.png') }}" title="" alt="" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{ asset('plantillas/simplicity/assets/icons/carrusel-logo/2.png') }}" title="" alt="" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{ asset('plantillas/simplicity/assets/icons/carrusel-logo/3.png') }}" title="" alt="" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{ asset('plantillas/simplicity/assets/icons/carrusel-logo/2.png') }}" title="" alt="" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{ asset('plantillas/simplicity/assets/icons/carrusel-logo/3.png') }}" title="" alt="" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="{{ asset('plantillas/simplicity/assets/icons/carrusel-logo/2.png') }}" title="" alt="" />
                </a>
            </li>

        </ul>
    </div>
    <!--Fin Carrusel Logos-->
    <!--Inicio linea colores-->
    @include('sitio_publico.partes.tira_colores')
    <!--Fin linea colores-->
    <!--Inicio Información extra-->
    <div class="footer_top_holder">
        <div class="footer_top">
            <div class="container">
                <div class="container_inner">


                    <div class="two_columns_50_50 clearfix">
                        <div class="column1">
                            <div class="column_inner">



                                <div class="two_columns_50_50 clearfix">
                                    <div class="column1">
                                        <div class="column_inner">

                                            <div id="text-5" class="widget widget_text">
                                                <div class="textwidget">
                                                    <img class="alignnone size-full wp-image-1064 logo-pie" alt="footerlogo" src="{{ asset('plantillas/simplicity/assets/icons/logo-pie.png') }}" width="148" height="48"/>
                                                    <div style="margin-top:10px;margin-bottom:10px;" class="separator transparent"></div>                                     
                                                    <ul class='social_menu elegant'>
                                                        <li class='twitter'>
                                                            <a href='https://twitter.com/0800adolessalud?lang=es' target='_blank'>
                                                                <span>twitter</span>
                                                            </a>
                                                        </li>
                                                        <li class='facebook'>
                                                            <a href='https://www.facebook.com/saludadolescentemisiones/' target='_blank'>
                                                                <span>facebook</span>
                                                            </a>
                                                        </li>
                                                        <li class='youtube'>
                                                            <a href='https://www.youtube.com/watch?v=dP-Wcu9Ul64' target='_blank'>
                                                                <span>youtube</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div style="margin-top:5px;" class="transparent"></div>
                                                    <a href="admin/foros" target="_self" class="button small no_arrow" style="background-color: #23afc8; ">ingresar</a>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <div class="column2">
                                        <div class="column_inner">

                                            <div id="recent-posts-4" class="widget widget_recent_entries">
                                                <h5>Artículos Recientes</h5>
                                                <ul>
                                                    @foreach($blogs_nuevos as $blog)
                                                    <li>
                                                        <a href="/front_blogs/{{$blog->slug}}">{{$blog->titulo}}</a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div style="margin-top:5px;" class="transparent"></div>
                                <img class="alignnone size-full wp-image-1064 logo-pie" alt="footerlogo" src="{{ asset('plantillas/simplicity/assets/icons/logo-huella.png') }}"/>


                            </div>
                        </div>
                        <div class="column2">
                            <div class="column_inner">


                                <div class="two_columns_50_50 clearfix">
                                    <div class="column1">
                                        <div class="column_inner">


                                            <div id="tag_cloud-3" class="widget widget_tag_cloud">
                                                <h5>Temas</h5>
                                                <div class="tagcloud">
                                                    <a href='/front_blogs' class='tag-link-12' title='Todas las entradas' style='font-size: 13.25pt;'>Todos</a>  
                                                    @foreach($categorias as $categoria)
                                                    <a href='/front_blogs?categoria={{$categoria->id}}' class='tag-link-12' title='{{$categoria->blogs->count()}} entradas' style='font-size: 13.25pt;'>{{$categoria->nombre}}</a>
                                                    @endforeach
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="column2">
                                        <div class="column_inner">


                                            <div id="text-9" class="widget widget_text">



                                                <div class="textwidget">

                                                    <h5>Responsable</h5>
                                                    <div class="list circle animate_list">    
                                                        <ul>
                                                            <li style="opacity: 1; top: 0px;">Lic. Viviana Garro.</li>         
                                                        </ul>
                                                    </div>
                                                    <h5>Equipo técnico</h5>  

                                                    <div class="list circle animate_list">    
                                                        <ul>
                                                            <li style="opacity: 1; top: 0px;">Lic. Mariela Gallardo.</li> 
                                                            <li style="opacity: 1; top: 0px;">Lic. Priscila Bezus.</li>
                                                            <li style="opacity: 1; top: 0px;">Ivana Barraza.</li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </div>
    <!--Fin información extra-->
    <!--Inicio Neasoft-->
    <div class="footer_bottom_holder">
        <div class="footer_bottom">
            <div class="textwidget">
                <p class="fuente-neasoft">Hecho con <i class="fa fa-heart" aria-hidden="true"></i> por
                    <b>NeaSoft</b> - Año 2018</p>
            </div>
        </div>
    </div>
    <!--Fin Neasoft-->
</footer>