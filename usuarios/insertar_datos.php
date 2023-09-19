<?php

$nom_ape= $_POST ['nom_ape'];
$opinion= $_POST ['opinion'];

$conexion = mysqli_connect("localhost", "root","","tres_pibesalpe")or exit ("no se puede conectar");

$insertar = "INSERT INTO opi_usuarios VALUES (NULL, '$nom_ape', '$opinion')";
echo $insertar;
mysqli_query($conexion,$insertar)or exit ("no guarda");
echo "opinion enviada";
header ("opiniones.php");

?>