<?php
include("conexion.php");

$nombre = $_POST['usuario'];
$password = $_POST['password'];

$log_consult = mysqli_query($datos_bd, "SELECT * FROM `login2` WHERE `usuario` = '$nombre' and `contraseña` ='$password'");
$lista_consulta = mysqli_fetch_assoc($log_consult);

if ($lista_consulta["usuario"] == $nombre) {
    header("Location:  /hospital/menu/menuP.php");
    exit; 
} else {
    echo "Usuario o contraseña incorrectos.";
}
?>