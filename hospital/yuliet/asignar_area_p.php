<?php
    include "conexion.php";
    
   
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $estado_paciente = $_POST["estado_paciente"];
        $dni = $_POST["dni"];
        $area = $_POST["area"];

    
        // Insertar los datos del paciente
        $stmt = $db->prepare("INSERT INTO pacientes (nombre, apellido, estado_paciente, dni, area_id) VALUES (:nombre, :apellido, :estado_paciente, :dni, :area_id)");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellido', $apellido);
        $stmt->bindParam(':estado_paciente', $estado_paciente);
        $stmt->bindParam(':dni', $dni);
        $stmt->bindParam(':area_id', $area_id);
        $stmt->execute();

        // Redirigir o mostrar un mensaje de éxito si es necesario
        // Ejemplo:
        header("guardado con exito");
        exit();
   // }
    
?>