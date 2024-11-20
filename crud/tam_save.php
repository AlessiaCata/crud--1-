<?php
session_start(); // Iniciar la sesión

if (!isset($_SESSION['nombre_usuario'])) {
    header("Location: login/login.php");
    exit();
}
?>

<?php include("includes/db.php")?>
<?php
//var_dump($_POST); die();

// Comprobamos si se ha enviado el formulario
if (isset($_POST['save'])) {

}

    $query = "INSERT INTO tamano (id, descripcion) VALUES ('" . $_POST['id'] . "', '" . $_POST['descripcion'] . "')";

    // Ejecutar la consulta
    $result = mysqli_query($conn, $query);

    // Verificar si la consulta fue exitosa
    if (!$result) {
        die("Fallo en el query. Existe un problema en la base de datos.");
    } else {
        ?>
        <script>alert("Tamaño Guardado"); </script>;
        <?php
        
    }
    
    // Redireccionar a la página de listado de usuarios
    ?> 
    <script> window.location = "tam_read.php" </script>

