<header class=" bg-black-active main-header">
    <a href="/" class="logo">
        <span class="logo-mini">SC<b>V</b></span>
        <span class="logo-lg">Salud Con <b>Vos</b></span>
    </a>
    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Mensajes -->
            
              <!-- Notificationes -->
             
                     
              <!-- Menu usuario -->
              @include('admin.partes.navtop.menu_usuario')
              <!-- Configuración interfaz -->
              <li>                    
                  <a title="Acceder al panel de configuración del sistema" href="/admin/configuracion"><i class="fa fa-gears"></i></a>
              </li>                  
            </ul>
          </div>
    </nav>
</header>

@include('admin.usuarios.formulario.act-pass')


