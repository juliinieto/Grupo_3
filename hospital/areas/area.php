<style>
        body {
            background-image: url('fondo.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            /* Añade más estilos según sea necesario */
        }
    </style>
<?php


// Lógica para crear áreas o zonas
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre_area'])) {
    $nombre_area = $_POST['nombre_area'];
    
    // Conectar a la base de datos "hospital"
    $conn = new mysqli("localhost", "hospital");
    
    if ($conn->connect_error) {
        die("Error de conexión a la base de datos: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO areas (nombre) VALUES ('$nombre_area')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Área creada con éxito.";
    } else {
        echo "Error al crear el área: " . $conn->error;
    }
    
    $conn->close();
}
?>

<!-- Formulario para crear áreas -->
<form method="post">
    <label for="nombre_area">Nombre del Área o Zona:</label>
    <input type="text" name="nombre_area" required>
    <input type="submit" value="Crear Área">
</form>
