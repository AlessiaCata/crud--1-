<?php
session_start(); // Iniciar la sesión

if (!isset($_SESSION['nombre_usuario'])) {
    header("Location: login/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title> MASCOTAS </title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="assets/img/kaiadmin/favicon.ico" type="image/x-icon" />
    
    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />
    
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="assets/css/demo.css" />
  </head>

  <body style="background-image: url('uploads/fondo.jpg'); background-size: cover; background-position: center;">
    <div class="wrapper">
       
      <?php include("includes/sidebar.php")?>

      <div class="main-panel">
        <div class="main-header">
          <div class="main-header-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark" style="background-color: #343a40;">
              <a href="index.html" class="logo" style="margin-top: 10px;">
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
              <button
                type="button"
                class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
              </button>
            </div>
            <!-- End Logo Header -->
          </div>
          
          <?php include("includes/nav.php")?>

        </div>

        <div class="container mt-7">
  <div class="row">
    <div class="col-12">
      <!-- Mensaje de bienvenida con fondo de imagen -->
      <div class="alert alert-info text-center welcome-message" style="background-image: url('uploads/animales.jpg'); background-size: cover; background-color: transparent;" role="alert">
        <h4 class="alert-heading">¡Bienvenido Administrador!</h4>
        <p>Estás en la sección de administración del sistema. Aquí podrás gestionar categorías y más.</p>
        <!-- Botones divididos en 2 filas y 2 columnas -->
        <div class="row text-center mt-4">
          <div class="col-md-6 mb-3">
            <a href="pet_read.php" class="btn btn-lg w-75 py-4" style="background-color: #d2b48c; color: white;">MASCOTAS</a>
          </div>
          <div class="col-md-6 mb-3">
            <a href="user_read.php" class="btn btn-lg w-75 py-4" style="background-color: #c19a6b; color: white;">USUARIOS</a>
          </div>
          <div class="col-md-6 mb-3">
            <a href="categ_read.php" class="btn btn-lg w-75 py-4" style="background-color: #a0522d; color: white;">CATEGORIAS</a>
          </div>
          <div class="col-md-6 mb-3">
            <a href="cons_read.php" class="btn btn-lg w-75 py-4" style="background-color: #8b4513; color: white;">CONSULTAS</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



      </div> 
    </div>

    <?php include("includes/footer.php")?>
    <?php include("includes/script.php")?>

  </body>

</html>
