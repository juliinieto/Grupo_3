<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de Alumnos</title>
</head>
<body>
    <h1>Agregar Alumno</h1>
    <form action="procesar_agregar_alumno.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required><br>
        <label for="dni">DNI:</label>
        <input type="text" name="dni" id="dni" required><br>
        <label for="curso">Curso:</label>
        <input type="text" name="curso" id="curso" required><br>
        <label for="turno">Turno:</label>
        <input type="text" name="turno" id="turno" required><br>
        <input type="submit" value="Agregar Alumno">
    </form>
</body>
</html>
