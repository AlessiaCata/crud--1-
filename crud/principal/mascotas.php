<?php
$filepath= 'ini.ini';
$contenido= parse_ini_file($filepath, true);
//var_dump($contenido);die(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - QuickStart Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.php" class="logo d-flex align-items-center me-auto">
        <img src="assets/img/<?php echo $contenido ["Home"] ["logo"];?>" alt="">
        <h1 class="sitename"><?php echo $contenido ["Home"] ["mastertitulo"];?></h1>
      </a>

      <nav id="navmenu" class="navmenu">
  <ul>
    <li><a href="index.php">Inicio</a></li>
    <li><a href="nosotros.php">Nosotros</a></li>
    <li><a href="informacion.php">Información</a></li>
    <li><a href="servicios.php">Servicios</a></li>
    <li><a href="donaciones.php">Donaciones</a></li>
    <li><a href="mascotas.php" class="active">Mascotas</a></li>
    <li><a href="contacto.php">Contacto</a></li>
  </ul>
  <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>

    <a class="btn-getstarted" href="../login/login.php"> Ingresar </a>
    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="hero-bg">
        <img src="assets/img/<?php echo $contenido ["Home"] ["foto_principal2"];?>" alt="">
      </div>
      <div class="container text-center">
        <div class="d-flex flex-column justify-content-center align-items-center">
          <h1 data-aos="fade-up">
          <?php echo $contenido ["contacto"] ["subtitulo2"];?> <span>
          <?php echo $contenido ["Home"] ["mastertitulo"];?></span></h1>
          <p data-aos="fade-up" data-aos-delay="100"><?php echo $contenido ["Home"] ["subtitulo2"];?><br></p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="contacto.php" class="btn-get-started"><?php echo $contenido ["Home"] ["boton"];?></a>
            <a href="<?php echo $contenido ["Home"] ["linkvideo"];?>" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span><?php echo $contenido ["Home"] ["video"];?></span></a>
          </div>
          <img src="assets/img/<?php echo $contenido ["Home"] ["foto_principal"];?>" class="img-fluid hero-img" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </section><!-- /Hero Section -->

    

    <!-- /seccion de animales publicados -->

    <section class="container mt-5">
  <div class="row justify-content-start">
    <!-- Card 1 -->
    <div class="col-md-3 mb-2">
      <div class="card" style="width: 100%;">
        <img class="card-img-top" src="./assets/img/testimonials/perro.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">PERRO</h5>
          <p class="card-text">Max es un perro tranquilo y compañero, esperando a recibir amor de un hogar.</p>
          <a href="contacto.php" class="btn btn-primary"> ADOPTAR </a>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-3 mb-2">
      <div class="card" style="width: 100%;">
        <img class="card-img-top" src="./assets/img/testimonials/conejo.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">CONEJO</h5>
          <p class="card-text">Piper es un conejo rescatado y rehabilitado, super cariñoso.</p>
          <a href="contacto.php" class="btn btn-primary"> ADOPTAR </a>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-3 mb-2">
      <div class="card" style="width: 100%;">
        <img class="card-img-top" src="./assets/img/testimonials/pajaro.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">PAJARO</h5>
          <p class="card-text">Leny es un pajaro que no puede volar. Ama cantar por las mañanas.</p>
          <a href="contacto.php" class="btn btn-primary"> ADOPTAR </a>
        </div>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="col-md-3 mb-2">
      <div class="card" style="width: 100%;">
        <img class="card-img-top" src="./assets/img/testimonials/gato.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">GATO</h5>
          <p class="card-text">Luna es una fiel compañera, mimosa y dormilona. duerme todo el dia.</p>
          <a href="contacto.php" class="btn btn-primary"> ADOPTAR </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Segunda fila -->

