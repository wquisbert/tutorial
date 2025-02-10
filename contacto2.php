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
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nuestra Empresa</h5>
                <p class="card-text">Dirección: Calle Ficticia 123, Ciudad, País</p>
                <p class="card-text">Teléfono: +123 456 7890</p>
                <p class="card-text">Correo: contacto@empresa.com</p>
            </div>
        </div>
        <div class="mt-4">
            <h4 class="text-center">Ubicación</h4>
            <div id="map"></div>
        </div>
    </div>

    <script>
        var map = L.map('map').setView([40.7128, -74.0060], 13);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);
        L.marker([40.7128, -74.0060]).addTo(map)
            .bindPopup('<b>Nuestra Empresa</b><br>Dirección: Calle Ficticia 123, Ciudad, País')
            .openPopup();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
