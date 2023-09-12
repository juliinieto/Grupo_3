<?php
session_start();

// Verificar si el usuario ya está autenticado
if (isset($_SESSION['usuario'])) {
    header("Location: panel.php"); // Redirigir a la página principal si ya está autenticado
    exit();
}

// Verificar si se envió el formulario de registro
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recopilar los datos del formulario
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Aquí debes realizar la validación de los datos y asegurarte de que sean seguros antes de guardarlos en la base de datos

    // En un entorno de producción, guardar los datos en la base de datos de forma segura
    // Asume que tienes una conexión a la base de datos establecida previamente

    // Por ejemplo, podrías usar MySQLi para realizar la inserción segura
    // $hash_contrasena = password_hash($contrasena, PASSWORD_DEFAULT);
    // $stmt = $mysqli->prepare("INSERT INTO usuarios (nombre, usuario, contrasena) VALUES (?, ?, ?)");
    // $stmt->bind_param("sss", $nombre, $usuario, $hash_contrasena);
    // $stmt->execute();
    // $stmt->close();
    
    // Una vez registrado, redirige al usuario a la página de inicio de sesión
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registrarse</title>
</head>
<body>
    <h1>Registrarse</h1>
    <form method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" required><br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" required><br>
        <input type="submit" value="Registrarse">
    </form>
</body>
</html>
