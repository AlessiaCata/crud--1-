<?php

$mysql_host = "localhost";
$mysql_user = "root";         
$password = ""; 
$database = "mascota"; 


$conn = mysqli_connect($mysql_host, $mysql_user, $password, $database);
    if (!$conn) {
        echo "Error: No se pudo conectar a MySQL.";
        echo "error:" . mysqli_connect_error();
        exit;
    }


    if (isset($conn))
    {
        echo "La bdd esta conectada";
    }
?>
