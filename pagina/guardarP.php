<?php
$datos_bd = mysqli_connect("localhost", "root", "", "conectar_db") or die("No se puede conectar con la base de datos");

$role = $_POST["role"];
$nombre_apellido = $_POST["nombre_apellido"];
$dni = $_POST["dni"];
$email = $_POST["email"];

// Manejo de la imagen
if ($_FILES["foto_perfil"]["error"] == 0) {
    $foto_perfil = $_FILES["foto_perfil"]["name"];
    $ruta_temporal = $_FILES["foto_perfil"]["tmp_name"];
    $ruta_destino = "carpeta_destino/" . $foto_perfil; // Cambia "carpeta_destino" por la carpeta donde deseas almacenar las imágenes
    move_uploaded_file($ruta_temporal, $ruta_destino);
} else {
    $foto_perfil = ""; // Si no se cargó ninguna imagen, asigna una cadena vacía
}

$insertar = "INSERT INTO usuarios (rol, nombre_apellido, dni, clave) VALUES ('$role', '$nombre_apellido', '$dni', '$clave')";
if (mysqli_query($datos_bd, $insertar)) {
    echo "Datos insertados correctamente";
} else {    
    echo "Error al insertar datos: " . mysqli_error($datos_bd);
}

mysqli_close($datos_bd);
header("Location: carpeta_p/index.php");
?>
