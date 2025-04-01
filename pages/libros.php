<?php
// Definir la URL base
$base_url = "/"; // Ajusta según tu configuración

// Definir la página actual
$current_page = 'libros';
?>


<?php include_once __DIR__ . '/../includes/header.php';
 //Incluir cabecera y menú de navegación. Al inicio del cuerpo de tu página, después del código anterior.
?>
<?php include_once __DIR__ . '/../includes/navbar.php'; ?>

<!-- Contenido de la página de libros -->
<div class="row">
    <div class="col-12">
        <h2>Listado de libros Disponibles</h2>
        <p>Aquí encontrarás los listados de libros y autores mas reconocidos.</p>
        <!-- Más contenido... -->
    </div>
</div>

   <!-- Sección de Libros -->
   <section class="container mt-5">
        <h2 class="text-center mb-4">Libros Destacados</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card book-card">
                    <img src="img/libro1.jpg" class="card-img-top" alt="Libro 1">
                    <div class="card-body">
                        <h5 class="card-title">Título del Libro</h5>
                        <span class="badge bg-primary">Categoría</span>
                        <p class="card-text">Descripción breve del libro.</p>
                        <a href="#" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php include_once __DIR__ . '/../includes/footer.php';
// Incluir pie de página. Al final de tu página, antes de cerrar cualquier contenedor principal.
 ?>