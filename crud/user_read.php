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
          <div class="card-header text-center">
            <h4 class="card-title">Gestión de Usuarios</h4>
            <p class="mb-4">Esta sección te permite agregar, eliminar, editar o ver usuarios registrados en el sistema.</p>
            <a href="user_create.php" class="btn btn-primary">
              <i class="fas fa-user-plus"></i> Agregar Usuario
            </a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="basic-datatables" class="table table-striped table-hover">
                <thead class="thead-dark">
                  <tr>
                    <th>ID</th>
                    <th>Nombre Completo</th>
                    <th>Correo Electrónico</th>
                    <th>Rol</th>
                    <th>Foto</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <?php   
                  // Consultamos los usuarios de la base de datos
                  $query = "SELECT * FROM usuarios";
                  $result_user = mysqli_query($conn, $query);

                  // Iteramos sobre los usuarios obtenidos
                  while ($row = mysqli_fetch_array($result_user)) { ?>
                    <tr>
                      <td><?php echo htmlspecialchars($row['id']); ?></td>
                      <td><?php echo htmlspecialchars($row['nombre_completo']); ?></td>
                      <td><?php echo htmlspecialchars($row['correo_electronico']); ?></td>
                      <td><?php echo htmlspecialchars($row['rol']); ?></td>
                      <td>
                        <?php if (!empty($row['fotos'])): ?>
                          <img src="uploads/<?php echo htmlspecialchars($row['fotos']); ?>" alt="Foto de usuario" width="70" class="rounded">
                        <?php else: ?>
                          <span class="badge badge-secondary">No disponible</span>
                        <?php endif; ?>
                      </td>
                      <td>
                        <a href="user_update.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">
                          <i class="fas fa-edit"></i> Modificar
                        </a>
                        <a href="user_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?');">
                          <i class="fas fa-trash-alt"></i> Eliminar
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