<section class="container mt-5">
  <div class="row justify-content-start">
    <!-- Card 1 -->
    <div class="col-md-3 mb-2">
      <div class="card" style="width: 100%;">
        <img class="card-img-top" src="./assets/img/testimonials/perrito.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">CACHORRO</h5>
          <p class="card-text"> Pupi espera un hogar lleno de amor y alegria.</p>
          <a href="contacto.php" class="btn btn-primary"> ADOPTAR </a>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-3 mb-2">
      <div class="card" style="width: 100%;">
        <img class="card-img-top" src="./assets/img/testimonials/pato.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">PATO</h5>
          <p class="card-text"> Pato se lleva bien con otros animales. necesita un estanque.</p>
          <a href="contacto.php" class="btn btn-primary"> ADOPTAR </a>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-3 mb-2">
      <div class="card" style="width: 100%;">
        <img class="card-img-top" src="./assets/img/testimonials/gatito.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">GATITO</h5>
          <p class="card-text"> Adorable gatito llamado pelusa. Le encanta jugar todo el dia.</p>
          <a href="contacto.php" class="btn btn-primary"> ADOPTAR </a>
        </div>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="col-md-3 mb-2">
      <div class="card" style="width: 100%;">
        <img class="card-img-top" src="./assets/img/testimonials/perruno.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">PERRO</h5>
          <p class="card-text"> Ron fue rescatado, y ahora espera una familia llena de amor.</p>
          <a href="contacto.php" class="btn btn-primary"> ADOPTAR </a>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="container mt-5">
  <div class="row justify-content-start">
    <!-- Card 1 -->
    <div class="col-md-3 mb-2">
      <div class="card" style="width: 100%;">
        <img class="card-img-top" src="./assets/img/testimonials/caballo.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">CABALLO</h5>
          <p class="card-text"> Se necesita campo para Pepino, es anciano y requiere espacio.</p>
          <a href="contacto.php" class="btn btn-primary"> ADOPTAR </a>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-3 mb-2">
      <div class="card" style="width: 100%;">
        <img class="card-img-top" src="./assets/img/testimonials/tortuga.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">TORTUGA</h5>
          <p class="card-text"> Hermosa tortuga hembra, le falta una patita.</p>
          <a href="contacto.php" class="btn btn-primary"> ADOPTAR </a>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-3 mb-2">
      <div class="card" style="width: 100%;">
        <img class="card-img-top" src="./assets/img/testimonials/oscuro.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">GATO</h5>
          <p class="card-text"> Michi es bondadoso y cuidador. se lleva bien con otros gatos</p>
          <a href="contacto.php" class="btn btn-primary"> ADOPTAR </a>
        </div>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="col-md-3 mb-2">
      <div class="card" style="width: 100%;">
        <img class="card-img-top" src="./assets/img/testimonials/vitto.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">PERRO</h5>
          <p class="card-text"> Le gusta estar solo. amante del humano y fiel. se llama robert.</p>
          <a href="contacto.php" class="btn btn-primary"> ADOPTAR </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Segunda fila -->

<section class="container mt-5">
  <div class="row justify-content-start">
    <!-- Card 1 -->
    <div class="col-md-3 mb-2">
      <div class="card" style="width: 100%;">
        <img class="card-img-top" src="./assets/img/testimonials/amor.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">GATO Y PERRO</h5>
          <p class="card-text"> laila y reno vienen juntos, son mejores amigos y buscan hogar.</p>
          <a href="contacto.php" class="btn btn-primary"> ADOPTAR </a>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-3 mb-2">
      <div class="card" style="width: 100%;">
        <img class="card-img-top" src="./assets/img/testimonials/pitbull.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">PERRO</h5>
          <p class="card-text"> Lia es una perrita obediente y cuidadora. apta para niños.</p>
          <a href="contacto.php" class="btn btn-primary"> ADOPTAR </a>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-3 mb-2">
      <div class="card" style="width: 100%;">
        <img class="card-img-top" src="./assets/img/testimonials/chi.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">PERRO</h5>
          <p class="card-text"> Milo es amante de los cariños y de los juguetes. fue rescatado.</p>
          <a href="contacto.php" class="btn btn-primary"> ADOPTAR </a>
        </div>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="col-md-3 mb-2">
      <div class="card" style="width: 100%;">
        <img class="card-img-top" src="./assets/img/testimonials/pescado.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">PEZ</h5>
          <p class="card-text"> nemo fue rescatado de una pecera en mal estado.</p>
          <a href="contacto.php" class="btn btn-primary"> ADOPTAR </a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="container mt-5">
  <div class="row justify-content-start">
    <!-- Card 1 -->
    <div class="col-md-3 mb-2">
      <div class="card" style="width: 100%;">
        <img class="card-img-top" src="./assets/img/testimonials/gatosjardin.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">GATITOS</h5>
          <p class="card-text"> Hermosos gatitos en adopcion, necesitan mucho amor.</p>
          <a href="contacto.php" class="btn btn-primary"> ADOPTAR </a>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-3 mb-2">
      <div class="card" style="width: 100%;">
        <img class="card-img-top" src="./assets/img/testimonials/conejitos.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">CONEJOS</h5>
          <p class="card-text"> conejitos en adopcion, necesitan amor y una familia que los quiera. les gusta el pasto.</p>
          <a href="contacto.php" class="btn btn-primary"> ADOPTAR </a>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-3 mb-2">
      <div class="card" style="width: 100%;">
        <img class="card-img-top" src="./assets/img/testimonials/golden.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">PERRO</h5>
          <p class="card-text"> mora ama el aire libre. es temeraria y no se lleva bien con otros perros.</p>
          <a href="contacto.php" class="btn btn-primary"> ADOPTAR </a>
        </div>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="col-md-3 mb-2">
      <div class="card" style="width: 100%;">
        <img class="card-img-top" src="./assets/img/testimonials/blanco.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">CABALLO</h5>
          <p class="card-text"> quien tenga un campo para recibir a Jane, y brindarle los cuidados necesarios.</p>
          <a href="contacto.php" class="btn btn-primary"> ADOPTAR </a>
        </div>
      </div>
    </div>
  </div>
