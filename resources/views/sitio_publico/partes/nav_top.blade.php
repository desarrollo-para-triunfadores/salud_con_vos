<!--Inicio linea colores-->
@include('sitio_publico.partes.tira_colores')
<!--Fin linea colores-->

<header class="animated fadeIn">
    <div id="navbar" class="container">
        <div class="container_inner">
            <div class="header_inner clearfix">
                <div class="logo">
                    <a href="../index.html">
                        <img class="normal" src="{{ asset('plantillas/simplicity/wp-content/themes/simplicity/img/logo_black.png') }}" alt="Logo" />
                        <img class="sticky" src="{{ asset('plantillas/simplicity/wp-content/themes/simplicity/img/logo_black.png') }}" alt="Logo" />
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
                                <a href="front_foros">
                                    <span>Tu voz cuenta</span>
                                </a>
                            </li>
                            <li id="nav-contacto" class="menu-item menu-item-type-custom menu-item-object-custom  has_sub">
                                <a href="/contacto">
                                    <span>¿Donde recibir atención?</span>
                                </a>
                            </li>
                            <li id="nav-blog" class="menu-item menu-item-type-custom menu-item-object-custom  has_sub">
                                <a href="front_blogs">
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
                        <span>&nbsp;</span>
                    </div>



                </div>

                <nav class="mobile_menu">
                    <ul id="menu-main-menu-1" >
                        <li id="mobile_menu_item-1223" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor  has_sub">
                            <a href="../index.html" class=" current ">
                                <span>Home</span>
                                <span class="mobile_arrow"></span>
                            </a>
                            <ul class="sub_menu">
                                <li id="mobile_menu_item-1015" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                    <a href="../home-page-standard/index.html" >
                                        <span>Homepage Small Slider</span>
                                        <span class="mobile_arrow"></span>
                                    </a>
                                </li>
                                <li id="mobile_menu_item-1014" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                    <a href="../index.html" >
                                        <span>Homepage Fullwidth Slider</span>
                                        <span class="mobile_arrow"></span>
                                    </a>
                                </li>
                                <li id="mobile_menu_item-1124" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                    <a href="../home-page-simple/index.html" >
                                        <span>Hp. Simple Small Slider</span>
                                        <span class="mobile_arrow"></span>
                                    </a>
                                </li>
                                <li id="mobile_menu_item-1129" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-1125 current_page_item ">
                                    <a href="index.html" >
                                        <span>Hp. Simple Fulwidth Slider</span>
                                        <span class="mobile_arrow"></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li id="mobile_menu_item-97" class="menu-item menu-item-type-custom menu-item-object-custom  has_sub">
                            <a href="#" >
                                <span>Portfolio</span>
                                <span class="mobile_arrow"></span>
                            </a>
                            <ul class="sub_menu">
                                <li id="mobile_menu_item-125" class="menu-item menu-item-type-custom menu-item-object-custom  has_sub">
                                    <a href="#" >
                                        <span>Portfolio Rectangle List</span>
                                        <span class="mobile_arrow"></span>
                                    </a>
                                    <ul class="sub_menu">
                                        <li id="mobile_menu_item-124" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../test/index.html" >
                                                <span>One Column</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-123" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../portfolio-rectangle-list-two-columns/index.html" >
                                                <span>Two Columns</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-122" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../portfolio-rectangle-list-three-columns/index.html" >
                                                <span>Three Columns</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-121" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../portfolio-rectangle-list-four-columns/index.html" >
                                                <span>Four Columns</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="mobile_menu_item-136" class="menu-item menu-item-type-custom menu-item-object-custom  has_sub">
                                    <a href="#" >
                                        <span>Portfolio Boxed List</span>
                                        <span class="mobile_arrow"></span>
                                    </a>
                                    <ul class="sub_menu">
                                        <li id="mobile_menu_item-140" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../portfolio-boxed-rectangle-list-one-column/index.html" >
                                                <span>One Column</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-139" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../portfolio-boxed-rectangle-list-two-columns/index.html" >
                                                <span>Two Columns</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-138" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../portfolio-boxed-rectangle-list-three-columns/index.html" >
                                                <span>Three Columns</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-137" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../portfolio-boxed-rectangle-list-four-columns/index.html" >
                                                <span>Four Columns</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="mobile_menu_item-98" class="menu-item menu-item-type-custom menu-item-object-custom  has_sub">
                                    <a href="#" >
                                        <span>Portfolio Circle List</span>
                                        <span class="mobile_arrow"></span>
                                    </a>
                                    <ul class="sub_menu">
                                        <li id="mobile_menu_item-96" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../portfolio-circle-list-one-column/index.html" >
                                                <span>One Column</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-107" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../portfolio-circle-list-two-column/index.html" >
                                                <span>Two Columns</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-106" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../portfolio-circle-list-three-column/index.html" >
                                                <span>Three Columns</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-105" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../portfolio-circle-list-four-column/index.html" >
                                                <span>Four Columns</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="mobile_menu_item-150" class="menu-item menu-item-type-custom menu-item-object-custom  has_sub">
                                    <a href="#" >
                                        <span>Portfolio Octagon List</span>
                                        <span class="mobile_arrow"></span>
                                    </a>
                                    <ul class="sub_menu">
                                        <li id="mobile_menu_item-154" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../portfolio-octagon-list-one-column/index.html" >
                                                <span>One Column</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-153" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../portfolio-octagon-list-two-columns/index.html" >
                                                <span>Two Columns</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-152" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../portfolio-octagon-list-three-columns/index.html" >
                                                <span>Three Columns</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-151" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../portfolio-octagon-list-four-columns/index.html" >
                                                <span>Four Columns</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="mobile_menu_item-155" class="menu-item menu-item-type-custom menu-item-object-custom  has_sub">
                                    <a href="#" >
                                        <span>Single Project</span>
                                        <span class="mobile_arrow"></span>
                                    </a>
                                    <ul class="sub_menu">
                                        <li id="mobile_menu_item-156" class="menu-item menu-item-type-post_type menu-item-object-portfolio_page ">
                                            <a href="../portfolio_page/geometric-styles-2/index.html" >
                                                <span>Big Slider Project</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-157" class="menu-item menu-item-type-post_type menu-item-object-portfolio_page ">
                                            <a href="../portfolio_page/iceland-sunshine/index.html" >
                                                <span>Fullwidth Project</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-158" class="menu-item menu-item-type-post_type menu-item-object-portfolio_page ">
                                            <a href="../portfolio_page/geometric-styles/index.html" >
                                                <span>Small Slider Project</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-159" class="menu-item menu-item-type-post_type menu-item-object-portfolio_page ">
                                            <a href="../portfolio_page/iceland-timescape/index.html" >
                                                <span>Vertical Project</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-160" class="menu-item menu-item-type-post_type menu-item-object-portfolio_page ">
                                            <a href="../portfolio_page/linegraph-symbols/index.html" >
                                                <span>Gallery</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-161" class="menu-item menu-item-type-post_type menu-item-object-portfolio_page ">
                                            <a href="../portfolio_page/video-showroom/index.html" >
                                                <span>Video Project</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li id="mobile_menu_item-405" class="menu-item menu-item-type-custom menu-item-object-custom  has_sub">
                            <a href="#" >
                                <span>Pages</span>
                                <span class="mobile_arrow"></span>
                            </a>
                            <ul class="sub_menu">
                                <li id="mobile_menu_item-383" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                    <a href="../about-us/index.html" >
                                        <span>About Us With Header</span>
                                        <span class="mobile_arrow"></span>
                                    </a>
                                </li>
                                <li id="mobile_menu_item-384" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                    <a href="../about-us-with-slider/index.html" >
                                        <span>About Us With Slider</span>
                                        <span class="mobile_arrow"></span>
                                    </a>
                                </li>
                                <li id="mobile_menu_item-455" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                    <a href="../contact-us-example-one/index.html" >
                                        <span>Contact Us Example One</span>
                                        <span class="mobile_arrow"></span>
                                    </a>
                                </li>
                                <li id="mobile_menu_item-404" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                    <a href="../contact-us-example-two/index.html" >
                                        <span>Contact Us Example Two</span>
                                        <span class="mobile_arrow"></span>
                                    </a>
                                </li>
                                <li id="mobile_menu_item-826" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                    <a href="../our-team/index.html" >
                                        <span>Our Team</span>
                                        <span class="mobile_arrow"></span>
                                    </a>
                                </li>
                                <li id="mobile_menu_item-1173" class="menu-item menu-item-type-custom menu-item-object-custom  has_sub">
                                    <a href="#" >
                                        <span>Sample Page</span>
                                        <span class="mobile_arrow"></span>
                                    </a>
                                    <ul class="sub_menu">
                                        <li id="mobile_menu_item-1149" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../sample-page-normal/index.html" >
                                                <span>No Sidebar</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-1147" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../sample-page-right-sidebar/index.html" >
                                                <span>Right Sidebar</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-1148" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../sample-page-left-sidebar/index.html" >
                                                <span>Left Sidebar</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="mobile_menu_item-1174" class="menu-item menu-item-type-custom menu-item-object-custom  has_sub">
                                    <a href="#" >
                                        <span>Page With Header</span>
                                        <span class="mobile_arrow"></span>
                                    </a>
                                    <ul class="sub_menu">
                                        <li id="mobile_menu_item-1163" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../sample-page-with-header/index.html" >
                                                <span>Colorfull Example</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-1162" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../sample-page-with-fixed-header/index.html" >
                                                <span>Fixed Image Example</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-1172" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../sample-page-with-transparent-header/index.html" >
                                                <span>Transparent Example</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li id="mobile_menu_item-392" class="menu-item menu-item-type-custom menu-item-object-custom  has_sub">
                            <a href="#" >
                                <span>Blog</span>
                                <span class="mobile_arrow"></span>
                            </a>
                            <ul class="sub_menu">
                                <li id="mobile_menu_item-394" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                    <a href="../blog-masonary/index.html" >
                                        <span>Blog Masonry</span>
                                        <span class="mobile_arrow"></span>
                                    </a>
                                </li>
                                <li id="mobile_menu_item-393" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                    <a href="../blog-large-image/index.html" >
                                        <span>Blog Large Image</span>
                                        <span class="mobile_arrow"></span>
                                    </a>
                                </li>
                                <li id="mobile_menu_item-992" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                    <a href="../blog-large-image-sidebar/index.html" >
                                        <span>Blog With Sidebar</span>
                                        <span class="mobile_arrow"></span>
                                    </a>
                                </li>
                                <li id="mobile_menu_item-995" class="menu-item menu-item-type-custom menu-item-object-custom  has_sub">
                                    <a href="#" >
                                        <span>Single Post</span>
                                        <span class="mobile_arrow"></span>
                                    </a>
                                    <ul class="sub_menu">
                                        <li id="mobile_menu_item-996" class="menu-item menu-item-type-post_type menu-item-object-post ">
                                            <a href="../welcome-to-cartoon-land/index.html" >
                                                <span>Gallery Post</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-997" class="menu-item menu-item-type-post_type menu-item-object-post ">
                                            <a href="../animation-is-future/index.html" >
                                                <span>Standard Post</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-998" class="menu-item menu-item-type-post_type menu-item-object-post ">
                                            <a href="../video-showcase/index.html" >
                                                <span>Video Post</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-999" class="menu-item menu-item-type-post_type menu-item-object-post ">
                                            <a href="../check-it-out/index.html" >
                                                <span>Link Post</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-1000" class="menu-item menu-item-type-post_type menu-item-object-post ">
                                            <a href="../what-we-do/index.html" >
                                                <span>Blockqoute Post</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-1001" class="menu-item menu-item-type-post_type menu-item-object-post ">
                                            <a href="../modern-heroes/index.html" >
                                                <span>Audio Post</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-1002" class="menu-item menu-item-type-post_type menu-item-object-post ">
                                            <a href="../my-life-is-music/index.html" >
                                                <span>Post With Sidebar</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li id="mobile_menu_item-423" class="menu-item menu-item-type-custom menu-item-object-custom  has_sub">
                            <a href="#" >
                                <span>Features</span>
                                <span class="mobile_arrow"></span>
                            </a>
                            <ul class="sub_menu">
                                <li id="mobile_menu_item-1198" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                    <a href="../take-a-tour/index.html" >
                                        <span>Main Features Tour</span>
                                        <span class="mobile_arrow"></span>
                                    </a>
                                </li>
                                <li id="mobile_menu_item-466" class="menu-item menu-item-type-custom menu-item-object-custom  has_sub">
                                    <a href="#" >
                                        <span>Infographics</span>
                                        <span class="mobile_arrow"></span>
                                    </a>
                                    <ul class="sub_menu">
                                        <li id="mobile_menu_item-467" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../pies/index.html" >
                                                <span>Pies</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-468" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../progress-bars/index.html" >
                                                <span>Progress Bars</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-897" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../vertical-progress-bars/index.html" >
                                                <span>Vertical Progress Bars</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-859" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../infographic-icon-progress-bars/index.html" >
                                                <span>Icon Progress Bars</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-672" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../infographics-interactive-random-counters/index.html" >
                                                <span>Random Counters</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-673" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../counters/index.html" >
                                                <span>Zero Counters</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="mobile_menu_item-574" class="menu-item menu-item-type-custom menu-item-object-custom  has_sub">
                                    <a href="#" >
                                        <span>Interactive Elements</span>
                                        <span class="mobile_arrow"></span>
                                    </a>
                                    <ul class="sub_menu">
                                        <li id="mobile_menu_item-1184" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../parallax-example/index.html" >
                                                <span>Parallax Shortcode</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-1091" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../interactive-elements-2/index.html" >
                                                <span>Interactive Elements</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-800" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../service/index.html" >
                                                <span>Services</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-1208" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../lists/index.html" >
                                                <span>Interactive Lists</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="mobile_menu_item-1200" class="menu-item menu-item-type-custom menu-item-object-custom  has_sub">
                                    <a href="#" >
                                        <span>Icons</span>
                                        <span class="mobile_arrow"></span>
                                    </a>
                                    <ul class="sub_menu">
                                        <li id="mobile_menu_item-1207" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../infographic-icon-progress-bars/index.html" >
                                                <span>Icon Progress Bars</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-709" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../icons/index.html" >
                                                <span>Standard Icons</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-714" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../qode-social-icons/index.html" >
                                                <span>Social Icons</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-1092" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../icons-in-boxes/index.html" >
                                                <span>Icons In Boxes</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="mobile_menu_item-509" class="menu-item menu-item-type-custom menu-item-object-custom  has_sub">
                                    <a href="#" >
                                        <span>Elements</span>
                                        <span class="mobile_arrow"></span>
                                    </a>
                                    <ul class="sub_menu">
                                        <li id="mobile_menu_item-737" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../various-buttons-types/index.html" >
                                                <span>Buttons</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-572" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../lists/index.html" >
                                                <span>Lists</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-780" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../pricing-tables/index.html" >
                                                <span>Pricing Tables</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-517" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../accordions/index.html" >
                                                <span>Accordions</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-524" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../tabs/index.html" >
                                                <span>Tabs</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-529" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../testimonials/index.html" >
                                                <span>Testimonials</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-763" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../action-and-message/index.html" >
                                                <span>Actions and Messages</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="mobile_menu_item-1185" class="menu-item menu-item-type-custom menu-item-object-custom  has_sub">
                                    <a href="#" >
                                        <span>Sliders</span>
                                        <span class="mobile_arrow"></span>
                                    </a>
                                    <ul class="sub_menu">
                                        <li id="mobile_menu_item-1192" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../small-slider/index.html" >
                                                <span>Small Slider</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-1193" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../creative-slider/index.html" >
                                                <span>Creative Slider</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-1194" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../slider-fullwidth-example/index.html" >
                                                <span>Slider Fullwidth</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-1218" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../about-us-slider-example/index.html" >
                                                <span>About Us Slider</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="mobile_menu_item-1199" class="menu-item menu-item-type-custom menu-item-object-custom  has_sub">
                                    <a href="#" >
                                        <span>Typography</span>
                                        <span class="mobile_arrow"></span>
                                    </a>
                                    <ul class="sub_menu">
                                        <li id="mobile_menu_item-685" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../various-column-layouts/index.html" >
                                                <span>Columns</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-593" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../blockqoutes/index.html" >
                                                <span>Blockqoutes</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-601" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../dropcaps/index.html" >
                                                <span>Dropcaps</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                        <li id="mobile_menu_item-607" class="menu-item menu-item-type-post_type menu-item-object-page ">
                                            <a href="../highlights/index.html" >
                                                <span>Highlights</span>
                                                <span class="mobile_arrow"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>


</header>