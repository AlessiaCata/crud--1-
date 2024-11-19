<?php

$conexion = new mysqli("localhost", "root", "", "mascota", null); // Cambié el parámetro vacío por 'null'
$conexion->set_charset("utf8");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Si llegamos aquí, la conexión fue exitosa
?>
