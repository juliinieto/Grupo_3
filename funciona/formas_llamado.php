<?php
    include "conexion.php";
    $nombre_forma_llamado = ""; // Inicializa la variable $nombre_forma_llamado con un valor vacío
    
    // Verificar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recuperar el nombre de la forma de llamado desde el formulario
        $nombre_forma_llamado = $_POST["nombre_forma_llamado"];
    
        // Validar y limpiar el nombre de la forma de llamado
        $nombre_forma_llamado = htmlspecialchars($nombre_forma_llamado);
    
        // Verificar si el nombre de la forma de llamado no está vacío
        if (!empty($nombre_forma_llamado)) {
            // Crear la consulta SQL para insertar la forma de llamado en la base de datos
            $sql = "INSERT INTO formas_llamado (nombre) VALUES ('$nombre_forma_llamado')";
    
            // Ejecutar la consulta y verificar si se realizó con éxito
            if ($conn->query($sql) === TRUE) {
                echo "Forma de llamado configurada con éxito.";
            } else {
                echo "Error al configurar la forma de llamado: " . $conn->error;
            }
        } else {
            echo "El nombre de la forma de llamado no puede estar vacío.";
        }
    }
    

$conn->close();
?>
