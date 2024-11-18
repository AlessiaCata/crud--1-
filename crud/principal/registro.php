<?php include("../includes/db.php")?>
<!doctype html>
<html lang="en">
<head>
    <title>Registro</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <style>
        body {
            background-image: url('https://services.meteored.com/img/article/el-tamano-importa-como-el-tamano-de-tu-perro-influye-en-sus-patrones-de-envejecimiento-1698077723860_1024.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            background-color: rgba(255, 255, 255, 0.8); /* Fondo semi-transparente */
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        .login-box h2 {
            margin-bottom: 20px;
        }

        .login-box .form-control {
            border-radius: 8px;
        }

        .login-box button {
            width: 100%;
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>

    <main>
    <div class="container">
          <div class="page-inner">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                    <!-- Formulario para enviar datos a user_save.php -->
                    <form action="./crud/user_save.php" method="POST" enctype="multipart/form-data">
                 <div class="row g-3 mb-3">
                                
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
                               
                                <!-- CONTRASEÑA Field -->
                                <div class="col-12">
                                    <label for="password" class="form-label">CONTRASEÑA</label>
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Ingrese su contraseña" required>
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
    </main>

    <footer>
        <!-- place footer here -->
    </footer>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
