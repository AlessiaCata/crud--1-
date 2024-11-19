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
                    <h4 class="card-title">CREAR USUARIOS</h4>
                    <p class="mb-4"> Esta seccion te permitira crear usuarios </p>
                  </div>
                  <div class="card-body">
                    <!-- Formulario para enviar datos a user_save.php -->
                    <form action="user_save.php" method="POST" enctype="multipart/form-data">
                 <div class="row g-3 mb-3">
                                <!-- ID Field -->
                                <div class="col-12">
                                    <label for="id" class="form-label">ID</label>
                                    <input type="text" id="id" name="id" class="form-control" placeholder="Ingrese el ID" required>
                                </div>
                                <!-- Nombre Completo Field -->
                                <div class="col-12">
                                    <label for="nombre_completo" class="form-label">Nombre Completo</label>
                                    <input type="text" id="nombre_completo" name="nombre_completo" class="form-control" placeholder="Ingrese el nombre completo" required>
                                </div>
                                <!-- Correo Electrónico Field -->
                                <div class="col-12">
                                    <label for="correo_electronico" class="form-label">Correo Electrónico</label>
                                    <input type="email" id="correo_electronico" name="correo_electronico" class="form-control" placeholder="Ingrese su correo electrónico" required>
                                </div>
                                <!-- Nombre de Usuario Field -->
                                <div class="col-12">
                                    <label for="nombre_usuario" class="form-label">Nombre de Usuario</label>
                                    <input type="text" id="nombre_usuario" name="nombre_usuario" class="form-control" placeholder="Ingrese el nombre de usuario" required>
                                </div>
                                <!-- Rol Field -->
                                <div class="col-12">
                                    <label for="rol" class="form-label">Rol</label>
                                    <select id="rol" name="rol" class="form-select" required>
                                        <option value="" disabled selected>Seleccione un rol</option>
                                        <?php
                                        // Conexión a la base de datos
                                        $conn = new mysqli('localhost', 'root', '', 'mascota');

                                        // Verificar la conexión
                                        if ($conn->connect_error) {
                                            die("Conexión fallida: " . $conn->connect_error);
                                        }

                                        // Consulta para obtener los roles
                                        $sql = "SELECT role_id, cargo FROM rol";
                                        $result = $conn->query($sql);

                                        // Verificar que hay resultados
                                        if ($result->num_rows > 0) {
                                            // Generar las opciones dinámicas
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<option value='" . $row['role_id'] . "'>" . $row['cargo'] . "</option>";
                                            }
                                        } else {
                                            echo "<option value='' disabled>No hay roles disponibles</option>";
                                        }

                                        // Cerrar la conexión
                                        $conn->close();
                                        ?>
                                    </select>
                                </div>
                                <!-- Foto Field -->
                                <div class="col-12">
                                    <label for="fotos" class="form-label">Foto</label>
                                    <input type="file" id="fotos" name="fotos" class="form-control">
                                </div>
                            </div>
                            <!-- Botón de envío -->
                            <button type="submit" class="btn btn-success" name="save" value="Crear Usuario">CREAR USUARIO</button>
                        </form>
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
