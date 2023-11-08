<?php

// Incluir archivos necesarios
require_once('config.php');
require_once('functions.php');

// Obtener datos de la sesión
$usuario = get_usuario_actual();

// Si no hay usuario registrado, redireccionar al login
if (!$usuario) {
  header('Location: login.php');
  exit;
}

// Obtener el contenido de la página
$contenido = renderizar_pagina();

// Mostrar la página
echo $contenido;

?>
