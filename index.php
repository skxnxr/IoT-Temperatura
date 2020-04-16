<?php
include_once 'conexion.php';
  date_default_timezone_set('America/Caracas');
  $fecha2 = date('Y-m-d');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>IOT Temperatura</title>
  
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" hrefimg="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" hrefimg="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" hrefimg="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" hrefimg="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" hrefimg="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  hreimgf="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Morris,js -->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-not-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Inicio</a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">s
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

   
  </nav>
  <!-- /.navbar -->

<?php
include_once 'sidebar.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Datos en tiempo real,
                <?php
                  $sql = "SET lc_time_names = 'es_ES'";
                  $conn->query($sql);

                  $sql = "SELECT DATE_FORMAT(`fecha`,'%d de %M') AS fecha from `datos` order by id DESC limit 1";

                  $resultado = $conn->query($sql) or die($conn->error);
                  $temp = $resultado->fetch_assoc();
                  echo $temp['fecha'];
                ?> 
             </h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-temperature-low"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Temp. Min</span>
                <span class="info-box-number">
                    <?php
                    //date_default_timezone_set('America/Caracas');
                    //$fecha2 = date('Y-m-d');
                   
                      // $sql = "SELECT `temperatura` from `datos` order by `temperatura` ASC limit 1";
                      //$sql ="SELECT DATE_FORMAT(`fecha`,'%Y-%m-%d %H:%i') AS fecha, `temperatura` FROM `datos` WHERE `fecha` >= NOW() - INTERVAL 24 HOUR ORDER BY `temperatura` ASC limit 1";
                      //$sql ="SELECT `temperatura` FROM `datos` WHERE LEFT(fecha, 10) = LEFT(now(),10) ORDER BY `temperatura` ASC limit 1";
                      //$sql = "SELECT DATE_FORMAT(`fecha`,'%Y-%m-%d %H:%i') AS fecha, `temperatura` FROM `datos` WHERE `fecha` >= NOW() - INTERVAL 28 HOUR ORDER BY `temperatura` ASC limit 1";
                      //$sql = "SELECT DATE_FORMAT(`fecha`,'%Y-%m-%d') AS fecha, `temperatura` FROM `datos` WHERE `fecha` = '" . $fecha2 ."'  ORDER BY `temperatura` ASC limit 1";
                      $sql = "SELECT `temperatura` FROM `datos` WHERE DATE(`fecha`) = '" . $fecha2 ."' ORDER BY `temperatura` ASC limit 1";

                      $resultado = $conn->query($sql);
                      $temp = $resultado->fetch_assoc();
                      echo $temp['temperatura'];
                    
                    ?>
                  <small>°C</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-temperature-high"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Temp. Máx</span>
                <span class="info-box-number">
                  <?php
                   //echo $fecha2;
                    //$sql = "SELECT`temperatura` from `datos` order by `temperatura` DESC limit 1";
                    //$sql ="SELECT DATE_FORMAT(`fecha`,'%Y-%m-%d %H:%i') AS fecha, `temperatura` FROM `datos` WHERE `fecha` >= NOW() - INTERVAL 24 HOUR ORDER BY `temperatura` DESC limit 1";
                    //$sql ="SELECT `temperatura` FROM `datos` WHERE LEFT(fecha, 10) = LEFT(now(),10) ORDER BY `temperatura` DESC limit 1";
                    //$sql = "SELECT DATE_FORMAT(`fecha`,'%Y-%m-%d %H:%i') AS fecha, `temperatura` FROM `datos` WHERE `fecha` >= NOW() - INTERVAL 28 HOUR ORDER BY `temperatura` DESC limit 1";
                    $sql = "SELECT `temperatura` FROM `datos` WHERE DATE(`fecha`) = '" . $fecha2 ."' ORDER BY `temperatura` DESC limit 1";

                    $resultado = $conn->query($sql);
                    $temp = $resultado->fetch_assoc();
                    echo $temp['temperatura'];
                    
                  ?>
                <small>°C</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-globe-americas"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Ubicación</span>
                <span class="info-box-number">Guatire</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-thermometer-half"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Temp. Actual</span>
                <span class="info-box-number">
                  <?php
                  $sql = "SELECT `temperatura` from `datos` order by id DESC limit 1";

                  $resultado = $conn->query($sql);
                  $temp = $resultado->fetch_assoc();
                  echo $temp['temperatura'];
                  
                  ?>
                  <small>°C</small>
              </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        

      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <!-- <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Online Store Visitors</h3>
                  <a href="javascript:void(0);">View Report</a>
                </div>
              </div> -->
              <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <span class="text-bold text-lg">Temperatura ambiente</span>
                    <span>En la sombra:</span>
                  </p>
                  <p class="ml-auto d-flex flex-column text-right">
                    <span class="text-success">
                      <i class="fas fa-arrow-up"></i> 12.5%
                    </span>
                    <span class="text-muted">Más caluroso desde la semana pasada</span>
                  </p>
                </div>
                <!-- /.d-flex -->

                <div  id="line-chart" style="height: 250px;">
                  
                </div>

                <!-- <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> This Week
                  </span>

                  <span>
                    <i class="fas fa-square text-gray"></i> Last Week
                  </span>
                </div> -->
              </div>
            </div>
            <!-- /.card -->


          </div>
          <!-- /.col-md-6 -->

        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <!-- <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.2
    </div>
  </footer> -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<!-- <script src="plugins/jquery/jquery.min.js"></script> -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script> 
<!-- ChartJS -->
<!-- <script src="plugins/chart.js/Chart.min.js"></script> -->

<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script src="dist/js/morris-app.js"></script>
<!-- <script src="dist/js/app.js"></script> -->

<!-- Función para actualizar  -->
<script type="text/javascript">
  function actualizar(){location.reload(true);}
  setInterval("actualizar()",180000);
</script>

<!-- PAGE SCRIPTS -->
<!-- <script src="dist/js/pages/dashboard2.js"></script> -->

</body>
</html>
