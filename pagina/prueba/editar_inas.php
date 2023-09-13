<?php
$datos_bd = mysqli_connect("localhost", "root", "", "conectar_db") or exit ("No se puede conectar con la base de datos");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $consulta_detalle = "SELECT * FROM notas WHERE id = $id";
    $resultado_detalle = mysqli_query($datos_bd, $consulta_detalle);
    $fila_detalle = mysqli_fetch_assoc($resultado_detalle);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nuevos_datos = array(
        "semestre1_r1" => $_POST["semestre1_r1"],
        "semestre1_r2" => $_POST["semestre1_r2"],
        "semestre1_r3" => $_POST["semestre1_r3"],
        "semestre2_r1" => $_POST["semestre2_r1"],
        "semestre2_r2" => $_POST["semestre2_r2"],
        "semestre2_r3" => $_POST["semestre2_r3"],


        // ... Otros campos ...
    );
    
    $actualizar = "UPDATE notas SET ";
    foreach ($nuevos_datos as $campo => $valor) {
        $actualizar .= "$campo = '$valor', ";
    }
    $actualizar = rtrim($actualizar, ', ');
    $actualizar .= " WHERE id = $id";
    
    if (mysqli_query($datos_bd, $actualizar)) {
        echo "Cambios guardados exitosamente";
    } else {
        echo "Error al guardar los cambios: " . mysqli_error($datos_bd);
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Editar Notas</title>
</head>
<body>
<h2>Editar Notas de <?php echo $fila_detalle['materia']; ?></h2>    
<form action="prueba/editar.php?id=<?php echo $id; ?>" method="POST">

       

        <label for="inasistencias_justificadas">inasistencias_justificadas:</label>
        <input type="text" id="inasistencias_justificadas" name="inasistencias_justificadas" value="<?php echo $fila_detalle['inasistencias_justificadas']; ?>" required><br><br>

        <label for="inasistencias_no_justificadas">inasistencias_no_justificadas:</label>
        <input type="text" id="inasistencias_no_justificadas" name="inasistencias_no_justificadas" value="<?php echo $fila_detalle['inasistencias_no_justificadas']; ?>" required><br><br>

        <label for="inasistencias_totales">inasistencias_totales:</label>
        <input type="text" id="inasistencias_totales" name="inasistencias_totales" value="<?php echo $fila_detalle['inasistencias_totales']; ?>" required><br><br>
        <input type="submit" value="Guardar cambios"><br><br>
    </form>
</body>
</html>
