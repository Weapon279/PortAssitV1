<?php
// Verificar si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los valores del formulario
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // Realizar la conexión a la base de datos
    $conn = new mysqli("localhost", "root", "Mrweapon21$", "usuario");

    // Verificar si la conexión fue exitosa
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Construir la consulta SQL para verificar las credenciales del usuario
    $query = "SELECT * FROM estudiantes WHERE email = '$email' AND pass = '$pass'";

    // Ejecutar la consulta
    $result = $conn->query($query);

    // Verificar si se encontró un resultado
    if ($result->num_rows == 1) {
        // Inicio de sesión exitoso
        // Redireccionar a la página de inicio
        header("Location: buscador.php");
        exit;
    } else {
        // Inicio de sesión fallido
        echo "Nombre de usuario o contraseña incorrectos.";
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>UNIVERSIDAD TECNOLOGICA DE MANZANILLO</title>	
	<style>
		body {
			background-image: url("img/utem.jpg");
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
		}
	</style>
     <!-- Normalize CSS -->
	<link rel="stylesheet" href="css/normalize.css">
    
     <!-- Materialize CSS -->
	<link rel="stylesheet" href="css/materialize.min.css">
    
     <!-- Material Design Iconic Font CSS -->
	<link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    
    <!-- Malihu jQuery custom content scroller CSS -->
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    
    <!-- Sweet Alert CSS -->
    <link rel="stylesheet" href="css/sweetalert.css">
    
    <!-- MaterialDark CSS -->
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container-login center-align">
        <div style="margin:15px 0;">
            <i class="zmdi zmdi-account-circle zmdi-hc-5x"></i>
            <p>Inicia sesión</p>   
        </div>
        <form action="login.php" method="POST">
            <div class="input-field">
                <input id="email" type="text" class="validate" name="email">
                <label for="email"><i class="zmdi zmdi-account"></i>&nbsp; Email</label>
            </div>
            <div class="input-field col s12">
                <input id="pass" type="password" class="validate" name="pass">
                <label for="pass"><i class="zmdi zmdi-lock"></i>&nbsp; Contraseña</label>
            </div>
            <button class="waves-effect waves-teal btn-flat" type="submit">Ingresar &nbsp; <i class="zmdi zmdi-mail-send"></i></button>
        </form>
        <div class="divider" style="margin: 20px 0;"></div>
        <a href="registro.php">Crear cuenta</a>
    </div>
    
    <!-- Sweet Alert JS -->
    <script src="js/sweetalert.min.js"></script>
    
    <!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-2.2.0.min.js"><\/script>')</script>
    
    <!-- Materialize JS -->
	<script src="js/materialize.min.js"></script>
    
    <!-- Malihu jQuery custom content scroller JS -->
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    
    <!-- MaterialDark JS -->
	<script src="js/main.js"></script>
</body>
</html>
