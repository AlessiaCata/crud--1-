<!doctype html>
<html lang="en">
<head>
    <title>Iniciar Sesión</title>
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
        <section id="login" class="starter-section section">
            <div class="login-box">
                <h2 class="text-center">Iniciar Sesión</h2>
                <form action="InicioSesion/InicioSesion.php" method="POST">
                    <div class="field">
                        <label for="username">Nombre de Usuario</label>
                        <input type="text" name="username" class="form-control" id="username" placeholder="Ingresa tu nombre de usuario" required>
                    </div>
                    <div class="field">
                        <label for="password">Contrasena</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Ingresa tu contraseña" required>
                    </div>
                    <div class="content">
                        <input type= "checkbox" id="remember-me">
                        <label for="remember-me">Recordar</label>
                     </div>
                   <div class="pass-link"><a href="#">Olvido su contraseña?</a></div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary" value="Ingresar">Iniciar Sesión</button>
                    </div>
                    <div class="text-center mt-3">
                        <p>¿No tienes una cuenta? <a href="registro.php">Regístrate aquí</a></p>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <!-- place footer here -->
    </footer>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
