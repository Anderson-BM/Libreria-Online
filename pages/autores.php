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
        <h2>Listado de todos los Autores</h2>
        <p>Aquí encontrarás los listados de libros y autores mas reconocidos.</p>
        <!-- Más contenido... -->
    </div>
</div>

 <!-- Sección de Autores -->
 <?php

$db = new SQLite3('biblioteca.db');

$db->exec("CREATE TABLE IF NOT EXISTS autores (
    id_autor VARCHAR(12) PRIMARY KEY,
    apellido VARCHAR(50) NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    telefono VARCHAR(15),
    direccion VARCHAR(100),
    ciudad VARCHAR(50),
    estado VARCHAR(20),
    pais VARCHAR(50),
    codigo_postal INT
)");

$check = $db->querySingle("SELECT COUNT(*) FROM autores");
if ($check == 0) {
    $db->exec("INSERT INTO autores VALUES 
        ('172-32-117', 'White', 'Johnson', '408-496-7210', 'BiggMenlo', 'Park', 'CA', 'USA', 94025),
        ('213-46-891', 'Green', 'Marjorie', '415 986-7030', '63rd', 'SOakland', 'CA', 'USA', 94618),
        ('238-95-776', 'Carson', 'Cheryl', '415 548-7758', 'Darwin', 'Berkeley', 'CA', 'USA', 94705),
        ('267-41-239O', 'Leary', 'Michael', '408 286-2422', 'Clevela', 'San Jose', 'CA', 'USA', 95128),
        ('274-80-9391', 'Straight', 'Dick', '415 834-2919', '5420 College Av.', 'Oakland', 'CA', 'USA', 94609),
        ('341-22-1782', 'Smith', 'Meander', '913 843-0462', '10 Mississippi Dr.', 'Lawrence', 'KS', 'USA', 66044),
        ('409-56-7008', 'Bennet', 'Abraham', '415 658-9932', '6223 Bateman St.', 'Berkeley', 'CA', 'USA', 94705),
        ('472-27-2349', 'Gringlesby', 'Burt', '707 938-6445', 'PO Box 792', 'Covelo', 'CA', 'USA', 95428),
        ('486-29-1786', 'Locksley', 'Chastity', '415 585-4620', '18 Broadway Av.', 'San Francisco', 'CA', 'USA', 94130),
        ('527-72-3246', 'Greene', 'Morningstar', '615 297-2723', '22 Graybar House Rd.', 'Nashville', 'TN', 'USA', 37215),
        ('648-92-1872', 'Blotchet-Halls', 'Reginald', '503 745-6402', '55 Hillsdale Bl.', 'Corvallis', 'OR', 'USA', 97330),
        ('672-71-3249', 'Yokomoto', 'Akiko', '415 935-4228', '3 Silver Ct.', 'Walnut Creek', 'CA', 'USA', 94595),
        ('712-45-1867', 'del Castillo', 'Innes', '615 996-8275', '2286 Cram Pl. #86', 'Ann Arbor', 'MI', 'USA', 48105),
        ('722-51-5454', 'DeFrance', 'Michel', '219 547-9982', '3 Balding Pl.', 'Gary', 'IN', 'USA', 46403),
        ('724-08-9931', 'Stringer', 'Dirk', '415 843-2991', '5420 Telegraph Av.', 'Oakland', 'CA', 'USA', 94609),
        ('724-80-9391', 'MacFeather', 'Stearns', '415 354-7128', '44 Upland Hts.', 'Oakland', 'CA', 'USA', 94612),
        ('756-30-7391', 'Karsen', 'Livia', '415 534-9219', '5720 McAuley St.', 'Oakland', 'CA', 'USA', 94609),
        ('807-91-6654', 'Panteley', 'Sylvia', '301 946-8853', '1956 Arlington Pl.', 'Rockville', 'MD', 'USA', 20853),
        ('846-92-7186', 'Hunter', 'Sheryl', '415 836-7128', '3410 Blonde St.', 'Palo Alto', 'CA', 'USA', 94301),
        ('893-72-1158', 'McBadden', 'Heather', '707 448-4982', '301 Putnam', 'Vacaville', 'CA', 'USA', 95688),
        ('899-46-2035', 'Ringer', 'Anne', '801 826-0752', '67 Seventh Av.', 'Salt Lake City', 'UT', 'USA', 84152),
        ('998-72-3567', 'Ringer', 'Albert', '801 826-0752', '67 Seventh Av.', 'Salt Lake City', 'UT', 'USA', 84152)
    ");
}


$autores = $db->query("SELECT * FROM autores");
?>

    <div class="container mt-5">
        <div class="row">
            <?php while ($autor = $autores->fetchArray()): ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                    <div class="card book-card"> 
                        <div class="card-body">
                        <img src="/img/autor2.jpg" class="card-img-top" alt="Libros">
                            <h5 class="card-title"><?= $autor['nombre'] . ' ' . $autor['apellido'] ?></h5>
                            <span class="badge bg-warning text-dark">Informacion</span>
                            <p class="card-text"><strong>Teléfono:</strong> <?= $autor['telefono'] ?></p>
                            <p class="card-text"><strong>Dirección:</strong> <?= $autor['direccion'] ?></p>
                            <p class="card-text"><strong>Ciudad:</strong> <?= $autor['ciudad'] ?></p>
                            <p class="card-text"><strong>Estado:</strong> <?= $autor['estado'] ?></p>
                            <a href="#" class="btn btn-primary">Ver más</a>  
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>

    <?php include_once __DIR__ . '/../includes/PortadaLibro.php';
// Incluir pie de página. Al final de tu página, antes de cerrar cualquier contenedor principal.
 ?>

<?php include_once __DIR__ . '/../includes/footer.php';
// Incluir pie de página. Al final de tu página, antes de cerrar cualquier contenedor principal.
 ?>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>