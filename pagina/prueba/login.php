<?php
session_start();

// Verificar las credenciales y redirigir al usuario a la página de cursos si son válidas.

// Si las credenciales son válidas, establecer la sesión del profesor.
$_SESSION['teacher_id'] = $teacher_id;

header("Location: courses.php");
exit();
?>
