<!DOCTYPE html>
<html>
<head>
    <title>Administración Hospitalaria</title>
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
    <?php include "conexion.php";?>
    
    <h1>Administración Hospitalaria</h1>

    <h2>Agregar Área</h2>
    <form action="agregar_arear.php" method="POST">
        <label for="nombre_area">Nombre del Área:</label>
        <input type="text" id="nombre_area" name="nombre_area" required>
        <input type="submit" value="Agregar Área">
    </form>
    <h2>Agregar enfermero</h2>
    <form action="agregar_enfermero.php" method="POST">
        <label for="nombre_enfermero">Nombre del enfermero:</label>
        <input type="text" id="nombre_enfermero" name="nombre_enfermero" required>
        <input type="submit" value="Agregar">
    </form>
    <h2>Agregar paciente</h2>
    <form action="agregar_paciente.php" method="POST">
        <label for="nombre_paciente">Nombre del paciente:</label>
        <input type="text" id="nombre_paciente" name="nombre_paciente" required>
        <input type="submit" value="Agregar">
    </form>
    <h2>Seleccionar Área</h2>
    <form action="procesar_seleccion.php" method="POST">
        <label for="id_area">Área:</label>
        <select id="id_area" name="id_area">
        <option value="">Seleccione un área</option>
        </select>
        <input type="submit" value="Seleccionar">
    </form>

    <h2>Asignar Enfermero a Paciente y Área</h2>
    <form action="enfermero_area.php" method="POST">
        <label for="id_enfermeros">ID del Enfermero:</label>
        <input type="text" id="id_enfermeros" name="id_enfermeros" required>
        <label for="id_paciente">ID del Paciente:</label>
        <input type="text" id="id_paciente" name="id_paciente" required>
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
