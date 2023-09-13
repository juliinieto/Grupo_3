<!DOCTYPE html>
<html>
<head>
    <title>Crear Perfil de Profesor</title>
    <link rel="stylesheet" href="css/styles.css">
  
        
</head>
<body>
    <section>
        <nav>
            <?php include("cconexion.php"); ?>
        </nav>
        <div class="container">
            <h2>ingresar</h2>
            <form method="post" enctype="multipart/form-data" action="guardarP.php">
                <input type="hidden" name="role" value="2">
                <label for="nombre_apellido">Nombre y Apellido:</label>
                <input type="text" name="nombre_apellido" required><br>
                <label for="dni">DNI:</label>
                <input type="text" name="dni" required><br>
                <button   type="submit">Guardar Perfil</button><br>
            </form>
        </div>
    </section>
</body>
</html>
