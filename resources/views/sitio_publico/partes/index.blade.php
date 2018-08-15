<!DOCTYPE html>

<html>
    <head>        
         @include('sitio_publico.partes.estilos')
        @yield('estilos')
    </head>
    <body class="smooth_scroll">
      



        	<div class="wrapper">

            <!-- Inicio Mensaje Foro-->
            @include('sitio_publico.partes.form_hilo_foro_nuevo')         
            <!-- Fin Mensaje Foro -->

            <!-- Inicio Navbar-->
            @include('sitio_publico.partes.nav_top')         
            <!-- Fin Navbar -->

            <!-- Inicio back_to_top-->
            @include('sitio_publico.partes.back_to_top')         
            <!-- Fin back_to_top -->

            <!--Inicio Page Content -->
            @yield('content')
            <!--Fin Page Content -->

            <!-- Inicio botones_redes-->
            @include('sitio_publico.partes.botones_redes')         
            <!-- Fin botones_redes -->

            <!-- Inicio  Pie de Página -->
            @include('sitio_publico.partes.pie')
            <!-- Fin Pie de Página -->
        </div>
        @include('sitio_publico.partes.scripts')
        @yield('script')
    </body>
</html>