<?php
// procesar_agregar_alumno.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $dni = $_POST['dni'];
    $curso = $_POST['curso'];
    $turno = $_POST['turno'];

    // Conexión a la base de datos
    $datos_bd = mysqli_connect("localhost", "root", "", "conectar_db") or exit("No se puede conectar con la base de datos");

    // Consulta para insertar los datos del alumno
    $consulta_insertar = "INSERT INTO datos_estudiantes (nombre, dni, curso, turno) VALUES ('$nombre', '$dni', '$curso', '$turno')";
    if (mysqli_query($datos_bd, $consulta_insertar)) {
        echo "Alumno agregado exitosamente.";
    } else {
        echo "Error al agregar el alumno: " . mysqli_error($datos_bd);
    }

    // Cerrar la conexión
    mysqli_close($datos_bd);
}
?>
