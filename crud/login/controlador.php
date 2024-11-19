<?php

if (!empty($_POST["save"])) {
    if (empty($_POST["username"]) || empty($_POST["password"])) {
        echo '<div class="alert alert-danger">LOS CAMPOS ESTÁN VACÍOS</div>';
    } else {
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        // Usando una sentencia preparada para evitar inyección SQL
        $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE nombre_usuario = ?");
        
        if (!$stmt) {
            die('Error en la preparación de la consulta: ' . $conexion->error);
        }

        $stmt->bind_param("s", $username); // "s" indica que es una cadena
        $stmt->execute();
        
        $result = $stmt->get_result();

        if ($datos = $result->fetch_object()) {
            // Verificar la contraseña con password_verify
            if (password_verify($password, $datos->contraseña)) {
                header("Location: index.php");
                exit();  // No olvides usar exit() después de header()
            } else {
                echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
            }
        } else {
            echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
        }
    }
}
?>
