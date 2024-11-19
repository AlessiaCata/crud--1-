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

    $query = "INSERT INTO categorias (id, nombre_categoria, descripcion) VALUES ('" . $_POST['id'] . "', '" . $_POST['nombre_categoria'] . "', '" . $_POST['descripcion'] . "')";

    // Ejecutar la consulta
    $result = mysqli_query($conn, $query);

    // Verificar si la consulta fue exitosa
    if (!$result) {
        die("Fallo en el query. Existe un problema en la base de datos.");
    } else {
        ?>
        <script>alert("Categoria Guardado"); </script>;
        <?php
        
    }
    
    // Redireccionar a la página de listado de usuarios
    ?> 
    <script> window.location = "categ_read.php" </script>

