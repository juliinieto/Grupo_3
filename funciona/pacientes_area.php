<?php
        include "conexion.php"; // Asegúrate de incluir la conexión a la base de datos

        // Consulta SQL para obtener las áreas desde la base de datos
        $sql = "SELECT id, nombre FROM areas";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $id_area = $row["id"];
                $nombre_area = $row["nombre"];
                echo "<option value='$id_area'>$nombre_area</option>";
            }
        }
        $conn->close();
?>