<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Medico</title>
    <link rel="stylesheet" href="css/registro.css"> 
</head>
<body>
    <div class="container">
        <h1>Registrar Medico</h1>
        <form action="registrarmed.php" method="POST">

            <div class="form-group">
                <label for="nombre_usuario">Usuario:</label>
                <input type="text" name="nombre_usuario" id="nombre_usuario" required>
            </div>

            <div class="form-group">
                <label for="contraseña">Contraseña:</label>
                <input type="password" name="contraseña" id="contraseña" required>
            </div>

            <div class="form-group">
                <button type="submit">Registrarse</button>
            </div>
        </form>
    </div>
</body>
</html>
