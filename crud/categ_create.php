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
                    <h4 class="card-title">CREAR CATEGORIAS</h4>
                    <p class="mb-4"> Esta seccion te permitira crear categorias </p>
                  </div>
                  <div class="card-body">
                    <!-- Formulario para enviar datos a pet_save.php -->
                    <form action="categ_save.php" method="POST">
                        <div class="row g-3 mb-3">
                        <!-- ID Field -->
                        <div class="col-12">
                            <label for="id" class="form-label">ID</label>
                            <input type="text" id="id" name="id" class="form-control" placeholder="Ingrese el ID" required>
                        </div>
                        <!-- Nombre Field -->
                        <div class="col-12">
                            <label for="nombre_categoria" class="form-label">NOMBRE DE LA CATEGORIA</label>
                            <input type="varchar" id="nombre_categoria" name="nombre_categoria" class="form-control" placeholder="Ingrese el Nombre de la Categoria" required>
                        </div>
                        <!-- Tipo Field -->
                        <div class="col-12">
                            <label for="descripcion" class="form-label">DESCRIPCION</label>
                            <input type="text" id="descripcion" name="descripcion" class="form-control" placeholder="Ingrese Descripcion" required>
                        </div>
                        
                        </div>
                        <!-- Botón de envío -->
                        <button type="submit" class="btn btn-success" name="save" value="Crear Categoria">CREAR MASCOTA</button>
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
     

        <?php include("includes/footer.php")?>
      </div>

  
    </div>
    
    <?php include("includes/script.php")?>
  </body>
</html>
