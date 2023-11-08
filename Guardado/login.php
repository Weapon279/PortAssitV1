<?php
// Verificar si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los valores del formulario
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // Realizar la conexión a la base de datos
    $conn = new mysqli("localhost", "portu", "portu123$", "portu");

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
