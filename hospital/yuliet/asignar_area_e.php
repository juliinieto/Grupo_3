<?php
    include "conexion.php";
    // Manejo de la asignación de enfermeros
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["submit"])) {
            // Recuperar datos del formulario
            $enfermero = $_POST["enfermero"];
            $area = $_POST["area"];

            // Insertar el área si no existe
            $stmt = $db->prepare("INSERT INTO areas (nombre) VALUES (:area)");
            $stmt->bindParam(':area', $area);
            $stmt->execute();

            // Obtener el ID del área
            $area_id = $db->lastInsertId();

            // Insertar el enfermero
            $stmt = $db->prepare("INSERT INTO enfermeros (nombre, area_id) VALUES (:enfermero, :area_id)");
            $stmt->bindParam(':enfermero', $enfermero);
            $stmt->bindParam(':area_id', $area_id);
            $stmt->execute();
        }
    }
  
    
?>
