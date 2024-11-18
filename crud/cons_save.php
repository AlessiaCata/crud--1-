<?php include("includes/db.php") ?>
<?php
// Comprobamos si se ha enviado el formulario
if (isset($_POST['save'])) {
    // Evitar inyección SQL utilizando una consulta preparada
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $nombre_categoria = mysqli_real_escape_string($conn, $_POST['nombre_categoria']);
    $descripcion = mysqli_real_escape_string($conn, $_POST['descripcion']);
    $asunto = mysqli_real_escape_string($conn, $_POST['asunto']);
    $mensaje = mysqli_real_escape_string($conn, $_POST['mensaje']);
 

    // Consulta SQL preparada
    $query = "INSERT INTO consultas (id, nombre, email, asunto, mensaje) 
              VALUES (?, ?, ?, ?, ?, ?)";

    // Preparar la consulta
    if ($stmt = mysqli_prepare($conn, $query)) {
        // Vincular los parámetros
        mysqli_stmt_bind_param($stmt, "ssssss", $id, $nombre_categoria, $descripcion, $asunto, $mensaje, $fecha);

        // Ejecutar la consulta
        if (mysqli_stmt_execute($stmt)) {
            echo "<script>alert('Consulta Guardada'); window.location = 'cons_read.php';</script>";
        } else {
            echo "<script>alert('Error al guardar la consulta.');</script>";
        }

        // Cerrar la declaración
        mysqli_stmt_close($stmt);
    } else {
        echo "<script>alert('Error en la preparación de la consulta.');</script>";
    }
}
?>


