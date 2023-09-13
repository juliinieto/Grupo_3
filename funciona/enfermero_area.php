<?php
    include "conexion.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recupera los valores del formulario
        $id_enfermeros = $_POST['id_enfermeros'];
        $id_paciente = $_POST['id_paciente'];
    
        // Validar y limpiar los valores (puedes agregar más validaciones según tus necesidades)
        $id_enfermeros = intval($id_enfermeros); // Asegura que sea un número entero
        $id_paciente = intval($id_paciente);   // Asegura que sea un número entero
    
        // Verificar si los valores son válidos antes de ejecutar la consulta SQL
        if ($id_enfermeros > 0 && $id_paciente > 0) {
            // Crear la consulta SQL para insertar la asignación en la tabla 'asignaciones'
            $sql = "INSERT INTO asignaciones (id_enfermeros, id_paciente) VALUES ($id_enfermeros, $id_paciente)";
    
            // Ejecutar la consulta y verificar si se realizó con éxito
            if ($conn->query($sql) === TRUE) {
                echo "Enfermero asignado al paciente con éxito.";
            } else {
                echo "Error al asignar al enfermero al paciente: " . $conn->error;
            }
        } else {
            echo "Los IDs del enfermero y el paciente deben ser números válidos.";
        }
    }
    

?>
