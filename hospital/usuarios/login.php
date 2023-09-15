<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="css/login.css">
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
    <div class="login-container">
        <h1>Iniciar Sesión</h1>
        <form action="validar.php" method="POST">
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" required><br>
            <label for="contraseña">Contraseña:</label>
            <input type="password" name="password" required><br>
            <input type="submit" value="Iniciar Sesión">
        </form>
    </div>
</body>
</html>


