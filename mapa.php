<!doctype html>

<html>
  <head>
    <title>Traffic Layer</title>
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

    <!--PHP -->




    <style>
        .container {
            max-width: 1200px;
        }
    </style>


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
    <div id="map"></div>

    <!-- 
      The `defer` attribute causes the callback to execute after the full HTML
      document has been parsed. For non-blocking uses, avoiding race conditions,
      and consistent behavior across browsers, consider loading using Promises.
      See https://developers.google.com/maps/documentation/javascript/load-maps-js-api
      for more information.
      -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBCnwnkVoKyBJQhpfcvlinAxASZr_RvOw&callback=initMap&v=weekly"
      defer
    ></script>
    <script async
   src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBCnwnkVoKyBJQhpfcvlinAxASZr_RvOw&callback=initMap">
</script>
  </body>
</html>
