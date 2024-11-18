<?php include("includes/db.php")?>
<?php
//var_dump($_POST); die();

// Comprobamos si se ha enviado el formulario
if (isset($_POST['save'])) {

}

    $query = "INSERT INTO mascotas (ID, Nombre, Tipo, Edad, Genero) VALUES ('" . $_POST['ID'] . "', '" . $_POST['Nombre'] . "', '" . $_POST['Tipo'] . "', '" . $_POST['Edad'] . "', '" . $_POST['Genero'] . "')";

    // Ejecutar la consulta
    $result = mysqli_query($conn, $query);

    // Verificar si la consulta fue exitosa
    if (!$result) {
        die("Fallo en el query. Existe un problema en la base de datos.");
    } else {
        ?>
        <script>alert("Mascota Guardado"); </script>;
        <?php
        
    }
    
    // Redireccionar a la página de listado de usuarios
    ?> 
    <script> window.location = "pet_read.php" </script>

