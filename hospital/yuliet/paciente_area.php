<!DOCTYPE html>
<html>
<head>
    <title>Asignación de Pacientes</title>
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
    <form method="post" action="asignar_area_p.php">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" required><br>

        <label for="estado">Estado del Paciente:</label>
        <input type="text" name="estado_paciente" required><br>

        <label for="edad">Dni:</label>
        <input type="number" name="dni" required><br>

        <label for="area">Área:</label>
        <select name="area" required>
            <option value="Emergencia">Emergencia</option>
            <option value="Pediatría">Pediatría</option>
            <!-- Agrega más opciones de áreas si es necesario -->
        </select><br>

        <input type="submit" name="submit_paciente" value="Agregar Paciente">
    </form>
    

</body>
</html>