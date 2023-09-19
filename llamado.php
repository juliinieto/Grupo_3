<!DOCTYPE html>
<html>
<head>
    <title>Registro de Llamados</title>
    <link rel="stylesheet" type="text/css" href="llamado.css">

</head>
<body>
    <h1>Registro de Llamados</h1>

    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    // Conexión a la base de datos (cambia estos valores según tu configuración)
    $datos_bd = mysqli_connect("localhost", "root", "", "registro_llamados") or exit ("No se puede conectar con la Base de datos");


    // Verificar la conexión
    if (mysqli_connect_errno()) {
        die("Error en la conexión: " . mysqli_connect_error());
    }

// Procesar el formulario de registro
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["tipoLlamado"]) && isset($_POST["estadoLlamado"]) && isset($_POST["tiempoRespuesta"])) {
        $tipoLlamado = $_POST["tipoLlamado"];
        $estadoLlamado = $_POST["estadoLlamado"];
        $tiempoRespuesta = $_POST["tiempoRespuesta"];
        $fechaLlamado = date("Y-m-d H:i:s"); // Obtiene la fecha y hora actual en el formato adecuado

   
        // Construir la consulta SQL correctamente
    $sql = "INSERT INTO llamados (tipo, estado, tiempo_respuesta, fecha_llamado) VALUES ('$tipoLlamado', '$estadoLlamado', $tiempoRespuesta, NOW())";


        if (mysqli_query($datos_bd, $sql)) {
            echo "Llamado registrado con éxito.";
        } else {
            echo "Error al registrar el llamado: " . mysqli_error($datos_bd);
        }
    } else {
        echo "Faltan datos en el formulario.";
    }
}





    // Contar llamados atendidos y no atendidos
    $sqlAtendidos = "SELECT COUNT(*) AS total FROM llamados WHERE estado = 'Atendido'";
    $resultadoAtendidos = mysqli_query($datos_bd, $sqlAtendidos);
    $filaAtendidos = mysqli_fetch_assoc($resultadoAtendidos);
    $totalAtendidos = $filaAtendidos["total"];

    $sqlNoAtendidos = "SELECT COUNT(*) AS total FROM llamados WHERE estado = 'No Atendido'";
    $resultadoNoAtendidos = mysqli_query($datos_bd, $sqlNoAtendidos);
    $filaNoAtendidos = mysqli_fetch_assoc($resultadoNoAtendidos);
    $totalNoAtendidos = $filaNoAtendidos["total"];

    // Calcular el tiempo promedio de respuesta para cada tipo de llamado (redondeado a enteros)
    $sqlPromedioNormal = "SELECT ROUND(AVG(tiempo_respuesta)) AS promedio FROM llamados WHERE tipo = 'Normal'";
    $resultadoPromedioNormal = mysqli_query($datos_bd, $sqlPromedioNormal);
    $filaPromedioNormal = mysqli_fetch_assoc($resultadoPromedioNormal);
    $promedioNormal = $filaPromedioNormal["promedio"];

    $sqlPromedioEmergencia = "SELECT ROUND(AVG(tiempo_respuesta)) AS promedio FROM llamados WHERE tipo = 'Emergencia'";
    $resultadoPromedioEmergencia = mysqli_query($datos_bd, $sqlPromedioEmergencia);
    $filaPromedioEmergencia = mysqli_fetch_assoc($resultadoPromedioEmergencia);
    $promedioEmergencia = $filaPromedioEmergencia["promedio"];


    // Cerrar la conexión
    mysqli_close($datos_bd);
    ?>

    
    <h2>Registrar Nuevo Llamado:</h2>
    <form method="post">
    <label for="tipoLlamado">Tipo de Llamado:</label>
<select name="tipoLlamado" id="tipoLlamado">
    <option value="Normal">Normal</option>
    <option value="Emergencia">Emergencia</option>
</select><br><br>

<label for="estadoLlamado">Estado del Llamado:</label>
<select name="estadoLlamado" id="estadoLlamado">
    <option value="Atendido">Atendido</option>
    <option value="No Atendido">No Atendido</option>
</select><br><br>

<label for="tiempoRespuesta">Tiempo de Respuesta (minutos):</label>
<input type="number" name="tiempoRespuesta" id="tiempoRespuesta" required><br><br>

        <input type="submit" value="Registrar Llamado">
      

    

    <h2>Estadísticas de Llamados:</h2>
    <p>Total de Llamados Atendidos: <?php echo $totalAtendidos; ?></p>
    <p>Total de Llamados No Atendidos: <?php echo $totalNoAtendidos; ?></p>
    <p>Tiempo Promedio de Respuesta para Llamados Normales: <?php echo $promedioNormal; ?> minutos</p>
    <p>Tiempo Promedio de Respuesta para Llamados de Emergencia: <?php echo $promedioEmergencia; ?> minutos</p>
    </form>
  

</body>
</html>
