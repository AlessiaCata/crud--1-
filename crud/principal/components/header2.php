<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <img src="assets/img/<?php echo $contenido ["Home"] ["logo"];?>" alt="">
        <h1 class="sitename"><?php echo $contenido ["Home"] ["mastertitulo"];?></h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php#hero" class="active">Inicio</a></li>
          <li><a href="index.html#about">Nosotros</a></li>
          <li><a href="index.html#features">Información</a></li>
          <li><a href="index.html#services">Servicios</a></li>
          <li><a href="index.html#pricing">Donaciones</a></li>
          
          <!-- Opción de Mascotas aquí -->
          <li><a href="mascotas.php">Mascotas</a></li>
          
          <!-- Opción de Login aquí -->
          <li><a href="login.php">Login</a></li>

          <li><a href="index.html#contact">Contacto</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="index.html#about"> Comenzar </a>
    </div>
  </header>