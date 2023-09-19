
<?php
session_start();

// Destruir la sesión actual
session_destroy();

// Redirigir al usuario a la página de inicio de sesión u otra página principal
header("Location: login.php"); // Cambia esto si deseas redirigir a una página diferente
exit();
?>
bgdhrehrhbnvbbbb