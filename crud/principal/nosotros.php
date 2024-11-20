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
    <li><a href="nosotros.php" class="active">Nosotros</a></li>
    <li><a href="informacion.php">Información</a></li>
    <li><a href="servicios.php">Servicios</a></li>
    <li><a href="donaciones.php">Donaciones</a></li>
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
          <?php echo $contenido ["contacto"] ["subtitulo3"];?> <span>
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

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section light-background">

      <div class="container">

        <div class="row gy-4">

        <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="100">
  <div class="service-item d-flex">
    <!-- Cambiar el ícono por uno más relacionado a la adopción -->
    <div class="icon flex-shrink-0"><i class="bi bi-heart"></i></div>
    <div>
      <h4 class="title"><a href="#" class="stretched-link">Adopta un Compañero</a></h4>
      <p class="description">Conoce a las mascotas que estan esperando un hogar amoroso. Descubre cómo puedes brindarles una segunda oportunidad.</p>
    </div>
  </div>
</div>
<!-- End Service Item -->

<div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="200">
  <div class="service-item d-flex">
    <!-- Cambiar el ícono a uno de chequeo o formulario -->
    <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
    <div>
      <h4 class="title"><a href="#" class="stretched-link">Proceso de Adopción</a></h4>
      <p class="description">Te guiamos paso a paso en el proceso de adopción para asegurar que encuentres a la mascota perfecta para ti.</p>
    </div>
  </div>
</div>
<!-- End Service Item -->

<div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="300">
  <div class="service-item d-flex">
    <!-- Cambiar el ícono a uno de gráfico o educación -->
    <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
    <div>
      <h4 class="title"><a href="#" class="stretched-link">Consejos para Adoptantes</a></h4>
      <p class="description">Aprende sobre cuidados, entrenamientos básicos y cómo darle la mejor bienvenida a tu nuevo amigo peludo.</p>
    </div>
  </div>
</div>
<!-- End Service Item -->

          </div><!-- End Service Item -->
        </div>
      </div>
    </section><!-- /Featured Services Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

        <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
  <p class="who-we-are">
    <?php echo $contenido["Home"]["subtitulo3"]; ?>
  </p>
  <h3><?php echo $contenido["Home"]["subtitulo4"]; ?></h3>
  <p class="fst-italic">
    <span><?php echo $contenido["Home"]["subtitulo5"]; ?></span>
  </p>
  <ul>
    <li><i class="bi bi-check-circle"></i> <span><?php echo $contenido["Home"]["text"]; ?></span></li>
    <li><i class="bi bi-check-circle"></i> <span><?php echo $contenido["Home"]["text1"]; ?></span></li>
    <li><i class="bi bi-check-circle"></i> <span><?php echo $contenido["Home"]["text2"]; ?></span></li>
    <li><i class="bi bi-check-circle"></i> <span><?php echo $contenido["Home"]["text3"]; ?></span></li>
  </ul>
  

 <!-- Nueva imagen horizontal con bordes redondeados -->
 <div class="row mt-4">
          <div class="col-lg-12">
            <img src="assets/img/<?php echo $contenido['Home']['foto5']; ?>" class="img-fluid rounded" alt="Imagen final">
          </div>
        </div>
      </div>
          <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
         <div class="row gy-4">
         <!-- Primeras tres imágenes -->
          <div class="col-lg-6">
            <img src="assets/img/<?php echo $contenido["Home"]["foto1"]; ?>" class="img-fluid" alt="">
         </div>
           <div class="col-lg-6">
          <div class="row gy-4">
        <div class="col-lg-12">
          <img src="assets/img/<?php echo $contenido["Home"]["foto2"]; ?>" class="img-fluid" alt="">
        </div>
        <div class="col-lg-12">
          <img src="assets/img/<?php echo $contenido["Home"]["foto3"]; ?>" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </div>
  <!-- Nueva fila con imagen horizontal -->
  <div class="row gy-4 mt-4">
    <div class="col-lg-12">
      <img src="assets/img/<?php echo $contenido["Home"]["foto4"]; ?>" class="img-fluid" alt="">
    </div>
  </div>
</div>
    </div>
        </div>
         </div>
        </section><!-- /About Section -->

      <!-- Clients Section -->
    <section id="clients" class="clients section">
    <div class="container" data-aos="fade-up">
  <div class="row gy-4">

    <div class="col-xl-2 col-md-3 col-6 client-logo">
      <a href="https://www.royalcanin.com/ar?gad_source=1&gclid=Cj0KCQiAouG5BhDBARIsAOc08RSGADqtnkpyR0TfuQtwUtMGO60760xNf-aIoldP7VXP7iwIFYnhlw4aAtv4EALw_wcB">
        <img src="assets/img/clients/<?php echo $contenido ['Home']['client'];?>" class="img-fluid" alt="">
      </a>
    </div><!-- End Client Item -->

    <div class="col-xl-2 col-md-3 col-6 client-logo">
      <a href="https://www.uk.pedigree.com/">
        <img src="assets/img/clients/<?php echo $contenido ['Home']['client2'];?>" class="img-fluid" alt="">
      </a>
    </div><!-- End Client Item -->

    <div class="col-xl-2 col-md-3 col-6 client-logo">
      <a href="https://www.eukanuba.com/ar?gad_source=1&gclid=Cj0KCQiAouG5BhDBARIsAOc08RS3GpVFTRyLR7R3iriTloOURSS9yr7_wHflrT9TEmMU6DvZ9PggSykaAn9ZEALw_wcB">
        <img src="assets/img/clients/<?php echo $contenido ['Home']['client3'];?>" class="img-fluid" alt="">
      </a>
    </div><!-- End Client Item -->

    <div class="col-xl-2 col-md-3 col-6 client-logo">
      <a href="https://www.purina.com.ar/dogchow">
        <img src="assets/img/clients/<?php echo $contenido ['Home']['client4'];?>" class="img-fluid" alt="">
      </a>
    </div><!-- End Client Item -->

    <div class="col-xl-2 col-md-3 col-6 client-logo">
      <a href="https://www.eukanuba.com/ar?gad_source=1&gclid=Cj0KCQiAouG5BhDBARIsAOc08RS3GpVFTRyLR7R3iriTloOURSS9yr7_wHflrT9TEmMU6DvZ9PggSykaAn9ZEALw_wc">
        <img src="assets/img/clients/<?php echo $contenido ['Home']['client5'];?>" class="img-fluid" alt="">
      </a>
    </div><!-- End Client Item -->

    <div class="col-xl-2 col-md-3 col-6 client-logo">
      <a href="https://sieger.com.ar/?gad_source=1&gclid=Cj0KCQiAouG5BhDBARIsAOc08RTJOBYblD0DFgdmUxBEnz2HGYNBVkB1-ZvpmaoSvzQ5d-fozhEN770aAkm_EALw_wcB">
        <img src="assets/img/clients/<?php echo $contenido ['Home']['client6'];?>" class="img-fluid" alt="">
      </a>
    </div><!-- End Client Item -->
  </div>

</div>

</section>

  

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