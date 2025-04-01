<?php
// Definir la URL base
$base_url = "/"; // Ajusta según tu configuración

// Definir la página actual
$current_page = 'autores';
?>


<?php include_once __DIR__ . '/../includes/header.php';
 //Incluir cabecera y menú de navegación. Al inicio del cuerpo de tu página, después del código anterior.
?>
<?php include_once __DIR__ . '/../includes/navbar.php'; ?>

<!-- Contenido de la página de libros -->
<div class="row">
    <div class="col-12">
        <h2>Listado de Autores Disponibles</h2>
        <p>Aquí encontrarás los listados de libros y autores mas reconocidos.</p>
        <!-- Más contenido... -->
    </div>
</div>

 <!-- Sección de Autores -->
 <section class="container mt-5">
        <h2 class="text-center mb-4">Autores Destacados</h2>
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="card author-card p-3">
                    <img src="img/autor1.jpg" class="author-img" alt="Autor 1">
                    <div class="card-body">
                        <h5 class="card-title">Nombre del Autor</h5>
                        <p class="card-text">Breve biografía del autor.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    




<?php include_once __DIR__ . '/../includes/footer.php';
// Incluir pie de página. Al final de tu página, antes de cerrar cualquier contenedor principal.
 ?>