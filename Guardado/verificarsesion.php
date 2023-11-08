<?php 
// Conexión a la base de datos
$db = new PDO("mysql:host=localhost;dbname=mi_base_de_datos", "mi_usuario", "mi_contraseña");

// Función para verificar si el usuario está logueado
function verificarSesion() {
    // Verifica si el usuario está logueado
    if (!isset($_SESSION["usuario"])) {
        // Si el usuario no está logueado, lo redirige a la página de inicio de sesión
        header("Location: login.php");
        exit;
    }
}

// Función para iniciar sesión
function iniciarSesion($usuario, $contraseña) {
    // Verifica si el usuario existe
    $query = $db->prepare("SELECT * FROM usuarios WHERE usuario = :usuario AND contraseña = :contraseña");
    $query->bindParam(":usuario", $usuario);
    $query->bindParam(":contraseña", $contraseña);
    $query->execute();

    // Si el usuario existe, inicia sesión
    if ($query->rowCount() > 0) {
        // Obtiene los datos del usuario
        $usuario = $query->fetch(PDO::FETCH_ASSOC);

        // Inicia sesión al usuario
        $_SESSION["usuario"] = $usuario["usuario"];

        // Devuelve true
        return true;
    } else {
        // Devuelve false
        return false;
    }
}

// Función para cerrar sesión
function cerrarSesion() {
    // Elimina la sesión del usuario
    session_destroy();
}

// Verifica si el usuario está logueado
verificarSesion();
