<?php
include "conexion.php";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id_area"])) {
    $id_area = $_POST["id_area"];
    // Puedes realizar acciones adicionales aquí en función del área seleccionada
    echo "Has seleccionado el área con ID $id_area.";
} else {
    echo "Por favor, selecciona un área.";
}
?>
