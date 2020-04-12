<?php
include_once 'conexion.php';

//SELECT `fecha`, `temperatura` FROM `datos` WHERE day(`fecha`) = 08
//SELECT `fecha`, `temperatura`, COUNT(*) AS resultado FROM `datos` WHERE (NOW() - INTERVAL 1 HOUR)
$sql = "SELECT DATE_FORMAT(`fecha`,'%Y-%m-%d %H:%i') AS fecha, `temperatura` FROM `datos` WHERE `fecha` >= NOW() - INTERVAL 24 HOUR AND datos.id mod 5 = 0";
//$sql = "SELECT DATE_FORMAT(`fecha`,'%Y-%m-%d %H:%i') AS fecha, `temperatura` FROM `datos` WHERE LEFT(fecha, 10) = LEFT(now(),10) AND datos.id mod 20 = 0";


$resultado = $conn->query($sql);

    $arreglo = array();
    while ($registro_dia = $resultado->fetch_assoc()) {
        $registro['fecha'] = $registro_dia['fecha'];
        $registro['t'] = $registro_dia['temperatura'];
        $arreglo[] = $registro;
    }

echo json_encode($arreglo);

