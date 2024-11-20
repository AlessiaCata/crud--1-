<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('./background/foton.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        h2 {
            color: #333;
            text-align: center;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            color: #555;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        form a {
            display: block;
            margin-top: 10px;
            text-align: center;
            color: #007bff;
            text-decoration: none;
        }

        form a:hover {
            text-decoration: underline;
        }

        .login-container {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: -50px; /* Ajusta este valor para controlar cuánto quieres subir el formulario */
}

    </style>
</head>
<body>

<div class="login-container">
    <form method="POST" action="">
        <h2>Iniciar Sesión</h2>
        <label for="nombre_usuario">Usuario:</label>
        <input type="text" id="nombre_usuario" name="nombre_usuario" required>
        <br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required>
        <br>
        <input type="submit" value="Iniciar Sesión">
    </form>
</div>

</body>
</html>
<?php
// Conexión a la base de datos
$conn = new mysqli("localhost", "root", "", "mascota");

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Iniciar la sesión
session_start();

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario (nombre_usuario y contraseña)
    $username = $_POST['nombre_usuario'] ?? ''; 
    $password = $_POST['contrasena'] ?? ''; 

    // Preparar la consulta para buscar el usuario en la base de datos
    $stmt = $conn->prepare("SELECT id, nombre_usuario, contrasena FROM usuarios WHERE nombre_usuario = ?");
    $stmt->bind_param("s", $username); // Vinculamos el parámetro
    $stmt->execute();
    $stmt->store_result(); // Almacenar el resultado

    if ($stmt->num_rows > 0) {
        // Si el usuario existe, recuperar los datos
        $stmt->bind_result($id, $db_username, $db_password);
        $stmt->fetch();

        // Verificar la contraseña directamente en texto plano
        if ($password == $db_password) {
            // Contraseña correcta, iniciar sesión
            $_SESSION['id'] = $id;
            $_SESSION['nombre_usuario'] = $db_username;

            // Redirigir al usuario al índice o página principal
            header("Location: ../index.php");
            exit(); // Asegúrate de que no se ejecute más código
        } else {
            // Contraseña incorrecta
            echo "Contraseña incorrecta.";
        }
    } else {
        // El usuario no existe
        echo "Usuario no encontrado.";
    }

    // Cerrar la sentencia
    $stmt->close();
}

// Cerrar la conexión
$conn->close();
?>
