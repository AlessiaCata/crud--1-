<?php 
$nombre = mb_strtoupper($_POST['nombre']);
$email = mb_strtoupper($_POST['email']);
$asunto = mb_strtoupper($_POST['asunto']);
$mensaje = mb_strtoupper($_POST['mensaje']);

include "conexion.php";

$insertar = "INSERT INTO consultas (nombre, email, asunto, mensaje) VALUES ('$nombre', '$email', '$asunto', '$mensaje')";

if ($conexion -> query($insertar) == true) {
    header('location: ../principal/index.php');
}

$conexion -> close();
?>



