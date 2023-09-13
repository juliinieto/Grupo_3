<?php
$datos_bd = mysqli_connect("localhost", "root", "", "conectar_db") or die("No se puede conectar con la base de datos");

$role = $_POST["role"];
$nombre_apellido = $_POST["nombre_apellido"];
$dni = $_POST["dni"];

// Verificar si los datos ingresados coinciden con los registros de alumnos autorizados
$consulta = "SELECT * FROM alumnos_autorizados WHERE documento = '$dni' AND nombre = '$nombre_apellido'";
$resultado = mysqli_query($datos_bd, $consulta);

if (mysqli_num_rows($resultado) === 0) {
    header("Location: acceso_denegado.php");
    exit();
}

$insertar = "INSERT INTO usuarios (rol, nombre_apellido, dni) VALUES ('$role', '$nombre_apellido', '$dni')";
if (mysqli_query($datos_bd, $insertar)) {
    echo "Datos insertados correctamente";
} else {
    echo "Error al insertar datos: " . mysqli_error($datos_bd);
}

mysqli_close($datos_bd);
header("Location: carpeta_p/cami.php");

exit();


?>
