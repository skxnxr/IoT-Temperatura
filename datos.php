<?php 
include_once 'conexion.php';
//date_default_timezone_set('UTC-4');
date_default_timezone_set('America/Caracas');
    try {
        $serie = $_POST['serie'];
        $temperatura = $_POST['temp'];
        $presion = $_POST['presion'];
        $fecha = date('Y-m-d H:i:s' );

        $stmt = $conn->prepare("INSERT INTO datos (fecha, serie, temperatura, presion) VALUES ( ?, ?, ?, ?)");
        $stmt->bind_param("ssdd", $fecha, $serie, $temperatura, $presion);
        
        $stmt->execute();
        $id_insertado = $stmt->insert_id;
        if($stmt->affected_rows > 0){
            //echo "Exito";
        }else{
            $respuesta = array(
                'respuesta' => 'error',
                'error' => mysqli_error($conn)
            );
            
        }
        $stmt->close();
        $conn->close();

    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }


?>