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
        <?php include("includes/db.php"); ?>

<!-- Contenedor principal -->
<div class="container">
  <div class="page-inner">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">CATEGORIAS</h4>
            <p class="mb-4">Esta sección te permitirá eliminar, editar o ver categorías</p>
            <div>
              <a href="categ_create.php" class="btn btn-primary btn-icon-split btn-lg">
                <span class="icon text-white-50">
                  <i class="fas fa-paw"></i>
                </span>
                <span class="text">Agregar categorías</span>
              </a>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="basic-datatables" class="display table table-striped table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>CATEGORÍA</th>
                    <th>DESCRIPCIÓN</th>
                    <th>ACCIONES</th>
                  </tr>
                </thead>
                <tbody>
                  <?php   
                  // Consultar categorías
                  $query = "SELECT * FROM categorias";
                  $result_categ = mysqli_query($conn, $query);

                  // Verificar si la consulta fue exitosa
                  if (!$result_categ) {
                    die("Fallo en la consulta: " . mysqli_error($conn));
                  }

                  // Mostrar las categorías en la tabla
                  while ($row = mysqli_fetch_array($result_categ)) { ?>
                    <tr>
                      <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['nombre_categoria']; ?></td>
                      <td><?php echo $row['descripcion']; ?></td>
                      <td>
                        <div class="d-flex justify-content-around">
                          <a href="categ_update.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm btn-action">
                            Modificar
                          </a>
                          <a href="categ_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm btn-action">
                            Eliminar
                          </a>
                        </div>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


     

        <?php include("includes/footer.php")?>
      </div>

      
    
    <?php include("includes/script.php")?>
  </body>
</html>
