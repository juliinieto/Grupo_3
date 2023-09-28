<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hospital Privado</title>
    <link rel="stylesheet" type="text/css" href="css/registro.css">
    <link rel="icon" href="logo.png" type="logo.png">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            background-image: url('fondo.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
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
