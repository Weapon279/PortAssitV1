<?php

// Verifica que la solicitud sea POST
if ($_SERVER["REQUEST_METHOD"] != "POST") {
  die("Acceso no autorizado");
}

// Obtiene los datos del formulario
$tipo = $_POST["tipo"];
$latitud = $_POST["latitud"];
$longitud = $_POST["longitud"];
$descripcion = $_POST["descripcion"];

// Verifica que los datos sean válidos
if (empty($tipo) || empty($latitud) || empty($longitud)) {
  die("Los datos son inválidos");
}

// Inserta el marcador en la base de datos
$sql = "INSERT INTO marcadores (tipo, latitud, longitud, descripcion) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $tipo, $latitud, $longitud, $descripcion);
$stmt->execute();

// Cierra la conexión a la base de datos
$stmt->close();
$conn->close();

// Redirecciona al usuario a la página principal
header("Location: mapa.php");

?>
