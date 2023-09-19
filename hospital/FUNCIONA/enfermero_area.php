<?php
$servername = "localhost";

$database = "hospital";

$conn = new mysqli($servername, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Establece la conexión a la base de datos (ya explicado en la respuesta anterior).

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['enfermero_id']) && isset($_POST['paciente_id'])) {
    $enfermero_id = $_POST['enfermero_id'];
    $paciente_id = $_POST['paciente_id'];

    // Realiza la inserción en la tabla 'asignaciones'.
    $sql = "INSERT INTO asignaciones (enfermero_id, paciente_id) VALUES ($enfermero_id, $paciente_id)";

    if ($conn->query($sql) === TRUE) {
        echo "Enfermero asignado al paciente con éxito.";
    } else {
        echo "Error al asignar al enfermero al paciente: " . $conn->error;
    }
}

$conn->close();
?>
