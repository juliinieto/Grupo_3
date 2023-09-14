<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ficha medica</title>
</head>
    <title>Lista de fichas medica</title>
<body>
    <h1>Lista de fichas medica</h1>

    <button onclick="location.href='agregar_ficha.php'">Agregar Paciente</button>

    <ul>
        <div style="display: flex;">
            <?php
            $carpetas = ["julieta nieto", "leo villarreal", "vir nieto", "camila allende", "emy baigorria", "yohana vaca", "eri lucero", "franco salvatierra", "milena colmenares", "guada vaca"];

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
</body>
</html>
