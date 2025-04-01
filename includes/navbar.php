<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'index') ? 'active' : ''; ?>" href="<?php echo $base_url; ?>index.php">
                        <i class="fas fa-home"></i> Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'libros') ? 'active' : ''; ?>" href="<?php echo $base_url; ?>pages/libros.php">
                        <i class="fas fa-book"></i> Libros
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'autores') ? 'active' : ''; ?>" href="<?php echo $base_url; ?>pages/autores.php">
                        <i class="fas fa-user-edit"></i> Autores
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'contacto') ? 'active' : ''; ?>" href="<?php echo $base_url; ?>pages/contacto.php">
                        <i class="fas fa-envelope"></i> Contacto
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>