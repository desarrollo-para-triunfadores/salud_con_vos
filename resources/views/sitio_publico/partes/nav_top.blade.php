<!--Inicio linea colores-->
@include('sitio_publico.partes.tira_colores')
<!--Fin linea colores-->

<header class="animated fadeIn">
    <div id="navbar" class="container">
        <div class="container_inner">
            <div class="header_inner clearfix">
                <div class="logo">
                    <a href="/">
                        <img class="normal" src="{{ asset('plantillas/simplicity/assets/icons/logo.gif') }}" alt="Logo" />
                        <img class="sticky" src="{{ asset('plantillas/simplicity/assets/icons/logo.gif') }}" alt="Logo" />
                    </a>
                </div>
                <div class="header_inner_right">

                    <nav class="main_menu drop_down">
                        <ul id="menu-main-menu" >

                            <li id="nav-inicio" class="menu-item menu-item-type-custom menu-item-object-custom  has_sub">
                                <a href="/">
                                    <span>Inicio</span>
                                </a>
                            </li>
                            <li id="nav-foro" class="menu-item menu-item-type-custom menu-item-object-custom  has_sub">  
                                <a href="/front_foros">
                                    <span>Tu voz cuenta</span>
                                </a>
                            </li>
                            <li id="nav-contacto" class="menu-item menu-item-type-custom menu-item-object-custom  has_sub">
                                <a href="/contacto">
                                    <span>¿Donde recibir atención?</span>
                                </a>
                            </li>
                            <li id="nav-blog" class="menu-item menu-item-type-custom menu-item-object-custom  has_sub">
                                <a href="/front_blogs">
                                    <span>Blog</span>
                                </a>
                            </li>
                            <li id="nav-quienes-somos" class="menu-item menu-item-type-custom menu-item-object-custom  has_sub">
                                <a href="/quienes_somos">
                                    <span>¿Quiénes somos?</span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                    <div class='mobile_menu_button'>
                        <span>&nbsp;menú</span>
                    </div>



                </div>

                <nav class="mobile_menu">
                    <ul id="menu-main-menu-1" >
                      
                      
                        
                        
                        
                          <li id="nav-inicio" class="menu-item menu-item-type-custom menu-item-object-custom  has_sub">
                                <a href="/">
                                    <span>Inicio</span>
                                </a>
                            </li>
                            <li id="nav-foro" class="menu-item menu-item-type-custom menu-item-object-custom  has_sub">  
                                <a href="/front_foros">
                                    <span>Tu voz cuenta</span>
                                </a>
                            </li>
                            <li id="nav-contacto" class="menu-item menu-item-type-custom menu-item-object-custom  has_sub">
                                <a href="/contacto">
                                    <span>¿Donde recibir atención?</span>
                                </a>
                            </li>
                            <li id="nav-blog" class="menu-item menu-item-type-custom menu-item-object-custom  has_sub">
                                <a href="/front_blogs">
                                    <span>Blog</span>
                                </a>
                            </li>
                            <li id="nav-quienes-somos" class="menu-item menu-item-type-custom menu-item-object-custom  has_sub">
                                <a href="/quienes_somos">
                                    <span>¿Quiénes somos?</span>
                                </a>
                            </li>
                        
                        
                    </ul>
                </nav>
            </div>

        </div>
    </div>


</header>