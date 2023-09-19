<!DOCTYPE html>
<html>
<head>
    <title>Asignación de enfermeros</title>
    <style>
        body {
            background-image: url('fondo.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            /* Añade más estilos según sea necesario */
        }
    </style>
</head>
<body>
    <h1>Asignación de enfermeros a Áreas</h1>
    <?php include "conexion.php"; ?>
    <form method="post" action="asignar_area_e.php">
        <label for="enfermero">Nombre del enfermero:</label>
        <input type="text" name="enfermero" required><br>

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

        <input type="submit" name="submit" value="Asignar enfermero"> 
    </form>
    
    <h2>Enfermeros por Área:</h2>
    <?php
    $stmt = $db->prepare("SELECT a.nombre AS area, e.nombre AS enfermero FROM areas a LEFT JOIN enfermeros e ON a.id = e.area_id");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $row) {
        echo "Área: " . $row["area"] . "<br>";
        echo "Enfermero: " . $row["enfermero"] . "<br>";
    }
    ?>

</body>
</html>