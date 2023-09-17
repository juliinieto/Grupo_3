<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Conexión a la base de datos
$datos_bd = mysqli_connect("localhost", "root", "", "registro_llamados") or exit ("No se puede conectar con la Base de datos");


if (mysqli_connect_errno()) {
    die("Error en la conexión: " . mysqli_connect_error());
}

// Consulta para obtener el tiempo de respuesta promedio
$queryTiempoRespuesta = "SELECT AVG(tiempo_respuesta) AS tiempo_promedio FROM llamados";
$resultadoTiempoRespuesta = $datos_bd->query($queryTiempoRespuesta);

if (!$resultadoTiempoRespuesta) {
    die("Error en la consulta de tiempo de respuesta promedio: " . $datos_bd->error);
}

// Obtener el tiempo de respuesta promedio
$tiempoPromedio = 0;
if ($fila = $resultadoTiempoRespuesta->fetch_assoc()) {
    $tiempoPromedio = $fila["tiempo_promedio"];
}

// Consulta para obtener la asignación de pacientes
$queryAsignacionPacientes = "SELECT genero, COUNT(*) AS cantidad FROM pacientes GROUP BY genero";
$resultadoAsignacionPacientes = $datos_bd->query($queryAsignacionPacientes);

if (!$resultadoAsignacionPacientes) {
    die("Error en la consulta de asignación de pacientes: " . $datos_bd->error);
}

// Crear un array para almacenar los datos de asignación de pacientes
$asignacionPacientesData = [];
while ($fila = $resultadoAsignacionPacientes->fetch_assoc()) {
    $asignacionPacientesData[] = [
        'genero' => $fila['genero'],
        'cantidad' => $fila['cantidad']
    ];
}

// Cerrar la conexión a la base de datos
$datos_bd->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Visualizador de Reportes</title>
    <!-- Incluir las bibliotecas de Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            background-image: url('fondo.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            /* Añade más estilos según sea necesario */
        }
    </style>
</head>
<body>
    <h1>Reporte de Gestión</h1>

    <!-- Gráfico de barras para el tiempo de respuesta promedio -->
    <div style="width: 50%;">
        <canvas id="graficoTiempoRespuesta"></canvas>
    </div>

    <!-- Tabla de asignación de pacientes -->
    <h2>Asignación de Pacientes por Género</h2>
    <table border="1">
        <tr>
            <th>Género</th>
            <th>Cantidad</th>
        </tr>
        <?php foreach ($asignacionPacientesData as $fila) { ?>
            <tr>
                <td><?php echo $fila['genero']; ?></td>
                <td><?php echo $fila['cantidad']; ?></td>
            </tr>
        <?php } ?>
    </table>

    <script>
        // Configurar el gráfico de barras
        var ctxTiempoRespuesta = document.getElementById('graficoTiempoRespuesta').getContext('2d');
        var tiempoRespuestaChart = new Chart(ctxTiempoRespuesta, {
            type: 'bar',
            data: {
                labels: ['Tiempo de Respuesta Promedio'],
                datasets: [{
                    label: 'Tiempo Promedio (minutos)',
                    data: [<?php echo $tiempoPromedio; ?>],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>

