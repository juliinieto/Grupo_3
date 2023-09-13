<?php
$nombre_alumno = $_GET['nombre'];

if ($nombre_alumno === "julieta nieto") {
    header("Location: juli.php"); // Asegúrate de que boletin2.php esté en el mismo directorio
    exit();
} elseif ($nombre_alumno === "camila allende") {
    header("Location: cami.php"); // Asegúrate de que boletin3.php esté en el mismo directorio
    exit();
} elseif ($nombre_alumno === "leo villarreal") {
    header("Location: leo.php"); // Asegúrate de que boletin3.php esté en el mismo directorio
    exit();
} elseif ($nombre_alumno === "vir nieto") {
    header("Location: vir.php"); // Asegúrate de que boletin3.php esté en el mismo directorio
    exit();
} elseif ($nombre_alumno === "emy baigorria") {
    header("Location: emy.php"); // Asegúrate de que boletin3.php esté en el mismo directorio
    exit();
} elseif ($nombre_alumno === "yohana vaca") {
    header("Location: yoha.php"); // Asegúrate de que boletin3.php esté en el mismo directorio
    exit();
} elseif ($nombre_alumno === "eri lucero") {
    header("Location: eri.php"); // Asegúrate de que boletin3.php esté en el mismo directorio
    exit();
} elseif ($nombre_alumno === "franco salvatierra") {
    header("Location: franco.php"); // Asegúrate de que boletin3.php esté en el mismo directorio
    exit();
} elseif ($nombre_alumno === "milena colmenares") {
    header("Location: mile.php"); // Asegúrate de que boletin3.php esté en el mismo directorio
    exit();
} elseif ($nombre_alumno === "guada vaca") {
    header("Location: guada.php"); // Asegúrate de que boletin3.php esté en el mismo directorio
    exit();
} else {
    echo "Carpeta no encontrada";
}
?>
