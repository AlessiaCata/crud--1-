<?php

require_once '../config/Connection.php'; 
session_start();

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $nombre_usuario = $_POST['nombre_usuario'];
    $contraseña = $_POST['contraseña'];

    try {
        // Crear conexión a la base de datos
        $connection = new Connection();
        $pdo = $connection->connect();

        // Consultar el usuario en la base de datos
        $sql = "SELECT * FROM usuarios WHERE nombre_usuario = :nombre_usuario";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['nombre_usuario' => $nombre_usuario]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verificar las credenciales
        if ($user && password_verify($contraseña, $user['contraseña'])) {
            // Iniciar sesión y asignar valores
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['nombre_usuario'] = $user['nombre_usuario'];
            $_SESSION['role_id'] = $user['role_id'];

            // Redirigir según el rol
            if ($user['role_id'] == 1) {
                header('Location: ../Home/dashboard.php');
            } elseif ($user['role_id'] == 3) {
                header('Location: ../Home/dashboardUsuario.php');
            } else {
                echo 'Acceso Denegado';
                exit();
            }
        } else {
            $error_message = 'Credenciales Incorrectas';
            echo $error_message;
        }
    } catch (Throwable $th) {
        $error_message = "Error en la conexión: " . $th->getMessage();
        echo $error_message;
        exit();
    }
}
