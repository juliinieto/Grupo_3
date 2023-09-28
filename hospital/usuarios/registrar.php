<?php
// Conexión a la base de datos
$datos_bd = mysqli_connect("localhost","root","","hospital_bd") or exit ("No se puede conectar con la Base de datos");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $dni = $_POST['dni'];
    $telefono = $_POST['telefono'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    // Ejecutar la consulta para insertar el alumno en la base de datos
    $insertar_usuario = "INSERT INTO `login2` (`nombre`, `dni`, `telefono`, `usuario`, `contraseña`) VALUES ('$nombre', '$dni','$telefono','$usuario','$contraseña')";

    if (mysqli_query($datos_bd, $insertar_usuario)) {
        echo "Usuario agregado correctamente";
    } else {
        echo "Error al agregar el usuario: " . mysqli_error($datos_bd);
    }
}

// Cerrar la conexión a la base de datos
mysqli_close($datos_bd);
?>

