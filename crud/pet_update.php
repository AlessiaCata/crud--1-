<?php
session_start(); // Iniciar la sesión

if (!isset($_SESSION['nombre_usuario'])) {
    header("Location: login/login.php");
    exit();
}
?>

<?php include("includes/db.php")?>
<!DOCTYPE html>
<html lang="en">

  <?php include("includes/head.php")?>

  <body>
    <div class="wrapper">
       
    <?php include("includes/sidebar.php")?>

      <div class="main-panel">
        <div class="main-header">
          <div class="main-header-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
              <a href="index.html" class="logo">
                <img
                  src="assets/img/kaiadmin/logo_light.svg"
                  alt="navbar brand"
                  class="navbar-brand"
                  height="20"
                />
              </a>
              <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                  <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                  <i class="gg-menu-left"></i>
                </button>
              </div>
              <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
              </button>
            </div>
            <!-- End Logo Header -->
          </div>
          
          <?php include("includes/nav.php")?>

        </div>
        <div class="container">
          <div class="page-inner">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">ACTUALIZAR MASCOTAS</h4>
                    <p class="mb-4">Esta sección te permitirá actualizar mascotas</p>
                  </div>
                  <?php
        if (isset($_GET['id'])) {
            $ID = $_GET['id'];
            $query = "SELECT * FROM mascotas WHERE id= $ID";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_array($result);
                $ID = $row['ID'];
                $Nombre = $row['Nombre'];
                $Tipo = $row['Tipo'];
                $Edad = $row['Edad'];
                $Genero = $row['Genero'];
                $Foto = $row['Foto'];  // Foto actual
            }
        }

        if (isset($_POST['update'])) {
            $ID = $_POST['ID'];
            $Nombre = $_POST['Nombre'];
            $Tipo = $_POST['Tipo'];
            $Edad = $_POST['Edad'];
            $Genero = $_POST['Genero'];

            // Procesar la foto subida
            if ($_FILES['Foto']['name']) {
                $Foto = $_FILES['Foto']['name'];
                $target_dir = "uploads/";
                $target_file = $target_dir . basename($Foto);
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                // Verificar si es una imagen válida
                if (getimagesize($_FILES['Foto']['tmp_name']) !== false) {
                    // Subir la imagen
                    if (move_uploaded_file($_FILES['Foto']['tmp_name'], $target_file)) {
                        // Actualizar la base de datos con la nueva foto
                        $query = "UPDATE mascotas SET Nombre = '$Nombre', Tipo = '$Tipo', Edad = '$Edad', Genero = '$Genero', Foto = '$Foto' WHERE id = $ID";
                    } else {
                        echo "Error al subir la imagen.";
                    }
                } else {
                    echo "El archivo no es una imagen válida.";
                }
            } elseif (isset($_POST['remove_photo'])) {
                // Eliminar la foto si el usuario opta por quitarla
                $Foto = null;  // Borrar la referencia de la foto
                $query = "UPDATE mascotas SET Nombre = '$Nombre', Tipo = '$Tipo', Edad = '$Edad', Genero = '$Genero', Foto = NULL WHERE id = $ID";
            } else {
                // Si no se subió una nueva foto y no se eligió eliminarla, solo actualizamos los demás campos
                $query = "UPDATE mascotas SET Nombre = '$Nombre', Tipo = '$Tipo', Edad = '$Edad', Genero = '$Genero' WHERE id = $ID";
            }

            $result = mysqli_query($conn, $query);
            if (!$result) {
                echo "El query de actualizar falló";
            } else {
                ?>
                <script>alert("Registro Actualizado"); </script>
                <script>
                    window.location ="pet_read.php";
                </script>
                <?php
            }
        }
        ?>

        <div class="card-body">
        <!-- Formulario para enviar datos a pet_save.php -->
        <form action="pet_update.php" method="POST" enctype="multipart/form-data">
            <div class="row g-3 mb-3">
                <!-- ID Field -->
                <div class="col-12">
                    <label for="id" class="form-label">ID</label>
                    <input type="text" id="id" name="ID" class="form-control" value="<?php print $ID; ?>" placeholder="Ingrese el ID" readonly>
                </div>
                <!-- Nombre Field -->
                <div class="col-12">
                    <label for="nombre" class="form-label">NOMBRE</label>
                    <input type="text" id="nombre" name="Nombre" class="form-control" value="<?php print $Nombre; ?>" placeholder="Ingrese el Nombre">
                </div>
                <!-- Tipo Field -->
                <div class="col-12">
                    <label for="tipo" class="form-label">TIPO</label>
                    <input type="text" id="tipo" name="Tipo" class="form-control" value="<?php print $Tipo; ?>" placeholder="Ingrese Tipo de Animal">
                </div>
                <!-- Edad Field (Combobox) -->
                <div class="col-12">
                    <label for="edad" class="form-label">EDAD</label>
                    <select id="edad" name="Edad" class="form-select">
                        <option value="" disabled selected>Seleccione la edad de la mascota</option>
                        <?php for ($i = 1; $i <= 20; $i++): ?>
                            <option value="<?php echo $i; ?>" <?php if (isset($Edad) && $Edad == $i) echo 'selected'; ?>>
                                <?php echo $i . " año" . ($i > 1 ? "s" : ""); ?>
                            </option>
                        <?php endfor; ?>
                    </select>
                </div>
                <!-- Genero Field -->
                <div class="col-12">
                    <label for="genero" class="form-label">GENERO</label>
                    <input type="text" id="genero" name="Genero" value="<?php print $Genero; ?>" class="form-control" placeholder="Ingrese el género de la mascota">
                </div>

                <!-- Foto Field -->
                <div class="col-12">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" id="foto" name="Foto" class="form-control">
                    <?php if ($Foto): ?>
                        <div>
                            <img src="uploads/<?php echo $Foto; ?>" alt="Foto actual" width="100">
                            <label>
                                <input type="checkbox" name="remove_photo"> Eliminar foto actual
                            </label>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <!-- Botón de envío -->
            <button type="submit" class="btn btn-success" name="update">ACTUALIZAR MASCOTA</button>
          </form>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <script>
    function togglePasswordVisibility(inputId, iconId) {
      const input = document.getElementById(inputId);
      const icon = document.getElementById(iconId);
      if (input.type === "password") {
        input.type = "text";
        icon.setAttribute("data-icon", "majesticons:eye");
      } else {
        input.type = "password";
        icon.setAttribute("data-icon", "majesticons:eye-off");
      }
    }
  </script>
  </div>
    </div>
      </div>
        </div>
          </div>
            </div>
             </div>
              </div>
                
              </div>
    
    <?php include("includes/script.php")?>
  </body>
</html>
