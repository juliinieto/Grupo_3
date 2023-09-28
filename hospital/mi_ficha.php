<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $dni = $_POST["dni"];

    // Conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "hospital_bd";

    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("La conexión a la base de datos falló: " . $conn->connect_error);
    }

    // Consultar la ficha médica del paciente
    $sql = "SELECT * FROM pacientes WHERE nombre = ? AND dni = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $nombre, $dni);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nombre_paciente = $row["nombre"];
        $fechaNacimiento = $row["fecha_nacimiento"];
        $genero = $row["genero"];
        $direccion = $row["direccion"];
        $telefono = $row["telefono"];
        $personaContacto = $row["persona_contacto"];
        $antecedentesMedicos = $row["antecedentes_medicos"];
        $medicamentosActuales = $row["medicamentos_actuales"];
        $alergias = $row["alergias"];
        $resultadosExamenes = $row["resultados_examenes"];
        $notasProgreso = $row["notas_progreso"];
        $planTratamiento = $row["plan_tratamiento"];
    } else {
        echo "No se encontraron registros para el nombre y DNI proporcionados.";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mi Ficha</title>
    <link rel="stylesheet" type="text/css" href="MIA.css">
</head>
<body>
<?php include 'headerP.php'; ?>


<h1>Mi Ficha Médica</h1>
<form method="post" action="mi_ficha.php">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required><br>
        
    <label for="dni">DNI:</label>
    <input type="text" name="dni" required><br>

    <input type="submit" value="Buscar Ficha">
</form>

<?php
// Mostrar la ficha médica si se encontró en la base de datos
if (isset($row)) {
    echo "<h1>Ficha Médica de $nombre_paciente</h1>";
    echo "<div class='ficha'>";
    echo "<p><strong>Nombre:</strong> " . $row["nombre"] . "</p>";
    echo "<p><strong>Fecha de Nacimiento:</strong> " . $row["fecha_nacimiento"] . "</p>";
    echo "<p><strong>Género:</strong> " . $row["genero"] . "</p>";
    echo "<p><strong>Dirección:</strong> " . $row["direccion"] . "</p>";
    echo "<p><strong>Teléfono:</strong> " . $row["telefono"] . "</p>";
    echo "<p><strong>Persona de Contacto:</strong> " . $row["persona_contacto"] . "</p>";
    echo "<p><strong>Antecedentes Médicos:</strong> " . $row["antecedentes_medicos"] . "</p>";
    echo "<p><strong>Medicamentos Actuales:</strong> " . $row["medicamentos_actuales"] . "</p>";
    echo "<p><strong>Alergias:</strong> " . $row["alergias"] . "</p>";
    echo "<p><strong>Resultados de Exámenes:</strong> " . $row["resultados_examenes"] . "</p>";
    echo "<p><strong>Notas de Progreso:</strong> " . $row["notas_progreso"] . "</p>";
    echo "<p><strong>Plan de Tratamiento:</strong> " . $row["plan_tratamiento"] . "</p>";
    echo "</div>";

    echo '<form method="post" action="generar_pdf.php">';
    echo '<input type="hidden" name="nombre" value="' . $row["nombre"] . '">';
    echo '<input type="hidden" name="dni" value="' . $row["dni"] . '">';
    echo '<input type="submit" name="descargar" value="Descargar Ficha">';
    echo '</form>';
}
?>

</body>
</html>
