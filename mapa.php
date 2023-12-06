<!doctype html>
<html>
  <head>
    <title>Traffic Layer</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <link rel="stylesheet" type="text/css" href="./style.css" />
    <script type="module" src="./index.ts"></script>
    <meta property="og:url" content="https://www.PortuAssist.mx" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



            <!--CSS-->
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/animacion.css">
    <link rel="stylesheet" href="./css/colores.css">
    <link rel="stylesheet" href="./css/iconos.css">
    <link rel="stylesheet" href="./css/s.a.v.css">
    <link rel="stylesheet" href="./css/sav.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="css/animacion.css" type="text/css" />


    <!--JS -->
    <script src="./js/login.js"></script>
    <script src="./js/trafico.js"></script>
    <script src="./js/verificarsesion.js"></script>
    <script src="./js/mapaid.js"></script>
    <script src="./js/style.js"></script>

    <!--PHP -->



  </head>
  <body>
 

  <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.html">PortuAssist</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Servicios</a>
                    </li>
                    
                    <li class="nav-item">
                    <a class="nav-link" href="mapa.php" onclick="verificarSesion()">Mapa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>
    
  <body>
  <div id="myModal" class="modal">
  <div class="modal-content">
    <p>Aviso importante o precaución</p>
    <button onclick="minimizeAlert()">Aceptar</button>
  </div>
</div>

<!-- Alerta minimizada -->
<div id="minimizedAlert" class="minimized-alert" onclick="openModal()">
  Aviso
</div>
<!-- Formulario de búsqueda y mapa -->
<div class="search-container">
        <label for="origin-input">Punto de partida:</label>
        <input type="text" id="origin-input" placeholder="Ingrese punto de partida">

        <label for="destination-input">Punto de llegada:</label>
        <input type="text" id="destination-input" placeholder="Ingrese punto de llegada">

        <label for="vehicle-type">Seleccione vehiculo:</label>
        <select id="vehicle-type">
            <option value="driving">Carro</option>
            <option value="truck">Camion</option>
            <option value="motorcycle">Motocicleta</option>
        </select>

        <button onclick="calculateRoute()">Buscar ruta</button>
    </div>

    <div id="map"></div>
<style>
  /*
 * Always set the map height explicitly to define the size of the div element
 * that contains the map. \
 */
#map {
  height: 100%;
}

/*
 * Optional: Makes the sample page fill the window.
 */
html,
body {
  height: 100%;
  margin: 0;
  padding: 0;
}
  </style>

    <!--
      The `defer` attribute causes the callback to execute after the full HTML
      document has been parsed. For non-blocking uses, avoiding race conditions,
      and consistent behavior across browsers, consider loading using Promises.
      See https://developers.google.com/maps/documentation/javascript/load-maps-js-api
      for more information.
      -->

      <script>
     // Función para inicializar el mapa
     function initMap() {
            // ... Tu función initMap actual ...
        }

  // Función para calcular y mostrar la ruta
  function calculateRoute() {
            const origin = document.getElementById('origin-input').value;
            const destination = document.getElementById('destination-input').value;
            const vehicleType = document.getElementById('vehicle-type').value;

            // Crear una instancia del servicio de direcciones
            const directionsService = new google.maps.DirectionsService();
            const directionsRenderer = new google.maps.DirectionsRenderer();

            // Configurar la instancia del servicio de direcciones y el renderizador
            directionsRenderer.setMap(map); // 'map' debe ser la variable donde se encuentra tu mapa
            directionsRenderer.setPanel(document.getElementById('directions-panel')); // Agregar un panel para las indicaciones

            // Crear la solicitud de ruta
            const request = {
                origin: origin,
                destination: destination,
                travelMode: google.maps.TravelMode[vehicleType.toUpperCase()] // Seleccionar el modo de viaje según el tipo de vehículo
            };

            // Llamar al servicio de direcciones para obtener la ruta
            directionsService.route(request, function(response, status) {
                if (status === 'OK') {
                    directionsRenderer.setDirections(response);
                } else {
                    window.alert('Error al mostrar la ruta: ' + status);
                }
            });
        }

        </script>

    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBCnwnkVoKyBJQhpfcvlinAxASZr_RvOw&callback=initMap&v=weekly"
      defer
    ></script>
    <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBCnwnkVoKyBJQhpfcvlinAxASZr_RvOw&callback=initMap">
</script>
<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBCnwnkVoKyBJQhpfcvlinAxASZr_RvOw&callback=initMap&v=weekly"
      defer
    ></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBCnwnkVoKyBJQhpfcvlinAxASZr_RvOw&callback=initAutocomplete&libraries=places&v=weekly"
      defer
    ></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBCnwnkVoKyBJQhpfcvlinAxASZr_RvOw&callback=initAutocomplete&callback=initMap&v=weekly" defer></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBCnwnkVoKyBJQhpfcvlinAxASZr_RvOw&callback=initAutocomplete&callback=initAutocomplete&libraries=places&v=weekly" defer></script>
  </body>
</html>
