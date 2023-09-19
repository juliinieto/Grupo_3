<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="ficha.css">
    <title>Ficha Médica</title>
</head>
<body>
<?php include 'header.php'; ?>
    <h1>Ficha Médica</h1>
    
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

    // Consultar todos los pacientes en la base de datos
    $sql = "SELECT * FROM pacientes";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Mostrar datos de los pacientes con el mismo estilo
        while ($row = $result->fetch_assoc()) {
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
        }
    } else {
        echo "No se encontraron registros en la base de datos.";
    }

    // Cerrar la conexión
    $conn->close();
    ?>
      <?php include 'footer.php'; ?>
</body>
</html>
