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
<section class="container mt-5" id="libros">
    <h2 class="text-center mb-4">Formulario de Contacto</h2>
    <br>
    <div class="contact-form">
        <form method="POST" action="">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu nombre" required>
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="correo" name="correo" placeholder="tu@email.com" required>
            </div>
            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date" class="form-control" id="fecha" name="fecha" required>
            </div>
            <div class="mb-3">
                <label for="asunto" class="form-label">Asunto</label>
                <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Escribe tu asunto" required>
            </div>
            <div class="mb-3">
                <label for="comentarios" class="form-label">Comentario</label>
                <textarea class="form-control" id="comentarios" name="comentarios" rows="4" placeholder="Escriba su comentario aquí" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Enviar Mensaje</button>
        </form>
        <?php if (isset($mensaje)): ?>
                <div class="alert alert-success mt-4" role="alert">
                  <?php echo $mensaje; ?>
                </div>
              <?php endif; ?>
    </div>
</section>
    
<?php
$db = new SQLite3('biblioteca.db');


$db->exec("CREATE TABLE IF NOT EXISTS contacto (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nombre TEXT NOT NULL,
    correo TEXT NOT NULL,
    fecha TEXT NOT NULL,
    asunto TEXT NOT NULL,
    comentarios TEXT NOT NULL
)");


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $fecha = $_POST['fecha'];
    $asunto = $_POST['asunto'];
    $comentarios = $_POST['comentarios'];

    
    $stmt = $db->prepare("INSERT INTO contacto (nombre, correo, fecha, asunto, comentarios) VALUES (?, ?, ?, ?, ?)");
    $stmt->bindValue(1, $nombre, SQLITE3_TEXT);
    $stmt->bindValue(2, $correo, SQLITE3_TEXT);
    $stmt->bindValue(3, $fecha, SQLITE3_TEXT);
    $stmt->bindValue(4, $asunto, SQLITE3_TEXT);
    $stmt->bindValue(5, $comentarios, SQLITE3_TEXT);
    $stmt->execute();

    
    $mensaje = "¡Gracias por tu comentario, $nombre! Tu mensaje ha sido guardado correctamente.";
}


$comentarios_guardados = $db->query("SELECT nombre, correo, fecha, asunto, comentarios FROM contacto ORDER BY id DESC LIMIT 5");
?>


<div class="container mt-5" id="libros">
    
          <div class="card">
            <div class="card-body text-center" style="padding: 60px">
              <h3>Mensaje</h3>
              <form method="POST" action="">
              <?php if (isset($mensaje)): ?>
                <div class="alert alert-success mt-4" role="alert">
                  <?php echo $mensaje; ?>
                </div>
              <?php endif; ?>
            </div>
          </div>
       

          <br><br><br><br><br><br>
      <!-- Más contenido... -->
      <div class="containerrr">
        <div class="book">
        <div class="imgForm">
    <img class="" src="/img/contactoForm.png" alt="">
    </div>
        </div>
        <div class="text-block">
            <h2>Contactanos Para poder ayudarte</h2>
            <p>Nuestra biblioteca en línea ofrece una amplia variedad de libros digitales para todos los gustos. Desde clásicos de la literatura hasta las últimas novedades, aquí encontrarás un mundo de conocimiento y entretenimiento al alcance de un clic.</p>
            <p>Nuestra biblioteca en línea ofrece una amplia variedad de libros digitales para todos los gustos. Desde clásicos de la literatura hasta las últimas novedades, aquí encontrarás un mundo de conocimiento y entretenimiento al alcance de un clic.</p>
            <p>Nuestra biblioteca en línea ofrece una amplia variedad de libros digitales para todos los gustos. Desde clásicos de la literatura hasta las últimas novedades, aquí encontrarás un mundo de conocimiento y entretenimiento al alcance de un clic.</p>
        </div>
    </div><br><br><br><br>

      
      <div class="mt-5">
        <h3>Comentarios Recientes</h3>
        <ul class="list-group">
          <?php while ($row = $comentarios_guardados->fetchArray()): ?>
            <li class="list-group-item">
              <strong><?php echo htmlspecialchars($row['nombre']); ?></strong> <br>
              <em><?php echo htmlspecialchars($row['correo']); ?> - <?php echo htmlspecialchars($row['fecha']); ?></em> <br>
              <strong>Asunto:</strong> <?php echo htmlspecialchars($row['asunto']); ?> <br>
              <p><?php echo nl2br(htmlspecialchars($row['comentarios'])); ?></p>
            </li>
          <?php endwhile; ?>
        </ul>
      </div>
    </div>
    <br><br><br><br><br><br>



<?php include_once __DIR__ . '/../includes/footer.php';
// Incluir pie de página. Al final de tu página, antes de cerrar cualquier contenedor principal.
 ?>