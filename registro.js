const express = require('express');
const bodyParser = require('body-parser');

const app = express();
const port = 3000;

// Middleware para analizar cuerpos de solicitudes con formato JSON
app.use(bodyParser.json());

// Endpoint para el registro de usuarios (POST)
app.post('/registro', (req, res) => {
  const data = req.body;

  const express = require('express');
  const bodyParser = require('body-parser');
  const mysql = require('mysql');
  
  const app = express();
  const port = 3000;
  
  // Middleware para analizar cuerpos de solicitudes con formato JSON
  app.use(bodyParser.json());
  
  // Configuración de la conexión a la base de datos MySQL
  const connection = mysql.createConnection({
    host: 'localhost',
    user: 'portu',
    password: 'portu123',
    database: 'portu'
  });
  
  // Establecer conexión a la base de datos
  connection.connect((err) => {
    if (err) {
      console.error('Error de conexión a la base de datos:', err);
      throw err;
    }
    console.log('Conexión exitosa a la base de datos MySQL');
  });
  
  // Endpoint para el registro de usuarios (POST)
  app.post('/registro', (req, res) => {
    const data = req.body;
  
    // Insertar datos en la tabla de usuarios en la base de datos
    const sql = 'INSERT INTO usuarios SET ?';
    connection.query(sql, data, (err, result) => {
      if (err) {
        console.error('Error al registrar el usuario:', err);
        res.status(500).json({ error: 'Error al registrar el usuario' });
        return;
      }
  
      console.log('Usuario registrado exitosamente');
      res.json({ message: 'Usuario registrado exitosamente' });
    });
  });
  
  // Iniciar el servidor en el puerto especificado
  app.listen(port, () => {
    console.log(`Servidor escuchando en el puerto ${port}`);
  });
  

  console.log('Datos recibidos:', data);

  // Envía una respuesta al cliente (puede ser un mensaje de confirmación)
  res.json({ message: 'Usuario registrado exitosamente' });
});

// Iniciar el servidor en el puerto especificado
app.listen(port, () => {
  console.log(`Servidor escuchando en el puerto ${port}`);
});


