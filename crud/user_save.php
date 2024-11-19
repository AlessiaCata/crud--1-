
<?php 
include("includes/db.php");

// Comprobamos si se ha enviado el formulario
if (isset($_POST['save'])) {
    // Validar campos obligatorios
    if (empty($_POST['id']) || empty($_POST['nombre_completo']) || empty($_POST['correo_electronico']) || empty($_POST['nombre_usuario']) || empty($_POST['rol'])) {
        echo "<script>alert('Por favor, complete todos los campos obligatorios.'); window.location = 'crear_usuario.php';</script>";
        exit();
    }

    // Procesar subida de la foto
    $foto_nombre = $_FILES['fotos']['name'];
    $foto_temporal = $_FILES['fotos']['tmp_name'];
    $ruta_destino = "uploads/" . basename($foto_nombre);

    if (!move_uploaded_file($foto_temporal, $ruta_destino)) {
        echo "<script>alert('Error al subir la foto.'); window.location = 'user_create.php';</script>";
        exit();
    }

    // Crear la consulta SQL
    $query = "INSERT INTO usuarios (id, nombre_completo, correo_electronico, nombre_usuario, rol, fotos) 
              VALUES (?, ?, ?, ?, ?, ?)";

    // Preparar la consulta
    $stmt = $conn->prepare($query);
    $stmt->bind_param(
        "isssss", 
        $_POST['id'], 
        $_POST['nombre_completo'], 
        $_POST['correo_electronico'], 
        $_POST['nombre_usuario'], 
        $_POST['rol'], 
        $foto_nombre
    );

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo "<script>alert('Usuario guardado exitosamente.'); window.location = 'user_read.php';</script>";
    } else {
        echo "<script>alert('Error al guardar el usuario: {$conn->error}'); window.location = 'crear_usuario.php';</script>";
    }

    // Cerrar la conexión
    $stmt->close();
    $conn->close();
}
?>
