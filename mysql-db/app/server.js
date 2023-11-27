const express = require('express');
const MongoClient = require('mongodb').MongoClient;

const app = express();
const port = 3000;

// Endpoint de prueba
app.get('/', (req, res) => {
  res.send('¡Hola, Docker!');
});

// Conexión a MongoDB
MongoClient.connect('mongodb://mongo:27017', (err, client) => {
  if (err) throw err;

  console.log('Conectado a MongoDB');

  // Lógica adicional de MongoDB aquí

  client.close();
});

app.listen(port, () => {
  console.log(`Servidor escuchando en http://localhost:${port}`);
});
