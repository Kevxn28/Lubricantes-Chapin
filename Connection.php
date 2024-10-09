<?php
// Connection.php

// Usa variables de entorno para la configuración
$host = '/cloudsql/lubricantes-chapin-438107-438103:us-central1:lubricantesdb'; // El socket Unix
$user = getenv('DB_USER'); // Define estas variables de entorno en Cloud Run
$password = getenv('DB_PASSWORD');
$database = getenv('DB_NAME');

// Usar mysqli_connect() con el socket Unix
$Conn = mysqli_connect(null, $user, $password, $database, null, $host);

// Verificar la conexión
if (!$Conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>