<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lista de fichas médicas</title>
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
    <title>Lista de fichas medica</title>
<body>
<?php include 'header.php'; ?>
    <h1>Lista de fichas medica</h1>

    <button onclick="location.href='agregar_ficha.php'">Agregar Paciente</button>

    <ul>
        <div style="display: flex;">
            <?php
            $carpetas = ["julieta nieto", "leonardo villarreal", "vir nieto", "camila allende", "Santiago Miras", "yohana vaca", "eri lucero", "franco salvatierra", "milena colmenares", "guadalupe vaca"];

            foreach ($carpetas as $carpeta) {
                if (count($carpetas) / 2 === array_search($carpeta, $carpetas)) {
                    echo '</div><div style="display: flex;">';
                }
                $carpeta_url = urlencode($carpeta);
                echo '<li><a href="paciente_info.php?nombre=' . $carpeta_url . '">' . htmlspecialchars($carpeta) . '</a></li>';
            }
            ?>
        </div>
    </ul>
    <?php include 'footer.php'; ?>
</body>
</html>
