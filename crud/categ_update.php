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
            <h4 class="card-title">ACTUALIZAR CATEGORIAS</h4>
            <p class="mb-4">Esta sección te permitirá actualizar una categoría.</p>
          </div>

          <?php
          // Conexión a la base de datos
          include("includes/db.php");

          if (isset($_GET['id'])) {
              $id = $_GET['id'];
              $query = "SELECT * FROM categorias WHERE id = $id";
              $result = mysqli_query($conn, $query);

              if (mysqli_num_rows($result) == 1) {
                  $row = mysqli_fetch_array($result);
                  $nombre_categoria = $row['nombre_categoria'];
                  $descripcion = $row['descripcion'];
              } else {
                  echo "<p>No se encontró la categoría con ID $id.</p>";
              }
          }

          if (isset($_POST['update'])) {
              $id = $_POST['id'];
              $nombre_categoria = $_POST['nombre_categoria'];
              $descripcion = $_POST['descripcion'];

              $query = "UPDATE categorias SET 
                        nombre_categoria = '$nombre_categoria', 
                        descripcion = '$descripcion' 
                        WHERE id = $id";

              $result = mysqli_query($conn, $query);

              if (!$result) {
                  echo "El query de actualización falló: " . mysqli_error($conn);
              } else {
                  echo "<script>alert('Registro actualizado con éxito');</script>";
                  echo "<script>window.location = 'categ_read.php';</script>";
              }
          }
          ?>

          <div class="card-body">
            <!-- Formulario para actualizar categoría -->
            <form action="categ_update.php?id=<?php echo $id; ?>" method="POST">
              <div class="row g-3 mb-3">
                <!-- ID Field -->
                <div class="col-12">
                  <label for="id" class="form-label">ID</label>
                  <input 
                    type="text" 
                    id="id" 
                    name="id" 
                    class="form-control" 
                    value="<?php echo $id; ?>" 
                    readonly>
                </div>
                <!-- Nombre Field -->
                <div class="col-12">
                  <label for="nombre_categoria" class="form-label">Nombre de la Categoría</label>
                  <input 
                    type="text" 
                    id="nombre_categoria" 
                    name="nombre_categoria" 
                    class="form-control" 
                    value="<?php echo $nombre_categoria; ?>" 
                    required>
                </div>
                <!-- Descripción Field -->
                <div class="col-12">
                  <label for="descripcion" class="form-label">Descripción</label>
                  <input 
                    type="text" 
                    id="descripcion" 
                    name="descripcion" 
                    class="form-control" 
                    value="<?php echo $descripcion; ?>" 
                    required>
                </div>
              </div>
              <!-- Botón de envío -->
              <button 
                type="submit" 
                class="btn btn-success" 
                name="update" 
                value="Actualizar Categoría">
                Actualizar Categoría
              </button>
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
     

        <?php include("includes/footer.php")?>
      </div>

  
    </div>
    
    <?php include("includes/script.php")?>
  </body>
</html>
