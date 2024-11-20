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
    <li><a href="servicios.php" class="active">Servicios</a></li>
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
          <?php echo $contenido ["contacto"] ["subtitulo5"];?> <span>
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


     
    </section><!-- /Clients Section -->

<!-- Features Section -->
<section id="features" class="features section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2><?php echo $contenido ["Home"] ["text4"];?></h2>
    <p><?php echo $contenido ["Home"] ["text5"];?></p>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="row justify-content-between">

      <div class="col-lg-5 d-flex align-items-center">

        <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
           <!-- Adopción Fácil y Segura -->
      <li class="nav-item">
        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
          <i class="bi bi-heart-fill"></i>
            <div>
              <h4 class="d-none d-lg-block"><?php echo $contenido ["Home"] ["text6"];?></h4>
              <p><?php echo $contenido ["Home"] ["text7"];?></p>
            </div>
        </a>
      </li>
      <!-- Atención Veterinaria -->
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
        <i class="bi bi-heart-pulse"></i> <!-- Ícono de atención médica -->
        <div>
          <h4 class="d-none d-lg-block"><?php echo $contenido ["Home"] ["text8"];?></h4>
          <p><?php echo $contenido ["Home"] ["text9"];?></p>
        </div>
      </a>
    </li>

          <!-- Apoyo al Adoptante -->
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
        <i class="bi bi-chat-dots"></i>
        <div>
          <h4 class="d-none d-lg-block"><?php echo $contenido ["Home"] ["text10"];?></h4>
          <p><?php echo $contenido ["Home"] ["text11"];?></p>
        </div>
      </a>
    </li>


    <!-- Voluntariado y Actividades Comunitarias -->
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4">
          <i class="bi bi-people-fill"></i>
          <div>
            <h4 class="d-none d-lg-block"><?php echo $contenido ["Home"] ["text12"];?></h4>
            <p><?php echo $contenido ["Home"] ["text13"];?></p>
          </div>
        </a>
      </li>

      <!-- Refugio Temporal -->
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-5">
      <i class="bi bi-house-door"></i>
      <div>
        <h4 class="d-none d-lg-block"><?php echo $contenido ["Home"] ["text14"];?></h4>
        <p><?php echo $contenido ["Home"] ["text15"];?></p>
      </div>
    </a>
  </li>

  <!-- Apoyo Post-Adopción -->
  <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-6">
        <i class="bi bi-emoji-smile"></i> 
          <div>
            <h4 class="d-none d-lg-block"><?php echo $contenido["Home"]["text16"]; ?></h4>
            <p><?php echo $contenido["Home"]["text17"]; ?></p>
          </div>
        </a>
      </li>
        </ul><!-- End Tab Nav -->

      </div>

      <div class="col-lg-6">

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="features-tab-1">
            <img src="assets/img/<?php echo $contenido ["Home"] ["foto6"];?>" alt="" class="img-fluid">
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-2">
            <img src="assets/img/<?php echo $contenido ["Home"] ["foto7"];?>" alt="" class="img-fluid">
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-3">
            <img src="assets/img/<?php echo $contenido ["Home"] ["foto8"];?>" alt="" class="img-fluid">
          </div><!-- End Tab Content Item -->
          
          <div class="tab-pane fade" id="features-tab-4">
            <img src="assets/img/<?php echo $contenido ["Home"] ["foto9"];?>" alt="" class="img-fluid">
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-5">
            <img src="assets/img/<?php echo $contenido ["Home"] ["foto10"];?>" alt="" class="img-fluid">
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-6">
            <img src="assets/img/<?php echo $contenido ["Home"] ["foto11"];?>" alt="" class="img-fluid">
          </div><!-- End Tab Content Item -->
        </div>

      </div>

    </div>

  </div>

</section><!-- /Features Section -->

<!-- Features Details Section -->
<section id="features-details" class="features-details section">

  <div class="container">

    <div class="row gy-4 justify-content-between features-item">

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <img src="assets/img/<?php echo $contenido ["Home"] ["foto13"];?>" class="img-fluid" alt="">
      </div>

      <div class="col-lg-5 d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
        <div class="content">
          <h3><?php echo $contenido ["Home"] ["text18"];?></h3>
          <p>
          <?php echo $contenido ["Home"] ["text19"];?>
          </p>
        </div>
      </div>

    </div><!-- Features Item -->

    <div class="row gy-4 justify-content-between features-item">

      <div class="col-lg-5 d-flex align-items-center order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">

      <div class="content">
          <h3><?php echo $contenido ["Home"] ["text20"];?></h3>
          <p>
            <?php echo $contenido ["Home"] ["text21"];?>
          </p>
            <ul>
              <li><i class="bi bi-easel flex-shrink-0"></i> Acompañamos y orientamos a los adoptantes en cada paso.</li>
              <li><i class="bi bi-patch-check flex-shrink-0"></i> Ofrecemos información práctica para una adopción segura.</li>
              <li><i class="bi bi-brightness-high flex-shrink-0"></i> Apoyo y recursos para una convivencia feliz y responsable.</li>
            </ul>
          <p></p>
        </div>


      </div>

      <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
        <img src="assets/img/<?php echo $contenido ["Home"] ["foto14"];?>" class="img-fluid" alt="">
      </div>

    </div><!-- Features Item -->

  </div>

       

    <!-- Services Section -->
    <section id="services" class="services section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2><?php echo $contenido ["Home"] ["text22"];?></h2>
        <p><?php echo $contenido ["Home"] ["text23"];?></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row g-5">

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item item-cyan position-relative">
            <i class="bi bi-heart icon"></i>
            <div>
              <h3><?php echo $contenido ["Home"] ["text24"];?></h3>
              <p><?php echo $contenido ["Home"] ["text25"];?></p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item item-orange position-relative">
            <!-- Usando Bootstrap Icons para el ícono de corazón relleno -->
            <i class="bi bi-bandaid fs-1 icon"></i>
            <div>
              <h3><?php echo $contenido ["Home"] ["text26"];?></h3>
              <p><?php echo $contenido ["Home"] ["text27"];?></p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item item-teal position-relative">
            <i class="bi bi-chat-dots icon"></i>
            <div>
              <h3><?php echo $contenido ["Home"] ["text28"];?></h3>
              <p><?php echo $contenido ["Home"] ["text29"];?></p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item item-red position-relative">
            <i class="bi bi-people icon"></i>
            <div>
              <h3><?php echo $contenido ["Home"] ["text30"];?></h3>
              <p><?php echo $contenido ["Home"] ["text31"];?></p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-item item-indigo position-relative">
            <i class="bi bi-house-heart icon"></i>
            <div>
              <h3><?php echo $contenido ["Home"] ["text32"];?></h3>
              <p><?php echo $contenido ["Home"] ["text33"];?></p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item item-pink position-relative">
            <i class="bi bi-emoji-smile icon"></i>
            <div>
              <h3><?php echo $contenido ["Home"] ["text34"];?></h3>
              <p><?php echo $contenido ["Home"] ["text35"];?></p>
            </div>
          </div>
        </div><!-- End Service Item -->


        </div>

      </div>

    </section><!-- /Services Section -->
   

  

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