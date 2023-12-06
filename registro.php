<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = array(
        'nombre' => $_POST['Nombre'],
        'apellido' => $_POST['Apellido'],
        'edad' => $_POST['Edad'],
        'telefono' => $_POST['Telefono'],
        'correo' => $_POST['Correo'],
        'rfc' => $_POST['RFC'],
        'empresa' => $_POST['Empresa'],
        'domicilio' => $_POST['Domicilio'],
        
        // Añade los demás campos aquí según el formulario
    );

    // Convertir los datos a formato JSON
    $json_data = json_encode($data);

    // URL del API donde se registran los usuarios
    $api_url = 'http://tu_api_registro_usuarios';

    // Inicializar cURL para hacer la solicitud al API
    $ch = curl_init($api_url);

    // Configurar la solicitud cURL para enviar datos mediante POST
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

    // Ejecutar la solicitud cURL
    $response = curl_exec($ch);

    // Verificar si hubo algún error
    if ($response === false) {
        echo 'Error al registrar el usuario: ' . curl_error($ch);
    } else {
        echo 'Usuario registrado exitosamente.';
    }

    // Cerrar la sesión cURL
    curl_close($ch);
}
?>
