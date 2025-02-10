<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <style>
        #map {
            height: 400px;
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

    
    <div class="container mt-4">
        <h2 class="text-center">Contacto</h2>
        <div class="accordion" id="contactAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <i class="bi bi-building"></i> SERVICIO DEPARTAMENTAL DE SALUD - LA PAZ
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#contactAccordion">
                    <div class="accordion-body">
                        <p><i class="bi bi-geo-alt"></i> Dirección: Calle Capitán Ravelo 2180, La Paz, Bolivia</p>
                        <p><i class="bi bi-telephone"></i> Teléfono: 22450742</p>
                        <p><i class="bi bi-envelope"></i> Correo: contacto@empresa.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <h4 class="text-center"><i class="bi bi-map"></i> Ubicación</h4>
            <div id="map"></div>
        </div>
    </div>

    <script>
        var map = L.map('map').setView([-16.506419, -68.126203], 16);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);
        L.marker([-16.506419, -68.126203]).addTo(map)
            .bindPopup('<b>Nuestra Institucion: SEDES LA PAZ</b><br>Dirección: Calle Capitán Ravelo 2180, La Paz, Bolivia')
            .openPopup();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</body>
</html>
 