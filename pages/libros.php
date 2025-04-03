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
        <h2>Listado de libros Disponibles y Destacados</h2>
        <p>Aquí encontrarás los listados de libros y autores mas reconocidos.</p>
        <!-- Más contenido... -->
    </div>
</div>

<?php

$db = new SQLite3('biblioteca.db');

$db->exec("CREATE TABLE IF NOT EXISTS titulos2 (
    id_titulo VARCHAR(6) PRIMARY KEY,
    titulo VARCHAR(60) NOT NULL,
    tipo VARCHAR(15) NOT NULL,
    id_pub VARCHAR(4) NOT NULL,
    precio FLOAT NULL,
    avance FLOAT NULL,
    total_ventas INT NULL,
    notas VARCHAR(255) NOT NULL,
    fecha_pub DATETIME NOT NULL,
    contrato CHAR(1) NOT NULL
)");


$check = $db->querySingle("SELECT COUNT(*) FROM titulos2");
if ($check == 0) {
    $db->exec("INSERT INTO titulos2 (id_titulo, titulo, tipo, id_pub, precio, avance, total_ventas, notas, fecha_pub, contrato) VALUES
        ('BU1032', 'The Busy Executive''s Database Guide', 'business', '1389', 20, 5000, 4095, 'An overview of available database systems with emphasis on common business applications. Illustrated.', '1986-06-12 12:00:00', '1'),
        ('BU1111', 'Cooking with Computers: Surreptitious Balance Sheets', 'business', '1389', 12, 5000, 3876, 'Helpful hints on how to use your electronic resources to the best advantage.', '1988-06-09 12:00:00', '1'),
        ('BU2075', 'You Can Combat Computer Stress!', 'business', '0736', 2.99, 10125, 18722, 'The latest medical and psychological techniques for living with the electronic office. Easy-to-understand explanations.', '1985-06-30 12:00:00', '1'),
        ('BU7832', 'Straight Talk About Computers', 'business', '1389', 20, 5000, 4095, 'Annotated analysis of what computers can do for you: a no-hype guide for the critical user.', '1987-06-22 12:00:00', '1'),
        ('MC2222', 'Silicon Valley Gastronomic Treats', 'mod_cook', '0877', 20, 0, 2032, 'Favorite recipes for quick, easy, and elegant meals, tried and tested by people who never have time to eat, let alone cook.', '1989-06-09 12:00:00', '1'),
        ('MC3021', 'The Gourmet Microwave', 'mod_cook', '0877', 2.99, 15000, 22246, 'Traditional French gourmet recipes adapted for modern microwave cooking.', '1985-06-18 12:00:00', '1'),
        ('MC3026', 'The Psychology of Computer Cooking', 'UNDECIDED', '0877', NULL, NULL, NULL, '', '2000-01-10 12:19:59', '0'),
        ('PC1035', 'But Is It User Friendly?', 'popular_comp', '1389', 23, 7000, 8780, 'A survey of software for the naive user, focusing on the ''friendliness'' of each.', '1986-06-30 12:00:00', '1'),
        ('PC8888', 'Secrets of Silicon Valley', 'popular_comp', '1389', 20, 8000, 4095, 'Muckraking reporting by two courageous women on the world''s largest computer hardware and software manufacturers.', '1987-06-12 12:00:00', '1'),
        ('PC9999', 'Net Etiquette', 'popular_comp', '1389', NULL, NULL, NULL, 'A must-read for computer conferencing debutantes!', '2000-01-10 12:19:13', '0'),
        ('PS1372', 'Computer Phobic and Non-Phobic Individuals: Behavior Variati', 'psychology', '0877', 21.6, 7000, 375, 'A must for the specialist, this book examines the difference between those who hate and fear computers and those who think they are swell.', '1989-06-15 12:00:00', '1'),
        ('PS2091', 'Is Anger the Enemy?', 'psychology', '0736', 11, 2275, 2045, 'Carefully researched study of the effects of strong emotions on the body. Metabolic charts included.', '1989-06-15 12:00:00', '1'),
        ('PS2106', 'Life Without Fear', 'psychology', '0736', 7, 6000, 111, 'New exercise, meditation, and nutritional techniques that can reduce the shock of daily interactions. Popular audience. Sample menus included, exercise video available separately.', '1990-10-05 12:00:00', '1'),
        ('PS3333', 'Prolonged Data Deprivation: Four Case Studies', 'psychology', '0736', 20, 2000, 4072, 'What happens when the data runs dry? Searching evaluations of information-shortage effects on heavy users.', '1988-06-12 12:00:00', '1'),
        ('PS7777', 'Emotional Security: A New Algorithm', 'psychology', '0736', 7.99, 4000, 3336, 'Protecting yourself and your loved ones from undue emotional stress in the modern world. Use of computer and nutritional aids emphasized.', '1988-06-12 12:00:00', '1'),
        ('TC3218', 'Onions, Leeks, and Garlic: Cooking Secrets of the Mediterran', 'trad_cook', '0877', 21, 7000, 375, 'Profusely illustrated in color, this makes a wonderful gift book for a cuisine-oriented friend.', '1990-10-21 12:00:00', '1'),
        ('TC4203', 'Fifty Years in Buckingham Palace Kitchens', 'trad_cook', '0877', 12, 4000, 15096, 'More anecdotes from the Queen''s favorite cook describing life among English royalty. Recipes, techniques, tender vignettes.', '1985-06-12 12:00:00', '1'),
        ('TC7777', 'Sushi, Anyone?', 'trad_cook', '0877', 15, 8000, 4095, 'Detailed instructions on improving your position in life by learning how to make authentic Japanese sushi in your spare time. 5-10% increase in number of friends per recipe reported from beta test.', '1987-06-12 12:00:00', '1')");
}


$titulos2 = $db->query("SELECT * FROM titulos2");
?>


    <!-- Sección de Libros -->
    <div class="container mt-5" id="titulos">
        <div class="row">
            <?php while ($titulo = $titulos2->fetchArray()): ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                    <div class="card book-card"> 
                        <div class="card-body">
                        <img src="/img/image.png" class="card-img-top" alt="Libros">
                            <h5 class="card-title"><?= $titulo['titulo'] ?></h5>
                            <p class="card-text"><strong>Tipo:</strong> <?= $titulo['tipo'] ?></p>              
                            <p class="card-text"><strong>Fecha de Publicación:</strong> <?= $titulo['fecha_pub'] ?></p>
                            <span class="badge bg-primary">Categoría</span>
                            <p class="card-text"><strong>Notas:</strong> <?= $titulo['notas'] ?></p>
                            <p class="card-text"><strong>Ventas Totales:</strong> <?= $titulo['total_ventas'] ?></p>
                            <a href="#" class="btn btn-primary">Ver más</a>                        </div>
                            </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>

    <?php include_once __DIR__ . '/../includes/PortadaLibro.php';
// Incluir diseno de libros con efecto.
 ?>


<?php include_once __DIR__ . '/../includes/footer.php';
// Incluir pie de página. Al final de tu página, antes de cerrar cualquier contenedor principal.
 ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>