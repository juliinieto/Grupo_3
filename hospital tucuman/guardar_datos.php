<?php
// Incluye el archivo de conexión
include "conexion.php";

// Recopila los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$diagnostico = $_POST['diagnostico'];
$tratamiento = $_POST['tratamiento'];
$alergias = $_POST['alergias'];
$ubicacion = $_POST['ubicacion'];
$enfermero = $_POST['enfermero'];

// Selecciona la base de datos
if (!mysqli_select_db($mysqli, $database)) {
    die("Error al seleccionar la base de datos: " . mysqli_error($mysqli));
}

// Función para agregar un nuevo paciente (debe estar definida en este archivo o incluida desde otro archivo)
function agregarPaciente($nombre, $apellido, $diagnostico, $tratamiento, $alergias, $ubicacion, $enfermero, $mysqli) {
    $query = "INSERT INTO pacientes (nombre, apellido, diagnostico, tratamiento, alergias, ubicacion, enfermero) 
              VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    if ($stmt = $mysqli->prepare($query)) {
        $stmt->bind_param("sssssss", $nombre, $apellido, $diagnostico, $tratamiento, $alergias, $ubicacion, $enfermero);
        
        if ($stmt->execute()) {
            $stmt->close();
            return true; // La inserción se realizó con éxito
        } else {
            return "Error al ejecutar la consulta: " . $stmt->error; // Devolver detalles del error
        }
    } else {
        return "Error en la preparación de la consulta: " . $mysqli->error; // Devolver detalles del error
    }
}

// Llama a la función agregarPaciente pasando los datos del paciente y la conexión MySQLi
$resultado = agregarPaciente($nombre, $apellido, $diagnostico, $tratamiento, $alergias, $ubicacion, $enfermero, $mysqli);

if ($resultado === true) {
    echo "El paciente se ha agregado correctamente.";
} else {
    echo "Error al agregar el paciente. Detalles del error: " . $resultado;
}
?>
