<!-- Sidebar -->
<div class="sidebar" data-background-color="light" style="background-color: #f2f2f2;">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="light" style="background-color: #f2f2f2;">
            <a href="principal/index.php" class="logo">
                <!-- Reemplazando el logo original por la imagen logoo.png en la carpeta uploads -->
                <img
                    src="uploads/logoo.png"
                    alt="navbar brand"
                    class="navbar-brand"
                    height="80"
                    width="auto"
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
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <!-- INICIO -->
                <li class="nav-item active">
                    <a href="index.php">
                        <i class="fas fa-home"></i>
                        <p style="color: #333;">INICIO</p>
                    </a>
                </li>

                <!-- CRUD Section -->
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section" style="color: #333;">CRUD</h4>
                </li>

                <!-- Mascotas -->
                <li class="nav-item">
                    <a href="pet_read.php">
                        <i class="fas fa-paw"></i>
                        <p style="color: #333;">MASCOTAS</p>
                    </a>
                </li>

                <!-- Categoria -->
                <li class="nav-item">
                    <a href="categ_read.php">
                        <i class="fa fa-tags"></i>
                        <p style="color: #333;">CATEGORIA</p>
                    </a>
                </li>

                <!-- Usuario -->
                <li class="nav-item">
                    <a href="user_read.php">
                        <i class="fa fa-user"></i>
                        <p style="color: #333;">USUARIO</p>
                    </a>
                </li>

                <!-- Consultas -->
                <li class="nav-item">
                    <a href="cons_read.php">
                        <i class="fa fa-comments"></i>
                        <p style="color: #333;">CONSULTAS</p>
                    </a>
                </li>

                <!-- Datos de Sesión Section -->
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section" style="color: #333;">DATOS DE SESIÓN</h4>
                </li>

                <!-- Cerrar Sesión -->
                <li class="nav-item">
                    <a href="login/logout.php">
                        <i class="fas fa-sign-out-alt"></i>
                        <p style="color: #333;">CERRAR SESIÓN</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
