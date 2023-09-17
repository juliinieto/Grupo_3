<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php"); // Redirigir a la página de inicio de sesión si no ha iniciado sesión
    exit();
}

// Verificar el rol del usuario (en este ejemplo, asumimos que los administradores tienen acceso a este panel)
if ($_SESSION['rol'] !== 'admin') {
    header("Location: acceso_denegado.php"); // Redirigir a una página de acceso denegado si no es administrador
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Panel de Control</title>
</head>
<body>
    <h1>Panel de Control</h1>
    <p>Bienvenido, <?php echo $_SESSION['usuario']; ?> (<?php echo $_SESSION['rol']; ?>)</p>

    <!-- Agrega aquí los elementos de la interfaz de usuario para el panel de control del administrador -->
    
    <a href="cerrar_sesion.php">Cerrar Sesión</a>
</body>
</html>
