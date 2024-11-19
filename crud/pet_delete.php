<?php
session_start(); // Iniciar la sesión

if (!isset($_SESSION['nombre_usuario'])) {
    header("Location: login/login.php");
    exit();
}
?>
<?php include("includes/db.php")?>

<?php
if (isset($_GET['id'])) {
    // Obtener el ID de la URL
    $codigo = $_GET['id'];

    // Crear la consulta para eliminar el registro
    $query = "DELETE FROM mascotas WHERE id = $codigo";

    // Ejecutar la consulta
    $result = mysqli_query($conn, $query);

    // Verificar si la consulta fue exitosa
    if (!$result) {
        die("El query para eliminar falló ");  
    } else {
        ?>
         <script>alert("Registro Eliminado");</script>;
         <script>
            window.location = "pet_read.php";
        </script>
      <?php
         
    }
    
}