</section>





  </main>
     <footer id="footer" class="footer position-relative light-background">
        <div class="container footer-top">
          <div class="row gy-4">
            <!-- Acerca de nosotros -->
            <div class="col-lg-4 col-md-6 footer-about">
              <a href="index.html" class="logo d-flex align-items-center">
                <span class="sitename"><?php echo $contenido["Home"]["text54"]; ?></span>
              </a>
              <div class="footer-contact pt-3">
                <p><?php echo $contenido["Home"]["direccion"]; ?></p>
                <p><?php echo $contenido["Home"]["direccion2"]; ?></p>
                <p class="mt-3"><strong>Teléfono:</strong> <span><?php echo $contenido["Home"]["numero"]; ?></span></p>
                <p><strong>Email:</strong> <span><?php echo $contenido["Home"]["correo"]; ?></span></p>
              </div>
              <div class="social-links d-flex mt-4">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>

            <!-- Enlaces útiles -->
            <div class="col-lg-2 col-md-3 footer-links">
              <h4>Enlaces útiles</h4>
              <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Adopciones</a></li>
                <li><a href="#">Voluntariado</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="#">Contáctanos</a></li>
              </ul>
            </div>

            <!-- Servicios relacionados -->
            <div class="col-lg-2 col-md-3 footer-links">
              <h4>Nuestros Servicios</h4>
              <ul>
                <li><a href="#">Adopción Responsable</a></li>
                <li><a href="#">Cuidado Temporal</a></li>
                <li><a href="#">Asesoramiento</a></li>
                <li><a href="#">Eventos y Campañas</a></li>
                <li><a href="#">Donaciones</a></li>
              </ul>
            </div>

            <!-- Suscripción a boletín -->
            <div class="col-lg-4 col-md-12 footer-newsletter">
              <h4>Suscríbete a nuestro Boletín</h4>
              <p>Recibe noticias y novedades sobre nuestros perros en adopción, eventos y más.</p>
              <form action="forms/newsletter.php" method="post" class="php-email-form">
                <div class="newsletter-form">
                  <input type="email" name="email" placeholder="Tu email"><input type="submit" value="Suscribirse">
                </div>
                <div class="loading">Cargando</div>
                <div class="error-message"></div>
                <div class="sent-message">¡Tu suscripción ha sido enviada! Gracias.</div>
              </form>
            </div>
          </div>
        </div>

        <!-- Derechos de autor -->
        <div class="container copyright text-center mt-4">
          <p>&copy; <strong class="px-1 sitename"><?php echo $contenido["Home"]["text54"]; ?></strong>. Todos los derechos reservados</p>
          <div class="credits">
            Diseñado por <a href="https://www.instagram.com/sarabril____/?hl=es-la">Sara Chanampa </a> y adaptado por <a href="https://www.instagram.com/alexiaaubone/?hl=es-la">Alexia Aubone</a>
          </div>
        </div>
      </footer>


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>