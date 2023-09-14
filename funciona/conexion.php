
<?php
    // Conexión a la base de datos
        try {
            $db = new PDO('mysql:host=localhost;dbname=hospital_db');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Error de conexión: ' . $e->getMessage());
        }
?>
