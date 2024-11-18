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
                    <h4 class="card-title">CREAR MASCOTAS</h4>
                    <p class="mb-4"> Esta seccion te permitira crear mascotas </p>
                  </div>
                  <div class="card-body">
                    <!-- Formulario para enviar datos a pet_save.php -->
                    <form action="pet_save.php" method="POST">
                        <div class="row g-3 mb-3">
                        <!-- ID Field -->
                        <div class="col-12">
                            <label for="id" class="form-label">ID</label>
                            <input type="text" id="id" name="ID" class="form-control" placeholder="Ingrese el ID" required>
                        </div>
                        <!-- Nombre Field -->
                        <div class="col-12">
                            <label for="nombre" class="form-label">NOMBRE</label>
                            <input type="text" id="nombre" name="Nombre" class="form-control" placeholder="Ingrese el Nombre" required>
                        </div>
                        <!-- Tipo Field -->
                        <div class="col-12">
                            <label for="tipo" class="form-label">TIPO</label>
                            <select id="tipo" name="Tipo" class="form-select" required>
                                <option value="" disabled selected>Seleccione el tipo de animal</option>
                                <!-- Aquí se llenarán las opciones desde la base de datos -->
                                <?php
                                // Conexión a la base de datos
                                $conn = new mysqli('localhost', 'root', '', 'mascota');

                                // Comprobar la conexión
                                if ($conn->connect_error) {
                                    die("Conexión fallida: " . $conn->connect_error);
                                }

                                // Consulta para obtener las categorías
                                $sql = "SELECT id, nombre_categoria FROM categorias";
                                $result = $conn->query($sql);

                                // Llenar el menú desplegable con las categorías
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<option value='" . $row['id'] . "'>" . $row['nombre_categoria'] . "</option>";
                                    }
                                } else {
                                    echo "<option value='' disabled>No hay categorías disponibles</option>";
                                }

                                // Cerrar la conexión
                                $conn->close();
                                ?>
                            </select>
                        </div>
                        <!-- Edad Field (Combobox) -->
                        <div class="col-12">
                            <label for="edad" class="form-label">EDAD</label>
                            <select id="edad" name="Edad" class="form-select" required>
                            <option value="" disabled selected>Seleccione la edad de la mascota</option>
                            <option value="1">1 año</option>
                            <option value="2">2 años</option>
                            <option value="3">3 años</option>
                            <option value="4">4 años</option>
                            <option value="5">5 años</option>
                            <option value="6">6 años</option>
                            <option value="7">7 años</option>
                            <option value="8">8 años</option>
                            <option value="9">9 años</option>
                            <option value="10">10 años</option>
                            <option value="1">11 años</option>
                            <option value="2">12 años</option>
                            <option value="3">13 años</option>
                            <option value="4">14 años</option>
                            <option value="5">15 años</option>
                            <option value="6">16 años</option>
                            <option value="7">17 años</option>
                            <option value="8">18 años</option>
                            <option value="9">19 años</option>
                            <option value="10">20 años</option>
                            </select>
                        </div>
                        <!-- Genero Field -->
                        <div class="col-12">
                            <label for="genero" class="form-label">GENERO</label>
                            <input type="text" id="genero" name="Genero" class="form-control" placeholder="Ingrese el género de la mascota" required>
                        </div>
                         <!-- Foto Field -->
                         <div class="col-12">
                                    <label for="Foto" class="form-label">FOTO</label>
                                    <input type="file" id="Foto" name="Foto" class="form-control">
                                </div>
                        </div>
                        <!-- Botón de envío -->
                        <button type="submit" class="btn btn-success" name="save" value="Crear Mascota">CREAR MASCOTA</button>
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

      <!-- Custom template | don't include it in your project! -->
      <div class="custom-template">
        <div class="title">Settings</div>
        <div class="custom-content">
          <div class="switcher">
            <div class="switch-block">
              <h4>Logo Header</h4>
              <div class="btnSwitch">
                <button
                  type="button"
                  class="selected changeLogoHeaderColor"
                  data-color="dark"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="blue"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="purple"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="light-blue"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="green"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="orange"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="red"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="white"
                ></button>
                <br />
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="dark2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="blue2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="purple2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="light-blue2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="green2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="orange2"
                ></button>
                <button
                  type="button"
                  class="changeLogoHeaderColor"
                  data-color="red2"
                ></button>
              </div>
            </div>
            <div class="switch-block">
              <h4>Navbar Header</h4>
              <div class="btnSwitch">
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="dark"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="blue"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="purple"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="light-blue"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="green"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="orange"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="red"
                ></button>
                <button
                  type="button"
                  class="selected changeTopBarColor"
                  data-color="white"
                ></button>
                <br />
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="dark2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="blue2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="purple2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="light-blue2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="green2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="orange2"
                ></button>
                <button
                  type="button"
                  class="changeTopBarColor"
                  data-color="red2"
                ></button>
              </div>
            </div>
            <div class="switch-block">
              <h4>Sidebar</h4>
              <div class="btnSwitch">
                <button
                  type="button"
                  class="changeSideBarColor"
                  data-color="white"
                ></button>
                <button
                  type="button"
                  class="selected changeSideBarColor"
                  data-color="dark"
                ></button>
                <button
                  type="button"
                  class="changeSideBarColor"
                  data-color="dark2"
                ></button>
              </div>
            </div>
          </div>
        </div>
        <div class="custom-toggle">
          <i class="icon-settings"></i>
        </div>
      </div>
      <!-- End Custom template -->
    </div>
    
    <?php include("includes/script.php")?>
  </body>
</html>
