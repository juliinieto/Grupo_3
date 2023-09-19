<?php
$servername = "localhost";

$database = "hospital";

$conn = new mysqli($servername, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Establece la conexión a la base de datos (ya explicado en la respuesta anterior).

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['paciente_id']) && isset($_POST['area_id'])) {
    $paciente_id = $_POST['paciente_id'];
    $area_id = $_POST['area_id'];

    // Realiza la actualización del campo 'area_id' en la tabla 'pacientes'.
    $sql = "UPDATE pacientes SET area_id = $area_id WHERE id = $paciente_id";

    if ($conn->query($sql) === TRUE) {
        echo "Paciente asignado al área con éxito.";
    } else {
        echo "Error al asignar al paciente al área: " . $conn->error;
    }
}

$conn->close();
?>
