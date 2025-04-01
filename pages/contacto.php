<?php
// Definir la URL base
$base_url = "/"; // Ajusta según tu configuración

// Definir la página actual
$current_page = 'contacto';
?>


<?php include_once __DIR__ . '/../includes/header.php';
 //Incluir cabecera y menú de navegación. Al inicio del cuerpo de tu página, después del código anterior.
?>
<?php include_once __DIR__ . '/../includes/navbar.php'; ?>

<!-- Contenido de la página de libros -->
<div class="row">
    <div class="col-12">
        <h2>Atraves de Este formulario nos puedes Contactar </h2>
        <p>Estamos para ayudarte.</p>
        <!-- Más contenido... -->
    </div>
</div>


    <!-- Formulario de Contacto -->
    <section class="container mt-5">
        <h2 class="text-center mb-4">Formulario de Contacto</h2> <br><br><br>
        <div class="contact-form">
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name" placeholder="Tu nombre">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" placeholder="tu@email.com">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="message" rows="4" placeholder="Escribe tu mensaje"></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Enviar Mensaje</button>
            </form>
        </div>
    </section>

    
    <div class="imgForm">
    <img class="]" src="/img/contactoForm.png" alt="">
    </div>


<?php include_once __DIR__ . '/../includes/footer.php';
// Incluir pie de página. Al final de tu página, antes de cerrar cualquier contenedor principal.
 ?>