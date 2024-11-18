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
                    <h4 class="card-title">MASCOTAS</h4>
                    <p class="mb-4"> Esta seccion te permitira eliminar, editar o ver mascotas </p>
                      <div>
                        <a href="pet_create.php" class="btn btn-primary btn-icon-split">
                          <span class="icon text-white-50">
                           <i class="fas fa-paw"></i>
                          </span>
                          <span class="text"> Agregar mascotas</span>
                        </a>
                      </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Edad</th>
            <th>Genero</th>
            <th>Foto</th> <!-- Nueva columna para la foto -->
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php   
        $query = "SELECT * FROM MASCOTAS";
        $result_pet = mysqli_query($conn, $query);
        while($row = mysqli_fetch_array($result_pet)) { ?>
            <tr>
                <td><?php echo $row['ID']; ?></td>
                <td><?php echo $row['Nombre']; ?></td>
                <td><?php echo $row['Tipo']; ?></td>
                <td><?php echo $row['Edad']; ?></td>
                <td><?php echo $row['Genero']; ?></td>
                <td>
                    <?php if ($row['Foto']): ?>
                        <img src="uploads/<?php echo $row['Foto']; ?>" alt="Foto de la mascota" width="100">
                    <?php else: ?>
                        <span>No disponible</span> <!-- Si no tiene foto -->
                    <?php endif; ?>
                </td>
                <td>
                    <a href="pet_update.php?id=<?php echo $row['ID']; ?>">
                        <button type="button" class="btn btn-warning" name="update">Modificar</button>
                    </a>
                    <a href="pet_delete.php?id=<?php echo $row['ID']; ?>">
                        <button type="button" class="btn btn-danger">Eliminar</button>
                    </a>
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

    
    </div>
    
    <?php include("includes/script.php")?>
  </body>
</html>
