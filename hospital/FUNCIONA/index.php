<!DOCTYPE html>
<html>
<head>
    <title>Administración Hospitalaria</title>
</head>
<body>
    <h1>Administración Hospitalaria</h1>

    <h2>Agregar Área</h2>
    <form action="agregar_arear.php" method="POST">
        <label for="nombre_area">Nombre del Área:</label>
        <input type="text" id="nombre_area" name="nombre_area" required>
        <input type="submit" value="Agregar Área">
    </form>

    <h2>Asignar Paciente a Área</h2>
    <form action="paciente_area.php" method="POST">
        <label for="paciente_id">ID del Paciente:</label>
        <input type="text" id="paciente_id" name="paciente_id" required>
        <label for="area_id">ID del Área:</label>
        <input type="text" id="area_id" name="area_id" required>
        <input type="submit" value="Asignar Paciente a Área">
    </form>

    <h2>Asignar Enfermero a Paciente y Área</h2>
    <form action="enfermero_area.php" method="POST">
        <label for="enfermero_id">ID del Enfermero:</label>
        <input type="text" id="enfermero_id" name="enfermero_id" required>
        <label for="paciente_id_enfermero">ID del Paciente:</label>
        <input type="text" id="paciente_id_enfermero" name="paciente_id" required>
        <input type="submit" value="Asignar Enfermero a Paciente">
    </form>

    <h2>Configurar Forma de Llamado</h2>
    <form action="formas_llamado.php" method="POST">
        <label for="nombre_forma_llamado">Nombre de la Forma de Llamado:</label>
        <input type="text" id="nombre_forma_llamado" name="nombre_forma_llamado" required>
        <input type="submit" value="Configurar Forma de Llamado">
    </form>
</body>
</html>
