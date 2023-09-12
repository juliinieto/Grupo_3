<!DOCTYPE html>
<html>
<head>
    <title>Ficha de Pacientes</title>
</head>
<body>
    
        
        <?php include "conexion.php";?>

    <h1>Ficha de Pacientes</h1>

    <h2>Agregar Nuevo Paciente</h2>
    <form method="POST" action="guardar_datos.php">
    
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" required><br>

        <label for="diagnostico">Diagnóstico:</label>
        <input type="text" name="diagnostico" required><br>

        <label for="tratamiento">Tratamiento:</label>
        <input type="text" name="tratamiento" required><br>

        <label for="alergias">Alergias:</label>
        <input type="text" name="alergias"><br>

        <label for="ubicacion">Ubicación:</label>
        <input type="text" name="ubicacion" required><br>

        <label for="enfermero">Enfermero asignado:</label>
        <input type="text" name="enfermero" required><br>

        <input type="submit" value="Agregar Paciente">
    </form>

</body>
</html>
