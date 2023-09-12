<?php
$hostname = "localhost"; // Cambia esto al nombre de tu servidor MySQL
$database = "hospital_db"; // Cambia esto al nombre de tu base de datos

// Crear una conexión a la base de datos
$mysqli = new mysqli($hostname, $database);

// Verificar si hay errores de conexión
if ($mysqli->connect_error) {
    die("Error de conexión a la base de datos: " . $mysqli->connect_error);
}
?>
