<?php
// Conexión a la base de datos
$datos_bd = mysqli_connect("localhost", "root", "", "conectar_db") or die("No se puede conectar con la base de datos");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $documento = $_POST['documento'];

    // Ejecutar la consulta para insertar el alumno en la base de datos
    $insertar_alumno = "INSERT INTO alumnos_autorizados (nombre, documento) VALUES ('$nombre', '$documento')";
    
    if (mysqli_query($datos_bd, $insertar_alumno)) {
        echo "Alumno agregado correctamente";
    } else {
        echo "Error al agregar el alumno: " . mysqli_error($datos_bd);
    }
}

// Cerrar la conexión a la base de datos
mysqli_close($datos_bd);
?>
