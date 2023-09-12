<?php
$servername = "localhost";
$database = "hospital";

$conn = new mysqli($servername, $database);

// Establece la conexión a la base de datos (ya explicado en la respuesta anterior).

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nombre_area'])) {
    $nombre_area = $_POST['nombre_area'];

    // Realiza la inserción en la tabla 'areas'.
    $sql = "INSERT INTO areas (nombre) VALUES ('$nombre_area')";

    if ($conn->query($sql) === TRUE) {
        echo "Área agregada con éxito.";
    } else {
        echo "Error al agregar el área: " . $conn->error;
    }
}

$conn->close();

?>
