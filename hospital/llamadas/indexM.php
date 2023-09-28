<!DOCTYPE html>
<html>
<head>
    <title>Visualizador de Reportes</title>
    <style>
        /* Estilos para la tabla */
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto; /* Centrar la tabla horizontalmente */
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        /* Estilos para el gráfico */
        canvas {
            display: block;
            margin: 20px auto; /* Centrar el gráfico horizontalmente */
        }
    </style>
    <link rel="stylesheet" type="text/css" href="llamado.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<?php include 'headerM.php'; ?>

    <h1>Visualizador de Reportes</h1>

    <?php
    // Conexión a la base de datos (cambia estos valores según tu configuración)
    $datos_bd = mysqli_connect("localhost", "root", "", "hospital_bd") or exit("No se puede conectar con la Base de datos");

    // Verificar la conexión
    if (mysqli_connect_errno()) {
        die("Error en la conexión: " . mysqli_connect_error());
    }

    // Recuperar datos de la base de datos para estadísticas generales
    $sql = "SELECT tipo, COUNT(*) as total, ROUND(AVG(tiempo_respuesta)) as promedio FROM llamados GROUP BY tipo";
    $result = mysqli_query($datos_bd, $sql);

    $tipos = array();
    $totales = array();
    $promedios = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $tipos[] = $row['tipo'];
        $totales[] = $row['total'];
        $promedios[] = $row['promedio'];
    }

    // Recuperar datos de la base de datos para estadísticas de atendidos y no atendidos
    $sqlAtendidos = "SELECT tipo, estado, COUNT(*) as total FROM llamados WHERE estado = 'Atendido' GROUP BY tipo, estado";
    $sqlNoAtendidos = "SELECT tipo, estado, COUNT(*) as total FROM llamados WHERE estado = 'No Atendido' GROUP BY tipo, estado";

    $resultAtendidos = mysqli_query($datos_bd, $sqlAtendidos);
    $resultNoAtendidos = mysqli_query($datos_bd, $sqlNoAtendidos);

    $atendidos = array();
    $noAtendidos = array();

    while ($row = mysqli_fetch_assoc($resultAtendidos)) {
        $atendidos[$row['tipo']] = $row['total'];
    }

    while ($row = mysqli_fetch_assoc($resultNoAtendidos)) {
        $noAtendidos[$row['tipo']] = $row['total'];
    }

    // Cerrar la conexión
    mysqli_close($datos_bd);
    ?>

    <!-- Aquí puedes mostrar las estadísticas en una tabla HTML -->
    <h2>Estadísticas de Llamados:</h2>
    <table>
        <tr>
            <th>Tipo de Llamado</th>
            <th>Total</th>
            <th>Atendidos</th>
            <th>No Atendidos</th>
            <th>Promedio Tiempo de Respuesta (minutos)</th>
        </tr>
        <?php for ($i = 0; $i < count($tipos); $i++) { ?>
            <tr>
                <td><?php echo $tipos[$i]; ?></td>
                <td><?php echo $totales[$i]; ?></td>
                <td><?php echo isset($atendidos[$tipos[$i]]) ? $atendidos[$tipos[$i]] : 0; ?></td>
                <td><?php echo isset($noAtendidos[$tipos[$i]]) ? $noAtendidos[$tipos[$i]] : 0; ?></td>
                <td><?php echo $promedios[$i]; ?></td>
            </tr>
        <?php } ?>
    </table>

    <!-- Aquí puedes agregar un gráfico de barras con Chart.js -->
    <h2>Gráfico de Llamados</h2>
    <canvas id="llamadosChart" width="400" height="200"></canvas>

    <script>
        // Configura los datos para el gráfico
        var ctx = document.getElementById('llamadosChart').getContext('2d');
        var llamadosChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($tipos); ?>,
                datasets: [{
                    label: 'Total de Llamados',
                    data: <?php echo json_encode($totales); ?>,
                    backgroundColor: ['rgba(75, 192, 192, 0.2)', 'rgba(255, 99, 132, 0.2)'],
                    borderColor: ['rgba(75, 192, 192, 1)', 'rgba(255, 99, 132, 1)'],
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








