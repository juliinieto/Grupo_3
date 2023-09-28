<html>
<head>
    <meta charset="UTF-8">
    <title>Áreas y Servicios del Hospital</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
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
    <div class="login-container">
        <h1>Iniciar Sesión</h1>
        <form action="validarmed.php" method="POST">
            <label for="nombre_usuario">Usuario:</label>
            <input type="text" name="nombre_usuario" required><br>
            <label for="contraseña">Contraseña:</label>
            <input type="password" name="password" required><br>
            <input type="submit" value="Iniciar Sesión">
        </form>
    </div>
</body>
</html>


