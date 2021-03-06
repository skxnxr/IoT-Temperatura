  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Internet Of Things</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex justify-content-center ">
        <!-- <div class="image">
          <img src="dist/img/user8-128x128.jpg" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <div class="info">
          <a href="#" >Navegación</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" id="grafico" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Gráficos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php" id="tab-index" class="nav-link" >
                  <i class="far fa-circle text-info"></i>
                  <p>En vivo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="ayer.php" id="tab-ayer" class="nav-link ">
                  <i class="far fa-circle text-info"></i>
                  <p>Ayer vs Hoy</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="rango.php" id="tab-rango" class="nav-link">
                  <i class="far fa-circle text-info"></i>
                  <p>Rango ajustable</p>
                </a> 
              </li> -->
            </ul>
          </li>
          <li class="nav-item">
            <a href="historico.php" id="tab-historico" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tabla de datos
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item" >
            <a href="como_funciona.php" id="tab-como_funciona" class="nav-link">
              <i class="nav-icon far fa-question-circle"></i>
              <p>
                ¿Cómo funciona?
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          </li>
          <li class="nav-item">
            <a href="nuevo_modulo.php" id="tab-nuevo_modulo" class="nav-link">
              <i class="nav-icon fas fa-plus-circle"></i>
              <p>
                Registrar nuevo módulo
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>

          <li class="nav-item" >
            <a href="contacto.php" id="tab-contacto" class="nav-link">
              <i class="nav-icon fas fa-info-circle"></i>
              <p>
                Contacto
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>