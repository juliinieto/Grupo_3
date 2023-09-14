<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "hospital_bd";

$conn = new mysqli($servername, $username, $password, $database);


// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}

// Obtener el ID del paciente desde la URL
if (isset($_GET["id"])) {
    $id_paciente = $_GET["id"];
} else {
    die("ID de paciente no proporcionado.");
}

// Consultar la ficha médica del paciente
$sql = "SELECT * FROM pacientes WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id_paciente);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    die("No se encontraron registros para el ID de paciente proporcionado.");
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ficha Médica Completa</title>
    <link rel="stylesheet" type="text/css" href="ficha.css">
</head>
<body>
    <h1>Ficha Médica Completa</h1>
    <div class="ficha">
        <p><strong>Nombre:</strong> <?php echo $row["nombre"]; ?></p>
        <p><strong>Fecha de Nacimiento:</strong> <?php echo $row["fecha_nacimiento"]; ?></p>
        <p><strong>Género:</strong> <?php echo $row["genero"]; ?></p>
        <p><strong>Dirección:</strong> <?php echo $row["direccion"]; ?></p>
        <p><strong>Teléfono:</strong> <?php echo $row["telefono"]; ?></p>
        <p><strong>Persona de Contacto:</strong> <?php echo $row["persona_contacto"]; ?></p>
        <p><strong>Antecedentes Médicos:</strong> <?php echo $row["antecedentes_medicos"]; ?></p>
        <p><strong>Medicamentos Actuales:</strong> <?php echo $row["medicamentos_actuales"]; ?></p>
        <p><strong>Alergias:</strong> <?php echo $row["alergias"]; ?></p>
        <p><strong>Resultados de Exámenes:</strong> <?php echo $row["resultados_examenes"]; ?></p>
        <p><strong>Notas de Progreso:</strong> <?php echo $row["notas_progreso"]; ?></p>
        <p><strong>Plan de Tratamiento:</strong> <?php echo $row["plan_tratamiento"]; ?></p>
    </div>
</body>
</html>
