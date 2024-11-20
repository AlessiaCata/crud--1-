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
    <li><a href="donaciones.php" class="active">Donaciones</a></li>
    <li><a href="mascotas.php">Mascotas</a></li>
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
          <?php echo $contenido ["contacto"] ["subtitulo6"];?> <span>
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
       


     <!-- Pricing Section -->
    <section id="pricing" class="pricing section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2><?php echo $contenido ["Home"] ["text36"];?></h2>
        <p><?php echo $contenido ["Home"] ["text37"];?></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

        <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
  <div class="pricing-item">
    <h3><?php echo $contenido ["Home"] ["text38"];?></h3>
    <p class="description"><?php echo $contenido ["Home"] ["text39"];?></p>
    <h4><sup>$</sup>10<span> / donación única</span></h4>
    <a href=" https://mpago.la/2JCYaHk" class="cta-btn">Dona ahora</a>
    <p class="text-center small">No se requiere tarjeta de crédito</p>
    <ul>
      <li><i class="bi bi-check"></i> <span>Alimentos para un mes</span></li>
      <li><i class="bi bi-check"></i> <span>Refugio temporal para una mascota</span></li>
    </ul>
  </div>
</div><!-- End Pricing Item -->

<div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
  <div class="pricing-item featured">
    <p class="popular">Más Popular</p>
    <h3><?php echo $contenido ["Home"] ["text40"];?></h3>
    <p class="description"><?php echo $contenido ["Home"] ["text41"];?></p>
    <h4><sup>$</sup>25<span> / donación única</span></h4>
    <a href="https://mpago.la/1LCou8X" class="cta-btn">Dona ahora</a>
    <p class="text-center small">No se requiere tarjeta de crédito</p>
    <ul>
      <li><i class="bi bi-check"></i> <span>Vacunas para una mascota</span></li>
      <li><i class="bi bi-check"></i> <span>Visita veterinaria general</span></li>
      <li><i class="bi bi-check"></i> <span>Tratamiento de emergencia</span></li>
    </ul>
  </div>
</div><!-- End Pricing Item -->

<div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
  <div class="pricing-item">
    <h3>Donación Avanzada</h3>
    <p class="description">Apoya con una donación que cubra procedimientos médicos avanzados y esterilización.</p>
    <h4><sup>$</sup>50<span> / donación única</span></h4>
    <a href="https://mpago.la/2JFGYQ4" class="cta-btn">Dona ahora</a>
    <p class="text-center small">No se requiere tarjeta de crédito</p>
    <ul>
      <li><i class="bi bi-check"></i> <span>Operación de esterilización</span></li>
      <li><i class="bi bi-check"></i> <span>Tratamiento para mascotas enfermas</span></li>
      <li><i class="bi bi-check"></i> <span>Cobertura de tratamientos de largo plazo</span></li>
    </ul>
  </div>
</div><!-- End Pricing Item -->


        </div>

      </div>

    </section><!-- /Pricing Section -->

  

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