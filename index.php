<?php
// Definir la URL base (ajusta esto según la ubicación de tu archivo)
$base_url = "/"; // Cambia esto a la ruta correcta de tu proyecto

// Definir la página actual para resaltar en el menú
$current_page = basename($_SERVER['PHP_SELF'], 'index.php'); // Por ejemplo: 'index', 'libros', etc.
//________________________________________________________________________________________________________
?>

<?php include_once __DIR__ . '/includes/header.php';
 //Incluir cabecera y menú de navegación. Al inicio del cuerpo de tu página, después del código anterior.
?>
<?php include_once __DIR__ . '/includes/navbar.php'; ?>

<!-- Contenido principal de la página -->
<div class="row">
    <div class="col-12">
        <h2>Bienvenido a Librería Online</h2>
        <p>Aquí encontrarás los mejores libros y autores.</p>
        <!-- Más contenido... -->
    </div>
</div>

<?php include_once __DIR__ . '/includes/PortadaLibro.php';
// Incluir diseno de libros con efecto.
 ?>

<br><br>
      <!-- Más contenido... -->
      <div class="containerrr">
        <div class="book">
        <div class="book">
            <img src="/img/libro5.png" width="235px" height="375px" alt="">
        </div>
        </div>
        <div class="text-block">
            <h2>Sobre Nuestra Biblioteca</h2>
            <p>Nuestra biblioteca en línea ofrece una amplia variedad de libros digitales para todos los gustos. Desde clásicos de la literatura hasta las últimas novedades, aquí encontrarás un mundo de conocimiento y entretenimiento al alcance de un clic.</p>
            <p>Nuestra biblioteca en línea ofrece una amplia variedad de libros digitales para todos los gustos. Desde clásicos de la literatura hasta las últimas novedades, aquí encontrarás un mundo de conocimiento y entretenimiento al alcance de un clic.</p>
            <p>Nuestra biblioteca en línea ofrece una amplia variedad de libros digitales para todos los gustos. Desde clásicos de la literatura hasta las últimas novedades, aquí encontrarás un mundo de conocimiento y entretenimiento al alcance de un clic.</p>
        </div>
    </div><br><br><br><br><br><br>

    <?php include_once __DIR__ . '/./includes/slide.php';
// Incluir pie de página. Al final de tu página, antes de cerrar cualquier contenedor principal.
 ?>
<?php include_once __DIR__ . '/includes/footer.php';
// Incluir pie de página. Al final de tu página, antes de cerrar cualquier contenedor principal.
 ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>