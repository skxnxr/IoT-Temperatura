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
  <!-- Datatables -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.20/r-2.2.3/rr-1.2.6/datatables.min.css"/>
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
            <h1 class="m-0 text-dark">Historico de datos</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-md-12">
          <div class="card card-primary card-outline">

            <!-- /.card-header -->
            <div class="card-body p-1">

            <table id="data" class="display nowrap" style="width:100%">
            <thead>
                <tr>

                  <th>Fecha</th>
                  <th>Temperatura</th>
                  <th>Presión atmosférica</th>
                  <th>Tipo de sensor</th>
                </tr>
                </thead>
                <tbody>
                <?php
                   try {
                     //$sql = "SELECT DATE_FORMAT(fecha, '%d/%m/%Y %h:%i %p') as fecha, temperatura,presion FROM datos WHERE datos.id mod 10 = 0";
                     $sql = "SELECT * FROM datos WHERE datos.id mod 10 = 0 ORDER BY id DESC";
                     $resultado = $conn->query($sql);

                   } catch (Exception $e) {
                     $error = $e->getMessage();
                     echo $error;
                   }
                   while ($datos_sensor = $resultado->fetch_assoc()) { ?>
                     <tr>

                      <td>
                        <?php 
                        date_default_timezone_set('America/Caracas');
                         setlocale(LC_TIME, 'spanish');
                         echo utf8_encode(strftime("%A, %d de %B del %Y", strtotime($datos_sensor['fecha']))); 
                         echo " " . date('h:i A', strtotime($datos_sensor['fecha']));
                        ?>
                      </td>
                     
                      <td><?php echo $datos_sensor['temperatura'] . " °C" ; ?></td>
                      <td><?php echo round($datos_sensor['presion'], 1, PHP_ROUND_HALF_UP) . " hPa"; ?></td>
                      <td><?php echo "Exterior"; ?></td>
                     </tr>
                <?php   }  ?>  
                
                </tbody>
                <tfoot>
                <tr>

                  <th>Fecha</th>
                  <th>Temperatura</th>
                  <th>Presión atmosférica</th>
                  <th>Tipo de sensor</th>
                </tr>
                </tfoot>
            </table>

            </div>

          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    

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
<!-- Datatables -->
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.20/r-2.2.3/rr-1.2.6/datatables.min.js"></script>
<script src="dist/js/datatables-app.js"></script>


<!-- Función para actualizar  -->
<!-- <script type="text/javascript">
  function actualizar(){location.reload(true);}
  setInterval("actualizar()",180000);
</script> -->

<!-- PAGE SCRIPTS -->
<!-- <script src="dist/js/pages/dashboard2.js"></script> -->

</body>
</html>
