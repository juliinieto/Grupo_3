<!DOCTYPE html>
<html>
<head>
    <title>Configuración del Sistema</title>
</head>
<body>
<header>
<h1>Configuración del Sistema</h1>	

	<nav>
	
		<?php include("conexion.php"); ?>
		
	</nav>
	</header>

    <!-- Formulario para asignar paciente a un área -->
    <h2>Asignar Paciente a Área</h2>
<form action="configuracion.php" method="post">
    <input type="hidden" name="accion" value="asignar_paciente">
    <label for="id_paciente">Nombre Paciente:</label>
    <input type="text" id="id_paciente" name="id_paciente" required>
    <label for="nombre_area">Área Médica/Quirúrgica:</label>
    <select name="nombre_area" required>
        <option value="">Selecciona un área</option>
        <?php
        $areas_validas = [
            "Anestesiología", "Cardiología", "Cuidados Intensivos", "Digestivo",
            "Hematología", "Neumología", "Oncología", "Pediatría/Neonatología",
            "Rehabilitación", "Urgencias", "Cirugía General y Digestiva",
            "Cirugía Ortopédica y Traumatología", "Dermatología", "Ginecología y Obstetricia",
            "Oftalmología", "Otorrinolaringología", "Urología"
        ];

        foreach ($areas_validas as $area) {
            echo "<option value='$area'>$area</option>";
        }
        ?>
    </select>
    <input type="submit" value="Asignar Paciente">
</form>
</body>
</html>
