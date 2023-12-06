<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "portu123";
$dbname = "portu";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Endpoint para el login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombreUsuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    $sql = "SELECT * FROM login WHERE Nombre_de_usuario = '$nombreUsuario'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verificar la contraseña (puedes usar funciones de hash como password_verify)
        if ($row['Contraseña'] === $contrasena) {
            // Obtener los datos del usuario desde la tabla 'usuarios'
            $userID = $row['Usuario_ID'];
            $userData = $conn->query("SELECT * FROM usuarios WHERE ID = '$userID'")->fetch_assoc();

            // Construir la respuesta con los datos del usuario
            $response = array(
                'status' => 'success',
                'message' => 'Autenticación exitosa',
                'user' => array(
                    'ID' => $userData['ID'],
                    'Nombre' => $userData['Nombre'],
                    'Apellido' => $userData['Apellido'],
                    // Agrega otros campos que quieras devolver
                )
            );
            echo json_encode($response);
        } else {
            // Contraseña incorrecta
            $response = array('status' => 'error', 'message' => 'Contraseña incorrecta');
            echo json_encode($response);
        }
    } else {
        // Usuario no encontrado
        $response = array('status' => 'error', 'message' => 'Usuario no encontrado');
        echo json_encode($response);
    }
}

// Si la autenticación es exitosa:
header("Location: index.html");
exit(); // Importante detener la ejecución después de redirigir
$conn->close();
?>
