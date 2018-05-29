<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="header" align="center">Menú principal</li>
            
            <!-- Inicio Gestión de Usuarios -->
            <li  id="side-usuarios-li"  class="treeview">
                <a href="#">
                    <i class="fa fa-group" aria-hidden="true"></i>
                    <span>Gestión de usuarios</span>
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul id="side-usuarios-ul" class="treeview-menu">                       
                    <li id="side-ele-usuarios">
                        <a href="/admin/usuarios">
                            <i class="fa fa-user-circle"></i> Usuarios
                        </a>
                    </li>                                           
                </ul>
            </li>
            <!-- Fin gestión de Usuarios -->
        <!-- Inicio Gestión de Foros -->      
            <li  id="side-categoriasHilos-li"  class="treeview"> <a href="#">
                    <i class="fa fa-group" aria-hidden="true"></i>
                    <span>Foros</span>
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul id="side-categoriasHilos-ul" class="treeview-menu">                       
                    <li id="side-ele-categoriasHilos">
                        <a href="/admin/categoriasHilos">
                            <i class="fa fa-user-circle"></i> Categorías de Hilos
                        </a>
                    </li> 
                    <li id="side-categoriasHilos-li" class="treeview-menu">                       
                    <li id="side-ele-categoriasHilos">
                        <a href="/admin/categoriasHilos">
                            <i class="fa fa-user-circle"></i> Hilos
                        </a>
                    </li> 
            </li>
        </ul>
        <!-- Fin Gestión de Foros -->      
    </section>
</aside>


<script type="text/javascript">
      function backup() {
        var enlace_factura = 'http://localhost/NUBE/backupGN/hacer_backup_NUBE.php';
        window.open(enlace_factura);
    }
</script>