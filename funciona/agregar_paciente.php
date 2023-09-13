<?php
include "conexion.php";
// Recopilar datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_paciente = $_POST["nombre_paciente"];
    
    
    // Preparar la consulta SQL para insertar datos en la tabla "pacientes"
    $sql = "INSERT INTO pacientes (nombre_paciente) VALUES ('$nombre_paciente')";
    
    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        echo "Paciente registrado con éxito.";
    } else {
        echo "Error al registrar al paciente: " . $conn->error;
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>