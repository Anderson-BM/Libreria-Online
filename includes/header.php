<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librería Online</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo $base_url; ?>assets/css/style.css" rel="stylesheet">
    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="row py-4">
                <div class="col-md-6">
                    <h1 class="site-title"><i class="fas fa-book"></i> Librería Online</h1>
                </div>
                <div class="col-md-6 d-flex justify-content-end align-items-center">
                    <div class="search-box">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Buscar libros..." aria-label="Search">
                            <button class="btn btn-outline-primary" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <?php include_once('navbar.php'); ?>
    <div class="container main-container mt-4">