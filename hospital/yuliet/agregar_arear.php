<?php
include "conexion.php";
$nombre_area = ""; // Inicializa la variable $nombre_area con un valor vacío

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar el nombre del área desde el formulario
    $nombre_area = $_POST["nombre_area"];

    // Validar y limpiar el nombre del área
    $nombre_area = htmlspecialchars($nombre_area);

    // Verificar si el nombre del área no está vacío
    if (!empty($nombre_area)) {
        // Crear la consulta SQL para insertar el área en la base de datos
        $sql = "INSERT INTO areas (nombre_area) VALUES ('$nombre_area')";

        // Ejecutar la consulta y verificar si se realizó con éxito
        if ($conn->query($sql) === TRUE) {
            echo "Área agregada con éxito.";
        } else {
            echo "Error al agregar el área: " . $conn->error;
        }
    } else {
        echo "El nombre del área no puede estar vacío.";
    }
}
?>
