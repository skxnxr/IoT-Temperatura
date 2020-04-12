<?php 
include_once 'conexion.php';
	if (!$conn) { 
		die('No se pudo conectar a MySQL: ' . mysqli_error()); 
	} 
	echo 'Conexion OK'; mysqli_close($conn); 
