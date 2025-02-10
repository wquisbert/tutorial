<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web SDIS-SEDES LA PAZ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <style>
        .navbar-brand img {
            height: 50px;
            margin-right: 10px;
        }
        .dropdown-menu {
            display: none;
        }
        .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="logo.png" alt="Logo"> SICE - SEDES LA PAZ
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#" onclick="cargarPagina('inicio.php')"><i class="bi bi-house-door"></i> Inicio</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-film"></i> Videos</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#" onclick="cargarPagina('videos.php')"><i class="bi bi-play-btn"></i> Instalacion y Configuracion</a></li>
                            <li><a class="dropdown-item" href="#" onclick="cargarPagina('categorias.php')"><i class="bi bi-folder"></i> Categorías</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#" onclick="cargarPagina('contacto.php')"><i class="bi bi-envelope"></i> Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container mt-4">
        <div id="contenido" class="text-center">
            <h1>Bienvenido al sitio SICE - SEDES LA PAZ</h1>
            <h2>Haz clic en el menú para navegar Y poder encontrar la informacion a cerca del funcionamiento e implementacion del Sistema de Informacion Clinico Estaditico (SICE).</h2>
            <h2>Para Hospitales o establecmientos de salud publicos de segundo y tercer nivel de atencion del Departamento de La Paz.</h2>
        </div>
    </div>
    
    <script>
        function cargarPagina(pagina) {
            $.ajax({
                url: pagina,
                success: function (data) {
                    $('#contenido').html(data);
                },
                error: function () {
                    $('#contenido').html('<p>Error al cargar la página.</p>');
                }
            });
        }
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</body>
</html>
