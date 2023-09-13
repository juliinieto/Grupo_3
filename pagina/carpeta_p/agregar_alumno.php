<!DOCTYPE html>
<html>
<head>
    <title>Administrar Alumnos</title>
    <link rel="stylesheet" href="style.css"> <!-- Asegúrate de que la ruta al archivo de estilos sea correcta -->
</head>
<body>
    <header>
        <h1>Administrar Alumnos Autorizados</h1>
    </header>
    <section class="container">
        <h2>Agregar Nuevo Alumno</h2>
        <form action="guardar_alumno.php" method="POST">
            <label for="nombre">Nombre del Alumno:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>
            <label for="documento">Documento del Alumno:</label>
            <input type="text" id="documento" name="documento" required><br><br>
            <input type="submit" value="Agregar Alumno">
        </form>
    </section>
</body>
</html>
