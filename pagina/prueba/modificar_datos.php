<?php
$datos_bd = mysqli_connect("localhost", "root", "", "conectar_db") or exit ("No se puede conectar con la base de datos");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $materia = $_POST["materia"];
    $semestre1_r1 = $_POST["semestre1_r1"];
    $semestre1_r2 = $_POST["semestre1_r2"];
    $semestre1_r3 = $_POST["semestre1_r3"];
    $semestre2_r1 = $_POST["semestre2_r1"];
    $semestre2_r2 = $_POST["semestre2_r2"];
    $semestre2_r3 = $_POST["semestre2_r3"];
    $nota_final = $_POST["nota_final"];

    // Preparar y ejecutar la consulta para actualizar el registro por su ID
    $actualizar = "UPDATE notas SET semestre1_r1='$semestre1_r1', semestre1_r2='$semestre1_r2', semestre1_r3='$semestre1_r3',
    semestre2_r1='$semestre2_r1', semestre2_r2='$semestre2_r2', semestre2_r3='$semestre2_r3', nota_final='$nota_final'
    WHERE materia='$materia'";
if (mysqli_query($conexion, $actualizar)) {
    echo "Registro modificado exitosamente";
    } else {
        echo "Error al modificar el registro: " . mysqli_error($datos_bd);
    }
}
?>
