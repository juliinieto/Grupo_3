<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php"); // Redirigir a la página de inicio de sesión si no ha iniciado sesión
    exit();
}

// Lógica específica para el usuario genérico
?>

<!DOCTYPE html>
<html>
<head>
    <title>Panel de Usuario Genérico</title>
</head>
<body>
    <h1>Panel de Usuario Genérico</h1>
    <p>Bienvenido, <?php echo $_SESSION['usuario']; ?> (Usuario Genérico)</p>

    <!-- Agrega aquí los elementos de la interfaz de usuario para el panel de usuario genérico -->

    <a href="cerrar_sesion.php">Cerrar Sesión</a>
</body>
</html>
