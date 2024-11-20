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
    <li><a href="informacion.php" class="active">Información</a></li>
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
          <?php echo $contenido ["contacto"] ["subtitulo4"];?> <span>
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

       


      <!-- More Features Section -->
    <section id="more-features" class="more-features section">

      <div class="container">

        <div class="row justify-content-around gy-4">

          <div class="col-lg-6 d-flex flex-column justify-content-center order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
            <h3><?php echo $contenido ["Home"] ["titulo0"];?></h3>
            <p><?php echo $contenido ["Home"] ["titulo1"];?></p>

            <div class="row">

             <div class="col-lg-6 icon-box d-flex">
              <i class="bi bi-house-door flex-shrink-0"></i>
              <div>
                <h4>Espacio en Casa</h4>
                <p>Es importante tener suficiente espacio para que la mascota se sienta cómoda y segura en su nuevo hogar.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="col-lg-6 icon-box d-flex">
              <i class="bi bi-heart flex-shrink-0"></i>
              <div>
                <h4>Compromiso a Largo Plazo</h4>
                <p>Adoptar una mascota es un compromiso que puede durar muchos años. Asegúrate de estar listo para cuidar de ella a largo plazo.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="col-lg-6 icon-box d-flex">
              <i class="bi bi-shield-lock flex-shrink-0"></i>
              <div>
                <h4>Salud y Seguridad</h4>
                <p>Verifica que la mascota tenga la salud adecuada y asegúrate de proporcionarle las condiciones necesarias para su bienestar.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="col-lg-6 icon-box d-flex">
              <i class="bi bi-chat-dots flex-shrink-0"></i>
              <div>
                <h4>Tiempo y Atención</h4>
                <p>Las mascotas requieren atención y tiempo. Asegúrate de poder brindarles el cuidado, ejercicio y cariño que necesitan.</p>
              </div>
            </div><!-- End Icon Box -->

            </div>

          </div>

          <div class="features-image col-lg-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/<?php echo $contenido ["Home"] ["foto15"];?>" alt="">
          </div>

        </div>

      </div>

    </section><!-- /More Features Section -->
     

    <!-- Faq Section -->
    <section id="faq" class="faq section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2><?php echo $contenido ["Home"] ["titulo2"];?></h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

            <div class="faq-container">

              <div class="faq-item faq-active">
                <h3><?php echo $contenido ["Home"] ["pregunta1"];?></h3>
                <div class="faq-content">
                  <p><?php echo $contenido ["Home"] ["respuesta1"];?></p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><?php echo $contenido ["Home"] ["pregunta2"];?></h3>
                <div class="faq-content">
                  <p><?php echo $contenido ["Home"] ["respuesta2"];?></p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><?php echo $contenido ["Home"] ["pregunta3"];?></h3>
                <div class="faq-content">
                  <p><?php echo $contenido ["Home"] ["respuesta3"];?></p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><?php echo $contenido ["Home"] ["pregunta4"];?></h3>
                <div class="faq-content">
                  <p><?php echo $contenido ["Home"] ["respuesta4"];?></p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><?php echo $contenido ["Home"] ["pregunta5"];?></h3>
                <div class="faq-content">
                  <p><?php echo $contenido ["Home"] ["respuesta5"];?></p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><?php echo $contenido ["Home"] ["pregunta6"];?></h3>
                <div class="faq-content">
                  <p><?php echo $contenido ["Home"] ["respuesta6"];?></p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><?php echo $contenido ["Home"] ["pregunta7"];?></h3>
                <div class="faq-content">
                  <p><?php echo $contenido ["Home"] ["respuesta7"];?></p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><?php echo $contenido ["Home"] ["pregunta8"];?></h3>
                <div class="faq-content">
                  <p><?php echo $contenido ["Home"] ["respuesta8"];?></p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><?php echo $contenido ["Home"] ["pregunta9"];?></h3>
                <div class="faq-content">
                  <p><?php echo $contenido ["Home"] ["respuesta9"];?></p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><?php echo $contenido ["Home"] ["pregunta10"];?></h3>
                <div class="faq-content">
                  <p><?php echo $contenido ["Home"] ["respuesta10"];?></p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div><!-- End Faq Column-->

        </div>

      </div>

    </section><!-- /Faq Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up" >
        <h2 class="display-5 text-capitalize mb-3"><span class="text-primary"><?php echo $contenido ["Home"] ["titulo_testimonio"];?></span> </h2>
        <p><?php echo $contenido ["Home"] ["subtitulo6"];?></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                <?php echo $contenido ["Home"] ["text44"];?>
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/<?php echo $contenido ["Home"] ["foto16"];?>" class="testimonial-img" alt="">
                  <h3><?php echo $contenido ["Home"] ["text43"];?></h3>
                  <h4><?php echo $contenido ["Home"] ["text42"];?></h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                <?php echo $contenido ["Home"] ["text45"];?>
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/<?php echo $contenido ["Home"] ["foto17"];?>" class="testimonial-img" alt="">
                  <h3><?php echo $contenido ["Home"] ["text46"];?></h3>
                  <h4><?php echo $contenido ["Home"] ["text47"];?></h4>
                </div>
              </div>
            </div><!-- End testimonial item -->


            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                <?php echo $contenido ["Home"] ["text48"];?>
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/<?php echo $contenido ["Home"] ["foto18"];?>" class="testimonial-img" alt="">
                  <h3><?php echo $contenido ["Home"] ["text49"];?></h3>
                  <h4><?php echo $contenido ["Home"] ["text50"];?></h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                <?php echo $contenido ["Home"] ["text51"];?>
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/<?php echo $contenido ["Home"] ["foto19"];?>" class="testimonial-img" alt="">
                  <h3><?php echo $contenido ["Home"] ["text52"];?></h3>
                  <h4><?php echo $contenido ["Home"] ["text53"];?></h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->
  

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