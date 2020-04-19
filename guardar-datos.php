<?php
include_once 'conexion.php';

$email = $_POST['email'];
$nombre = $_POST['password'];

//die(json_encode($_POST));

try {
    $stmt = $conn->prepare("INSERT INTO usuarios (email, nombre) VALUES (?,?)");
    $stmt->bind_param("ss", $email, $nombre);
    $stmt->execute();
    $id_registro = $stmt->insert_id;
    if($id_registro > 0){
        $respuesta = array(
            'respuesta' => 'exito',
            'id_registro' => $id_registro
        );
        die(json_encode($respuesta));
    }else{
        $respuesta = array(
            'respuesta' => 'error'
        );
    }
    $stmt->close();
    $conn->close();

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

die(json_encode($respuesta));

