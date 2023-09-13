<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">
    <header>
        <h1>Modificacion de boletin</h1>
    </header>
    
    <section>
        <h2>Modificar datos</h2>
            <form action="modificar_datos.php" method="POST">
                
                <label for="materia">Materia a modificar:</label>
                <input type="text" id="materia" name="materia" required><br><br>
                
                <label for="semestre1_r1">Semestre1_r1:</label>
                <input type="text" id="semestre1_r1" name="semestre1_r1" required><br><br>
                
                <label for="semestre1_r2">Semestre1_r2:</label>
                <input type="text" id="semestre1_r2" name="semestre1_r2" required><br><br>
                
                <label for="semestre1_r3">semestre1_r3:</label>
                <input type="text" id="semestre1_r3" name="semestre1_r3" required><br><br>
               
                <label for="semestre2_r1">semestre2_r1:</label>
                <input type="text" id="semestre2_r1" name="semestre2_r1" required><br><br>

                <label for="semestre2_r2">semestre2_r2:</label>
                <input type="text" id="semestre2_r2" name="semestre2_r2" required><br><br>

                
                <label for="semestre2_r3">semestre2_r3:</label>
                <input type="text" id="semestre2_r3" name="semestre2_r3" required><br><br>

                <label for="nota_final">nota_final:</label>
                <input type="text" id="nota_final" name="nota_final" required><br><br>
                <input type="submit" value="Modificar"><br><br>
            </form>
        </div>
    </section>
    <aside>
        
    </aside>


</div>
</body>
</html>
