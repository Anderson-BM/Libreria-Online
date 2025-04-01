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




<?php include_once __DIR__ . '/includes/footer.php';
// Incluir pie de página. Al final de tu página, antes de cerrar cualquier contenedor principal.
 ?>