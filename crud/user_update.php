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
                        <h4 class="card-title">ACTUALIZAR USUARIOS</h4>
                        <p class="mb-4">Esta sección te permitirá actualizar Usuarios</p>
                    </div>
                    <div class="card-body">
                    <?php
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];
                            $query = "SELECT * FROM usuarios WHERE id = $id";
                            $result = mysqli_query($conn, $query);
                            if (mysqli_num_rows($result) == 1) {
                                $row = mysqli_fetch_array($result);
                                $id = $row['id'];
                                $nombre_completo = $row['nombre_completo'];
                                $correo_electronico = $row['correo_electronico'];
                                $nombre_usuario = $row['nombre_usuario'];
                                $rol = $row['rol'];
                                $fotos = $row['fotos']; // Ruta de la foto actual
                            }
                        }

                        if (isset($_POST['update'])) {
                            $id = $_POST['id'];
                            $nombre_completo = $_POST['nombre_completo'];
                            $correo_electronico = $_POST['correo_electronico'];
                            $nombre_usuario = $_POST['nombre_usuario'];
                            $rol = $_POST['rol'];

                            // Procesar la nueva foto si se sube
                            if ($_FILES['fotos']['name']) {
                                $fotos = $_FILES['fotos']['name'];
                                $target_dir = "uploads/";
                                $target_file = $target_dir . basename($fotos);
                                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                                // Verificar si es una imagen válida
                                if (getimagesize($_FILES['fotos']['tmp_name']) !== false) {
                                    // Subir la imagen
                                    if (move_uploaded_file($_FILES['fotos']['tmp_name'], $target_file)) {
                                        // Actualizar la base de datos con la nueva foto
                                        $query = "UPDATE usuarios SET nombre_completo = '$nombre_completo', correo_electronico = '$correo_electronico', nombre_usuario = '$nombre_usuario', rol = '$rol', fotos = '$fotos' WHERE id = $id";
                                    } else {
                                        echo "Error al subir la imagen.";
                                    }
                                } else {
                                    echo "El archivo no es una imagen válida.";
                                }
                            } elseif (isset($_POST['remove_photo'])) {
                                // Eliminar la foto si el usuario opta por quitarla
                                $fotos = null;  // Borrar la referencia de la foto
                                $query = "UPDATE usuarios SET nombre_completo = '$nombre_completo', correo_electronico = '$correo_electronico', nombre_usuario = '$nombre_usuario', rol = '$rol', fotos = NULL WHERE id = $id";
                            } else {
                                // Si no se subió una nueva foto y no se eligió eliminarla, solo actualizamos los demás campos
                                $query = "UPDATE usuarios SET nombre_completo = '$nombre_completo', correo_electronico = '$correo_electronico', nombre_usuario = '$nombre_usuario', rol = '$rol' WHERE id = $id";
                            }

                            $result = mysqli_query($conn, $query);
                            if (!$result) {
                                echo "El query de actualizar falló";
                            } else {
                                ?>
                                <script>alert("Registro Actualizado"); </script>
                                <script>
                                    window.location ="user_read.php";
                                </script>
                                <?php
                            }
                        }
                        ?>
               
                        <div class="card-body">
                        <!-- Formulario para enviar datos a user_update.php -->
                        <form action="user_update.php" method="POST" enctype="multipart/form-data">
                            <div class="row g-3 mb-3">
                                <!-- ID Field -->
                                <div class="col-12">
                                    <label for="id" class="form-label">ID</label>
                                    <input type="text" id="id" name="id" class="form-control" value="<?php print $id; ?>" placeholder="ID del Usuario" readonly>
                                </div>
                                <!-- Nombre Completo Field -->
                                <div class="col-12">
                                    <label for="nombre_completo" class="form-label">Nombre Completo</label>
                                    <input type="text" id="nombre_completo" name="nombre_completo" class="form-control" value="<?php print $nombre_completo; ?>" placeholder="Ingrese el nombre completo">
                                </div>
                                <!-- Correo Electrónico Field -->
                                <div class="col-12">
                                    <label for="correo_electronico" class="form-label">Correo Electrónico</label>
                                    <input type="email" id="correo_electronico" name="correo_electronico" class="form-control" value="<?php print $correo_electronico; ?>" placeholder="Ingrese el correo electrónico">
                                </div>
                                <!-- Nombre de Usuario Field -->
                                <div class="col-12">
                                    <label for="nombre_usuario" class="form-label">Nombre de Usuario</label>
                                    <input type="text" id="nombre_usuario" name="nombre_usuario" class="form-control" value="<?php print $nombre_usuario; ?>" placeholder="Ingrese el nombre de usuario">
                                </div>
                                <!-- Foto Field -->
                                <div class="col-12">
                                    <label for="foto" class="form-label">Foto</label>
                                    <input type="file" id="foto" name="fotos" class="form-control">
                                    <?php if ($fotos): ?>
                                        <div class="mt-2">
                                            <img src="uploads/<?php echo $fotos; ?>" alt="Foto actual" width="100">
                                            <div>
                                                <label>
                                                    <input type="checkbox" name="remove_photo"> Eliminar foto actual
                                                </label>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <!-- Botón de envío -->
                            <button type="submit" class="btn btn-success" name="update">ACTUALIZAR USUARIO</button>
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
