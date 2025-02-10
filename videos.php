<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Videos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .video-container {
            position: relative;
            padding-bottom: 56.25%; 
            height: 0;
            overflow: hidden;
        }
        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h2 class="text-center">Instalacion y Configuracion</h2>
        <div class="alert alert-info text-center" role="alert">
            Aquí encontrarás el metodo de instalacion del SICE tanto en el servidor principalmente configurando el sistema segun
            a las caracteristicas del hospital o el establecimiento de salud de segundo y tercer nivel.
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Video 1</h5>
                        <p class="card-text">Instalacion del SICE y la creacion de la base de datos en el equipo servidor.</p>
                    </div>
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/pXKkPnhL2tQ" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-8 offset-md-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Video 2</h5>
                        <p class="card-text">"Configuracion inicial de instalacion del SICE".</p>
                    </div>
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/wZYeOTxG_Bs" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-8 offset-md-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Video 3</h5>
                        <p class="card-text">Instalacion de aplicacion SICE para los usuarios.</p>
                    </div>
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/DEWcXLJa-io" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-8 offset-md-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Video 4</h5>
                        <p class="card-text">Configuracion del sistema SICE en red.</p>
                    </div>
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/cN_mX4-59fg" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
