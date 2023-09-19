<!DOCTYPE html>
<html>
<head>
    <title>Seguimiento de Llamadas</title>
</head>
<body>
    <h1>Seguimiento de Llamadas</h1>
    
    <form method="post">
        <label for="tipo">Tipo de llamada:</label>
        <select name="tipo" id="tipo">
            <option value="Normal">Normal</option>
            <option value="Emergencia">Emergencia</option>
        </select><br><br>
        
        <label for="atendida">¿Fue atendida?</label>
        <input type="radio" name="atendida" value="1" id="atendida">Sí
        <input type="radio" name="atendida" value="0" id="atendida">No<br><br>
        
        <label for="tiempo_respuesta">Tiempo de respuesta (minutos):</label>
        <input type="text" name="tiempo_respuesta" id="tiempo_respuesta"><br><br>
        
        <input type="submit" value="Registrar llamada">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tipo = $_POST['tipo'];
        $atendida = $_POST['atendida'];
        $tiempo_respuesta = $_POST['tiempo_respuesta'];

        // Validaciones adicionales pueden ir aquí
        
        // Registrar la llamada
        registrarLlamada($tipo, $atendida, $tiempo_respuesta);

        echo "Llamada registrada exitosamente.<br>";
    }

    $tiempo_promedio_normal = calcularTiempoPromedio('Normal');
    $tiempo_promedio_emergencia = calcularTiempoPromedio('Emergencia');

    echo "Tiempo promedio de respuesta para llamadas normales: $tiempo_promedio_normal minutos<br>";
    echo "Tiempo promedio de respuesta para llamadas de emergencia: $tiempo_promedio_emergencia minutos";
    ?>

</body>
</html>
