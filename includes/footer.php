</div> <!-- Cierre del container principal -->
        <footer class="footer mt-5 py-3 bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h5 class="text-white">Librería Online</h5>
                        <p class="text-muted">Tu portal de libros favorito</p>
                        <p class="text-muted"><i class="fas fa-map-marker-alt"></i> Dirección: Calle Principal #123</p>
                        <p class="text-muted"><i class="fas fa-phone"></i> Teléfono: (123) 456-7890</p>
                    </div>
                    <div class="col-md-4">
                        <h5 class="text-white">Enlaces rápidos</h5>
                        <ul class="list-unstyled text-muted">
                            <li><a href="<?php echo $base_url; ?>index.php" class="text-muted">Inicio</a></li>
                            <li><a href="<?php echo $base_url; ?>pages/libros.php" class="text-muted">Libros</a></li>
                            <li><a href="<?php echo $base_url; ?>pages/autores.php" class="text-muted">Autores</a></li>
                            <li><a href="<?php echo $base_url; ?>pages/contacto.php" class="text-muted">Contacto</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h5 class="text-white">Síguenos</h5>
                        <div class="social-icons">
                            <a href="#" class="text-muted me-2"><i class="fab fa-facebook-f fa-lg"></i></a>
                            <a href="#" class="text-muted me-2"><i class="fab fa-twitter fa-lg"></i></a>
                            <a href="#" class="text-muted me-2"><i class="fab fa-instagram fa-lg"></i></a>
                        </div>
                    </div>
                </div>
                <hr class="bg-secondary">
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="text-muted">&copy; <?php echo date('Y'); ?> Librería Online. Todos los derechos reservados.</p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Custom JS -->
        <script src="<?php echo $base_url; ?>assets/js/main.js"></script>
    </body>
</html>