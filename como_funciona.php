<?php
include_once 'conexion.php';
  date_default_timezone_set('America/Caracas');
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
  <!-- Propio -->
  <link rel="stylesheet" href="dist/css/style.css">
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
          <div class="col-12">
            <h1 class="m-0 text-dark">¿Cómo se miden y se muestran los datos?</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <h4>Acá te lo explicamos de forma sencilla:</h4>
            <!-- <h4>Acá te lo explicamos de forma sencilla:<small>card-tabs / card-outline-tabs</small></h4> -->
          </div>
        </div>
        <!-- ./row -->
        <div class="row">
        <div class="col-12 col-lg-7">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">En tres simples pasos</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <p>Este proyecto sigue el paradigma internet de las cosas, que en resumen es conectar cualquier dispositivo a internet, ya sea para controlarlo u obtener información.</p>
                <dl>
                  <dt>Paso 1:</dt>
                  <dd>Adquirir el Hardware (un microcontrolador y un sensor) los cuales se encuentran detallados en la tarjeta de la derecha.</dd>
                  <dt>Paso 2:</dt>
                  <dd>Cargar el sketch arduino, modificando los parametros (nombre/contraseña de tu router WiFi y asignandole un nombre a tu dispositivo en el campo "serie").</dd>
                  <dt>Paso 3:</dt>
                  <!-- <dd>Registrar el módulo en nuestra API para así mostrar los datos recopilados lo puedes hacer facilmente presionando <a class="btn btn-xs btn-outline-primary"  href="nuevo_modulo.php" role="button">Aquí</a></dd> -->
                  <dd>Registrar el módulo en nuestra API para así mostrar los datos recopilados, lo puedes hacer facilmente presionando  <a class=""  href="nuevo_modulo.php" >aquí</a></dd>
                  <div class="text-center">
                    <h3>Y ¡Listo! </h3>
                    <h5>Tus datos son mostrados en gráficas personalizadas</h5>
                  </div>
                </dl>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

          <div class="col-12 col-lg-5">
          <!-- <div class="col-12 col-sm-6 col-lg-6"> -->
            <div class="card card-primary card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Microcontrolador</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Sensor</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Utilidades</a>
                  </li>

                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                    <h4>NodeMCU
                    <small class="text-muted">Recopila y envia los datos</small>
                    </h4>
                      <div class="tab-custom-content">
                        <img src="img/nodemcu11.jpg" alt="imagen_nodemcu" class="rounded mx-auto d-block">
                        <p class="mb-0 text-justify">Para este proyecto se recomienda utilizar un modulo ESP8266 por ser un Microcontrolador facil de programar, económico y con toda la pila TCP/IP disponible para enviar o recibir datos por internet.</p>
                        <div class="row justify-content-center mt-2">
                          <a class="btn btn-warning" target="_blank" href="https://articulo.mercadolibre.com.ve/MLV-504898503-nodemcu-v3-wemos-esp8266-32mb-flash-wifi-iot-lua-arduino-_JM" role="button">Clic aqui para comprar</a>
                        </div>
                      </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                  <h4>BMP280
                    <small class="text-muted">Sensor de temperatura y altitud</small>
                    </h4>
                      <div class="tab-custom-content">
                        <img src="img/bmp.jpg" alt="imagen_sensor" class="rounded mx-auto d-block">
                        <p class="mb-0 text-justify">Se conecta al microcontrolador mediante sus 4 pines: VCC→3.3v, GND→Masa, SCL→D1, SDA→D2, una vez hecho esto, es posible sensar la temperatura con una resolución de 0.01°C y un ultra-bajo consumo de energía.</p>
                        <div class="row justify-content-center mt-2">
                          <a class="btn btn-warning" target="_blank" href="https://articulo.mercadolibre.com.ve/MLV-504484427-bmp280-sensor-presion-barometrica-temp-arduino-esp-pic-_JM" role="button">Clic aqui para comprar</a>
                        </div>
                      </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
                     <div class="container">
                       <div class="row">
                         <div class="col-xs-3">
                           <img src="img/arduino76.jpg" alt="img">
                         </div>
                         <div class="col-xs-9 centrar1">
                           <table>
                             <tbody >
                               <tr>
                                  <td class="align-middle">Editor Arduino</td>
                               </tr>
                               <tr>
                                  <td >https://www.arduino.cc</td>
                               </tr>
                             </tbody>
                           </table>
                         </div>
                       </div> 
                       <!-- End row -->
                       <div class="row pt-2">
                         <div class="col-xs-3 ">
                           <img src="img/GitHub76.jpg" alt="img">
                         </div>
                         <div class="col-xs-9 centrar">
                           <table>
                             <tbody >
                               <tr>
                                  <td class="align-middle">Sketch</td>
                               </tr>
                               <tr>
                                  <td >https://github.com/</td>
                               </tr>
                             </tbody>
                           </table>
                         </div>
                       </div> 
                       <!-- End row -->
                     </div>
                  </div>

                </div>
              </div>
              <!-- /.card -->
            </div>
          </div>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.container-fluid -->
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

<script src="dist/js/comunes.js"></script>

<!-- PAGE SCRIPTS -->
<!-- <script src="dist/js/pages/dashboard2.js"></script> -->

</body>
</html>
