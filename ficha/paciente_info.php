<?php
$nombre_alumno = $_GET['nombre'];

if ($nombre_alumno === "julieta nieto") {
    header("Location: ficha_completada.php"); // Asegúrate de que boletin2.php esté en el mismo directorio
    exit();
} elseif ($nombre_alumno === "camila allende") {
    header("Location: ficha_completada.php"); // Asegúrate de que boletin3.php esté en el mismo directorio
    exit();
} elseif ($nombre_alumno === "leo villarreal") {
    header("Location: ficha_completada.php"); // Asegúrate de que boletin3.php esté en el mismo directorio
    exit();
} elseif ($nombre_alumno === "vir nieto") {
    header("Location: ficha_completada.php"); // Asegúrate de que boletin3.php esté en el mismo directorio
    exit();
} elseif ($nombre_alumno === "emy baigorria") {
    header("Location: ficha_completada.php"); // Asegúrate de que boletin3.php esté en el mismo directorio
    exit();
} elseif ($nombre_alumno === "yohana vaca") {
    header("Location: ficha_completada.php"); // Asegúrate de que boletin3.php esté en el mismo directorio
    exit();
} elseif ($nombre_alumno === "eri lucero") {
    header("Location: ficha_completada.php"); // Asegúrate de que boletin3.php esté en el mismo directorio
    exit();
} elseif ($nombre_alumno === "franco salvatierra") {
    header("Location: ficha_completada.php"); // Asegúrate de que boletin3.php esté en el mismo directorio
    exit();
} elseif ($nombre_alumno === "milena colmenares") {
    header("Location: ficha_completada.php"); // Asegúrate de que boletin3.php esté en el mismo directorio
    exit();
} elseif ($nombre_alumno === "guada vaca") {
    header("Location: ficha_completada.php"); // Asegúrate de que boletin3.php esté en el mismo directorio
    exit();
} else {
    echo "Carpeta no encontrada";
}
?>
