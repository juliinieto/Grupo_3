<!DOCTYPE html>
<html>
<head>
    <title>Asignación de Pacientes</title>
</head>
<body>
    <h1>Asignación de Pacientes a Áreas</h1>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="paciente">Nombre del Paciente:</label>
        <input type="text" name="paciente" required><br>

        <label for="area">Área:</label>
        <select name="area" required>
            <option value="Emergencia">Emergencia</option>
            <option value="Pediatría">Pediatría</option>
            <option value="Emergencia">Emergencia</option>
            <option value="Pediatría">Pediatría</option>
            <option value="Emergencia">Emergencia</option>
            <option value="Pediatría">Pediatría</option>
            <option value="Emergencia">Emergencia</option>
            <option value="Pediatría">Pediatría</option>
            <option value="Emergencia">Emergencia</option>
            <option value="Pediatría">Pediatría</option>
            <!-- Agrega más opciones de áreas si es necesario -->
        </select><br>

        <input type="submit" name="submit" value="Asignar Paciente">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="enfermero">Nombre del Enfermero:</label>
            <input type="text" name="enfermero" required><br>

            <label for="enfermero_area">Área del Enfermero:</label>
            <select name="enfermero_area" required>
                <option value="Emergencia">Emergencia</option>
                <option value="Pediatría">Pediatría</option>
                <!-- Agrega más opciones de áreas si es necesario -->
            </select><br>

            <input type="submit" name="submit_enfermero" value="Asignar Enfermero">
        </form>


         elseif (isset($_POST["submit_enfermero"])) {
                // Asignación de Enfermeros
                $enfermero = $_POST["enfermero"];
                $enfermeroArea = $_POST["enfermero_area"];

                // Insertar el área del enfermero si no existe
                $stmt = $db->prepare("INSERT INTO areas (nombre) VALUES (:enfermero_area)");
                $stmt->bindParam(':enfermero_area', $enfermeroArea);
                $stmt->execute();

                // Obtener el ID del área del enfermero
                $areaIdEnfermero = $db->lastInsertId();

                // Insertar al enfermero
                $stmt = $db->prepare("INSERT INTO enfermeros (nombre, area_id) VALUES (:enfermero, :area_id)");
                $stmt->bindParam(':enfermero', $enfermero);
                $stmt->bindParam(':area_id', $areaIdEnfermero);
                $stmt->execute();
            }
        }

    ?>
    <h2>Pacientes por Área:</h2>
    <?php
    // Consulta y muestra la lista de pacientes por área
    $stmt = $db->prepare("SELECT a.nombre AS area, p.nombre AS paciente FROM areas a LEFT JOIN pacientes p ON a.id = p.area_id");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $row) {
        echo "Área: " . $row["area"] . "<br>";
        echo "- " . $row["paciente"] . "<br>";
    }
    ?>
    <h2>Enfermeros por Área:</h2>
    <?php
    $stmt = $db->prepare("SELECT a.nombre AS area, e.nombre AS enfermero FROM areas a LEFT JOIN enfermeros e ON a.id = e.area_id");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $row) {
        echo "Área: " . $row["area"] . "<br>";
        echo "- Enfermero: " . $row["enfermero"] . "<br>";
    }
    ?>


</body>
</html>