<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Boletín Universitario</title>
</head>
<body>
    <header>
        <h1>Boletín </h1>
    </header>

    
    
    <section class="alumno-info">
        <h2>Información del Alumno</h2>
        <div class="info-row">
            <p><strong>Nombre:</strong> Virginia Nieto </p>
            <p><strong>DNI:</strong> 46225369</p>
            <p><strong>Curso:</strong> Septimo B</p>
            <p><strong>Turno:</strong> Tarde</p>
        </div>
    </section>
    <section class="notas">
        <h2>Mis Notas</h2>
        <table>
            <tr>
                <th rowspan="2">Materia</th>
                <th colspan="3">Semestre 1</th>
                <th colspan="3">Semestre 2</th>
                <th rowspan="2">Nota Final</th>
                <th rowspan="2">Editar</th>


            </tr>
            <tr>
                <th>R-1</th>
                <th>R-2</th>
                <th>R-3</th>
                <th>R-1</th>
                <th>R-2</th>
                <th>R-3</th>
            </tr>
            
            <?php
            // Conexión a la base de datos
            $datos_bd = mysqli_connect("localhost", "root", "", "conectar_db") or exit ("No se puede conectar con la base de datos");


            // Consulta para obtener los datos de la tabla
            $consulta = "SELECT * FROM `notas` ";
            $resultado = mysqli_query($datos_bd, $consulta);

            // Imprimir filas de la tabla con los datos de la base de datos
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>" . $fila['materia'] . "</td>";
                echo "<td><span class='edit-value'>" . $fila['semestre1_r1'] ;
                echo "<td><span class='edit-value'>" . $fila['semestre1_r2'];
                echo "<td><span class='edit-value'>" . $fila['semestre1_r3'] ;
                echo "<td><span class='edit-value'>" . $fila['semestre2_r1'] ;
                echo "<td><span class='edit-value'>" . $fila['semestre2_r2'] ;
                echo "<td><span class='edit-value'>" . $fila['semestre2_r3'] ;
                echo "<td><span class='edit-value'>" . $fila['nota_final'] ;
                echo "<td><a href='editar.php?id=" . $fila['id'] . "' class='edit-button'>Editar</a></td>";
                echo "</tr>";
            }

            // Liberar el resultado y cerrar la conexión

            ?>
        </table>
    </section>
    
    
    <section class="inasistencias">
        <h2>Inasistencias</h2>
        <table>
            <tr>
                <th>Inasistencias Justificadas</th>
                <th>Inasistencias Injustificadas</th>
                <th>Inasistencias totales</th>
                <th>Editar</th>

            </tr>
            <?php
            // Conexión a la base de datos
            $datos_bd = mysqli_connect("localhost", "root", "", "conectar_db") or exit ("No se puede conectar con la base de datos");
            
            // Consulta para obtener los datos de inasistencias
            $consulta_inasistencias = "SELECT * FROM `inasistencias`";
            $resultado_inasistencias = mysqli_query($datos_bd, $consulta_inasistencias);
            
            while ($fila_inasistencias = mysqli_fetch_assoc($resultado_inasistencias)) {
                echo "<tr>";
                echo "<td>" . $fila_inasistencias['inasistencias_justificadas'] . "</td>";
                echo "<td>" . $fila_inasistencias['inasistencias_no_justificadas'] . "</td>";
                echo "<td>" . $fila_inasistencias['inasistencias_totales'] . "</td>";
                echo "<td><a href='prueba/editar_inas.php?id=" . $fila['id'] . "' class='edit-button'>Editar</a></td>";

                echo "</tr>";
            }
            
            // Liberar el resultado
            mysqli_free_result($resultado_inasistencias);
            ?>
         </table>

    <section class="Previas">
    <h2>Previas</h2>

        <table>
            <tr>
                <th>Materias</th>
                <th>Editar</th>

            
            </tr>
           
           

            <?php
            // Conexión a la base de datos
            $datos_bd = mysqli_connect("localhost", "root", "", "conectar_db") or exit ("No se puede conectar con la base de datos");
            
            // Consulta para obtener los datos de inasistencias
            $consulta_inasistencias = "SELECT * FROM `previas`";
            $resultado_inasistencias = mysqli_query($datos_bd, $consulta_inasistencias);
            
            while ($fila_inasistencias = mysqli_fetch_assoc($resultado_inasistencias)) {
                echo "<tr>";
                echo "<td>" . $fila_inasistencias['materia'] . "</td>";
                echo "<td><a href='editar.php?id=" . $fila['id'] . "' class='edit-button'>Editar</a></td>";

                echo "</tr>";
            }
            
            // Liberar el resultado
            mysqli_free_result($resultado_inasistencias);
            ?>    
        </table>
    </section>

    
   
</body>
</html>
