<?php 
include_once 'conexion.php';

    try {
        $serie = $_POST['serie'];
        $temperatura = $_POST['temp'];
        $presion = $_POST['presion'];

        $stmt = $conn->prepare("INSERT INTO datos (serie, temperatura, presion) VALUES (?, ?, ?)");
        $stmt->bind_param("sdd", $serie, $temperatura, $presion);
        
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