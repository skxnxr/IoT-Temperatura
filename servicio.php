<?php
include_once 'conexion.php';
date_default_timezone_set('America/Caracas');
$fecha2 = date('Y-m-d');


//SELECT `fecha`, `temperatura` FROM `datos` WHERE day(`fecha`) = 08
//SELECT `fecha`, `temperatura`, COUNT(*) AS resultado FROM `datos` WHERE (NOW() - INTERVAL 1 HOUR)
$sql = "SELECT DATE_FORMAT(`fecha`,'%Y-%m-%d %H:%i') AS fecha, `temperatura` FROM `datos` WHERE DATE(`fecha`) = '" . $fecha2 ."' AND datos.id mod 10 = 0";
//$sql = "SELECT DATE_FORMAT(`fecha`,'%Y-%m-%d %H:%i') AS fecha, `temperatura` FROM `datos` WHERE LEFT(fecha, 10) = LEFT(now(),10) AND datos.id mod 20 = 0";
//$sql = "SELECT `temperatura` FROM `datos` WHERE DATE(`fecha`) = '" . $fecha2 ."' ORDER BY `temperatura` ASC limit 1";


$resultado = $conn->query($sql);

    $arreglo = array();
    while ($registro_dia = $resultado->fetch_assoc()) {
        $registro['fecha'] = $registro_dia['fecha'];
        $registro['t'] = $registro_dia['temperatura'];
        $arreglo[] = $registro;
    }

echo json_encode($arreglo);

