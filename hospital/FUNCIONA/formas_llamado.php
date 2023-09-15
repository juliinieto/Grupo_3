<?php
$servername = "localhost";

$database = "hospital";

$conn = new mysqli($servername, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Establece la conexión a la base de datos (ya explicado en la respuesta anterior).

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nombre_forma_llamado'])) {
    $nombre_forma_llamado = $_POST['nombre_forma_llamado'];

    // Realiza la inserción en la tabla 'formas_llamado'.
    $sql = "INSERT INTO formas_llamado (nombre) VALUES ('$nombre_forma_llamado')";

    if ($conn->query($sql) === TRUE) {
        echo "Forma de llamado configurada con éxito.";
    } else {
        echo "Error al configurar la forma de llamado: " . $conn->error;
    }
}

$conn->close();
?>
