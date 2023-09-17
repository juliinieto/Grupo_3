<?php
session_start();

// Verificar si el usuario ya está autenticado
if (isset($_SESSION['usuario'])) {
    header("Location: panel.php"); // Redirigir a la página principal si ya está autenticado
    exit();
}

// Verificar si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Aquí debes realizar la validación de las credenciales del usuario
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Compara las credenciales con las almacenadas en tu base de datos o sistema
    if ($usuario === 'usuario_admin' && $contrasena === 'contrasena_admin') {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['rol'] = 'admin'; // Asigna el rol del usuario, en este caso, administrador
        header("Location: panel.php"); // Redirigir al panel de administrador
        exit();
    } else {
        $mensaje_error = "Credenciales incorrectas"; // Mensaje de error si las credenciales son incorrectas
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
</head>
<body>
    <h1>Iniciar Sesión</h1>
    <?php
    if (isset($mensaje_error)) {
        echo "<p style='color: red;'>$mensaje_error</p>";
    }
    ?>
    <form method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" required><br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" required><br>
        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>
