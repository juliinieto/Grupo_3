<?php
$hostname = "localhost"; // Cambia esto al nombre de tu servidor MySQL
$database = "funciona"; // Cambia esto al nombre de tu base de datos

$conn = new mysqli($hostname, $database); // Asegúrate de agregar tus credenciales de conexión aquí

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Selecciona la base de datos hospital
if (!mysqli_select_db($conn, $database)) {
    die("Error al seleccionar la base de datos: " . mysqli_error($conn));
}
error_reporting(E_ALL);
ini_set('display_errors', 1);

?>
