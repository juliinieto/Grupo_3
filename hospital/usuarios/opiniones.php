<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/opinion.css">
    
    <title>Caja de Comentarios</title>
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
    <main class="insertar">
        <h1>Ingresa tu nombre y deja tu opinión</h1>
        <form action="insertar_datos.php" method="POST">
            <div class="nombre">
                <label for="nom_ape">Nombre y apellido</label>
                <input type="text" maxlength="1000" name="nom_ape" id="nom_ape" placeholder="Nombre y apellido" required>
            </div>
            <div class="opinion">
                <label for="opinion">Opinión</label>
                <input type="text" maxlength="1000" name="opinion" id="opinion" placeholder="Opinión" required>
            </div>
            <div>
                <button type="submit">Enviar</button>
            </div>
        </form>
    </main>

    <h1>Caja de opiniones</h1>
    <?php
        include("conexion.php");
        $datos_bd = mysqli_connect("localhost", "root", "", "tres_pibesalpe") or exit("No se puede conectar con la Base de datos");
        $consulta = mysqli_query($datos_bd, "SELECT  * FROM opi_usuarios");
        while ($lista_consulta = mysqli_fetch_assoc($consulta)) {
        ?>
            <div class="consultas">
                <ul>
                    <p><?php echo $lista_consulta["nom_ape"]; ?></p>
                    <li><?php echo $lista_consulta["opinion"]; ?></li>
                </ul>
            </div>
        <?php
        }
        ?>
</body>
</html>
