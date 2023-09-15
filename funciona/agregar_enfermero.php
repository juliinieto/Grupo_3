<?php
include "conexion.php";
// Recopilar datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_enfermero = $_POST["nombre_enfermero"];
   
    
    // Preparar la consulta SQL para insertar datos en la tabla "enfermeros"
    $sql = "INSERT INTO enfermeros (nombre_enfermero) VALUES ('$nombre_enfermero')";
    
    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        echo "Enfermero registrado con éxito.";
    } else {
        echo "Error al registrar al enfermero: " . $conn->error;
    }
}

// Cerrar la conexión a la base de datos
$conn->close();

?>