<?php
// Conexión a la base de datos (esto es solo un ejemplo, debes configurar tu propia base de datos)
$servername = "localhost";
// Cambia esto a tu contraseña de la base de datos
$dbname = "hospital"; // Cambia esto al nombre de tu base de datos

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Procesar el formulario de configuración
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $accion = $_POST["accion"];

    if ($accion == "asignar_paciente") {
        $id_paciente = $_POST["id_paciente"];
        $nombre_area = $_POST["nombre_area"];

        // Validar que el área seleccionada esté en la lista predefinida
        $areas_validas = [
            "Anestesiología", "Cardiología", "Cuidados Intensivos", "Digestivo",
            "Hematología", "Neumología", "Oncología", "Pediatría/Neonatología",
            "Rehabilitación", "Urgencias", "Cirugía General y Digestiva",
            "Cirugía Ortopédica y Traumatología", "Dermatología", "Ginecología y Obstetricia",
            "Oftalmología", "Otorrinolaringología", "Urología"
        ];

        if (!in_array($nombre_area, $areas_validas)) {
            echo "Área no válida.";
        } else {
            // Asignar paciente a un área en la base de datos
            $sql = "UPDATE pacientes SET id_area = (SELECT id FROM areas WHERE nombre = '$nombre_area') WHERE id = $id_paciente";
            if ($conn->query($sql) === TRUE) {
                echo "Paciente asignado al área con éxito.";
            } else {
                echo "Error al asignar paciente: " . $conn->error;
            }
        }
    } elseif ($accion == "asignar_enfermero") {
        // Código para asignar enfermero a un paciente
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>