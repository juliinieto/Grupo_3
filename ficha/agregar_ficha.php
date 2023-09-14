<?php

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

// Procesar el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $fechaNacimiento = $_POST["fecha_nacimiento"];
    $genero = $_POST["genero"];
    $direccion = $_POST["direccion"];
    $telefono = $_POST["telefono"];
    $personaContacto = $_POST["persona_contacto"];
    $antecedentesMedicos = $_POST["antecedentes_medicos"];
    $medicamentosActuales = $_POST["medicamentos_actuales"];
    $alergias = $_POST["alergias"];
    $resultadosExamenes = $_POST["resultados_examenes"];
    $notasProgreso = $_POST["notas_progreso"];
    $planTratamiento = $_POST["plan_tratamiento"];

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO pacientes (nombre, fecha_nacimiento, genero, direccion, telefono, persona_contacto, antecedentes_medicos, medicamentos_actuales, alergias, resultados_examenes, notas_progreso, plan_tratamiento) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssssss", $nombre, $fechaNacimiento, $genero, $direccion, $telefono, $personaContacto, $antecedentesMedicos, $medicamentosActuales, $alergias, $resultadosExamenes, $notasProgreso, $planTratamiento);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Registro exitoso.";
    } else {
        echo "Error al registrar el paciente: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="ficha.css">
    <title>Ficha Médica</title>
</head>
<body>
    <h1>Ficha Médica</h1>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nacimiento" required><br>

        <label for="genero">Género:</label>
        <input type="radio" name="genero" value="Masculino" required> Masculino
        <input type="radio" name="genero" value="Femenino" required> Femenino
        <input type="radio" name="genero" value="Otro" required> Otro<br>

        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion"><br>

        <label for="telefono">Teléfono:</label>
        <input type="tel" name="telefono"><br>

        <label for="persona_contacto">Persona de Contacto:</label>
        <input type="text" name="persona_contacto"><br>

        <label for="antecedentes_medicos">Antecedentes Médicos:</label>
        <textarea name="antecedentes_medicos" rows="4" cols="50"></textarea><br>

        <label for="medicamentos_actuales">Medicamentos Actuales:</label>
        <textarea name="medicamentos_actuales" rows="4" cols="50"></textarea><br>

        <label for="alergias">Alergias:</label>
        <textarea name="alergias" rows="4" cols="50"></textarea><br>

        <label for="resultados_examenes">Resultados de Exámenes:</label>
        <textarea name="resultados_examenes" rows="4" cols="50"></textarea><br>

        <label for="notas_progreso">Notas de Progreso:</label>
        <textarea name="notas_progreso" rows="4" cols="50"></textarea><br>

        <label for="plan_tratamiento">Plan de Tratamiento:</label>
        <textarea name="plan_tratamiento" rows="4" cols="50"></textarea><br>

        <input type="submit" value="Registrar">
    </form>
</body>
</html>
