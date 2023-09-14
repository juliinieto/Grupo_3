<?php
    // Manejo de la asignación de pacientes
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["submit"])) {
                // Recuperar datos del formulario
                $paciente = $_POST["paciente"];
                $area = $_POST["area"];

                // Insertar el área si no existe
                $stmt = $db->prepare("INSERT INTO areas (nombre) VALUES (:area)");
                $stmt->bindParam(':area', $area);
                $stmt->execute();

                // Obtener el ID del área
                $area_id = $db->lastInsertId();

                // Insertar el paciente
                $stmt = $db->prepare("INSERT INTO pacientes (nombre, area_id) VALUES (:paciente, :area_id)");
                $stmt->bindParam(':paciente', $paciente);
                $stmt->bindParam(':area_id', $area_id);
                $stmt->execute();
            }
        }
?>