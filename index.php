<!--CSS
<?php 
	include "verssificarsesion.php";
	?>
    -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PortuAssist</title>
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
            <a class="navbar-brand" href="index.php">PortuAssist</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Servicios</a>
                    </li>
                    
                    <li class="nav-item">
                    <a class="nav-link" href="mapa.php" onclick="verificarSesion()">Mapa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>
    <main>
<div class="title-container">
 </div>
 <div class="subtitle-container">
</div>

<video src="video/ruta3.mp4" autoplay muted loop poster="images/my-video.jpg" width="100%" height="118%">
</video>

<header>
<div id="servicios" class="section p-0 dark mb-0" style="background: linear-gradient(to right, rgba(231,74,29,0.2), rgba(77,77,77,77)), url('./img/ceeel.jpg') no-repeat center center / cover; min-height: 400px">
					<div class="container">
						<div class="row justify-content-between mb-4" style="padding: 100px 0 160px;">
							<div class="col-lg-5 col-md-6 offset-lg-1 pt-3">
								<h2 class="display-4 fw-bold text-white topmargin-lg">Inicio</h2>
							</div>
							<div class="col-lg-5 col-md-6 mb-0 mb-md-5">
								<p class="d-none mb-5">Bienvenido a PortuAssist, es una plataforma que busca mejorar la seguridad y eficiencia en los entornos portuarios, a través de la implementación de soluciones tecnológicas y la colaboración entre múltiples actores..</p>
								<div class="d-flex">
									<ul class="col-6 iconlist">
									</ul>
								</div>
							</div>
						</div>
					</div>
<section id="content">



    <div id="quienes-somos" class="container clearfix">

        <div class="row justify-content-center mb-5">
            <div class="col-lg-7 center">
                <div class="heading-block">
                    <h3 class="nott mb-3 fw-semibold ls0">¿Quienes somos?</h3>
                    <span class="text-black-50">.</span>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="row align-items-center">
                    <div class="col-md-4">
                    <p class="headline">PortuAssist es un proyecto impulsado por la comunidad portuaria de Manzanillo, con el objetivo de mejorar la seguridad y eficiencia en el puerto. <span></span>.</p>

                    </div>
                    <div class="col-md-8">
                        <img src="img/logo.png" alt="">
                    </div>
                </div>
            </div>
    </section>

            <div class="col-lg-8 d-none">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <img src="demos/movers/images/others/4.png" alt="Image 1">
                    </div>
                    <div class="col-sm-6">
                        <h3>After you Share your Shifting details, Our Team will contact you.</h3>
                        <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi deserunt doloremque facilis rem, in recusandae, vel.</p>
                        <a target="_blank" href="https://icons8.com" class="color btn btn-sm p-0 btn-link"><u>illustration by Ouch.pics</u> <i class="icon-line-arrow-right"></i></a>
                    </div>
                </div>
                <div class="row align-items-center mt-5">
                    <div class="col-sm-6 mb-4 mb-sm-0">
                        <h3>Pack &amp; Load your Stuffs.</h3>
                        <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi deserunt doloremque facilis rem, in recusandae, vel.</p>
                        <a target="_blank" href="https://icons8.com" class="color btn btn-sm p-0 btn-link"><u>illustration by Ouch.pics</u> <i class="icon-line-arrow-right"></i></a>
                    </div>
                    <div class="col-sm-6">
                        <img src="demos/movers/images/others/2.png" alt="Image 1">
                    </div>
                </div>
                <div class="row align-items-center mt-5">
                    <div class="col-sm-6">
                        <img src="demos/movers/images/others/1.png" alt="Image 1">
                    </div>
                    <div class="col-sm-6">
                        <h3>Deliver whenever you are Ready.</h3>
                        <p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi deserunt doloremque facilis rem, in recusandae, vel.</p>
                        <a target="_blank" href="https://icons8.com" class="color btn btn-sm p-0 btn-link"><u>illustration by Ouch.pics</u> <i class="icon-line-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </div>

<div id="servicios" class="section p-0 dark mb-0" style="background: linear-gradient(to right, rgba(231,74,29,0.2), rgba(77,77,77,77)), url('./img/cel.jpg') no-repeat center center / cover; min-height: 400px">
					<div class="container">
						<div class="row justify-content-between mb-4" style="padding: 100px 0 160px;">
							<div class="col-lg-5 col-md-6 offset-lg-1 pt-3">
								<h2 class="display-4 fw-bold text-white topmargin-lg">Servicios</h2>
							</div>
							<div class="col-lg-5 col-md-6 mb-0 mb-md-5">
								<p class="d-none mb-5">Ofrecemos una amplia gama de servicios para mejorar la seguridad y la eficiencia en los entornos portuarios, entre los que se incluyen:</p>
								<h3 class="mb-2 text-white">Soluciones:</h3>
								<div class="d-flex">
									<ul class="col-6 iconlist">
										<li class="my-2"><i class="icon-line-circle-check fw-light"></i> <span class="ps-2">Implementación de sistemas para la gestión de tráfico</span></li>
										<li class="my-2"><i class="icon-line-circle-check fw-light"></i> <span class="ps-2">Plataforma de coordinación digital</span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

    </header>
        </section>
        <section class="jumbotron text-center">
        <section id="inicio">
        </section>
            <h2>Inicio</h2>
            <p>Bienvenido a PortuAssist, es una plataforma que busca mejorar la seguridad y eficiencia en los entornos portuarios, a través de la implementación de soluciones tecnológicas y la colaboración entre múltiples actores.</p>
        </section>
        </section>
        <section class="jumbotron text-center">
        <section id="servicios">
        </section>
            <h2>Servicios</h2>
            <h3>Ofrecemos una amplia gama de servicios para mejorar la seguridad y la eficiencia en los entornos portuarios, entre los que se incluyen:</h3>
            <ul>
                <li>Implementación de sistemas para la gestión de tráfico</li>
                <li>Plataforma de coordinación digital</li>
            </ul>
        </section>
        </section>
        <section class="jumbotron text-center">
        <section id="mision-y-vision">
            <h2>Misión y visión</h2>
            </section>
            <h3>Misión</h3>
            <li>Mejorar la seguridad y eficiencia en los entornos portuarios, a través de la implementación de soluciones tecnológicas y la colaboración entre múltiples actores.</li>
            <h3>Visión</h3>
            <li>Ser el referente internacional en la implementación de soluciones tecnológicas para la seguridad y eficiencia portuaria.</li>
        </section>
        </section>
        <section class="jumbotron text-center">
        <section id="contacto">
        </section>
            <h2>Contacto</h2>
            <li>Para más información o solicitar ayuda, por favor no dude en contactarnos a través de nuestro correo electrónico: contacto@portuassist.com o al número de teléfono: +52 (55) 1234 5678.</li>
        </section>
        </section>
    </main>
    <footer class="text-center">
        <p>&copy; 2021 PortuAssist. Todos los derechos reservados.</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>