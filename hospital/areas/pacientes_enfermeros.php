<style>
        body {
            background-image: url('fondo.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            /* Añade más estilos según sea necesario */
        }
    </style>
<?php
// Lógica para asignar pacientes y enfermeros a áreas/zonas
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['paciente_id'], $_POST['enfermero_id'], $_POST['area_id'])) {
    $paciente_id = $_POST['paciente_id'];
    $enfermero_id = $_POST['enfermero_id'];
    $area_id = $_POST['area_id'];
    
    // Conectar a la base de datos "hospital"
    $conn = new mysqli("localhost","hospital");
    
    if ($conn->connect_error) {
        die("Error de conexión a la base de datos: " . $conn->connect_error);
    }
    
    // Verificar si el paciente, el enfermero y el área existen antes de realizar la asignación
    $verificar_paciente_sql = "SELECT id FROM pacientes WHERE id = $paciente_id";
    $verificar_enfermero_sql = "SELECT id FROM enfermeros WHERE id = $enfermero_id";
    $verificar_area_sql = "SELECT id FROM areas WHERE id = $area_id";
    
    $paciente_existente = $conn->query($verificar_paciente_sql)->fetch_assoc();
    $enfermero_existente = $conn->query($verificar_enfermero_sql)->fetch_assoc();
    $area_existente = $conn->query($verificar_area_sql)->fetch_assoc();
    
    if (!$paciente_existente) {
        echo "El paciente con ID $paciente_id no existe.";
    } elseif (!$enfermero_existente) {
        echo "El enfermero con ID $enfermero_id no existe.";
    } elseif (!$area_existente) {
        echo "El área con ID $area_id no existe.";
    } else {
        // Realizar la asignación del paciente, enfermero y área
        $asignacion_sql = "UPDATE pacientes SET enfermero_asignado = $enfermero_id, ubicacion = $area_id WHERE id = $paciente_id";
        
        if ($conn->query($asignacion_sql) === TRUE) {
            echo "Asignación realizada con éxito.";
        } else {
            echo "Error al realizar la asignación: " . $conn->error;
        }
    }
    
    $conn->close();
}
?>

<!-- Formulario para asignar pacientes, enfermeros y áreas/zonas -->
<form method="post">
    <label for="paciente_id">ID del Paciente:</label>
    <input type="text" name="paciente_id" required>
    <label for="enfermero_id">ID del Enfermero:</label>
    <input type="text" name="enfermero_id" required>
    <label for="area_id">ID del Área o Zona:</label>
    <input type="text" name="area_id" required>
    <input type="submit" value="Asignar Paciente, Enfermero y Área">
</form>
