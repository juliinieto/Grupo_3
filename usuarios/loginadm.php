<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="login-container">
        <h1>Iniciar Sesión</h1>
        <form action="validaradm.php" method="POST">
            <label for="nombre_usuario">Usuario:</label>
            <input type="text" name="nombre_usuario" required><br>
            <label for="contraseña">Contraseña:</label>
            <input type="password" name="password" required><br>
            <input type="submit" value="Iniciar Sesión">
        </form>
    </div>
</body>
</html>


