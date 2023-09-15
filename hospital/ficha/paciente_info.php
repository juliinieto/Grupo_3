<button onclick="location.href='inicio_ficha.php'">Volver al inicio </button>
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
$nombre_paciente = $_GET['nombre'];

// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "hospital_bd";

$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}

// Consultar la ficha médica del paciente
$sql = "SELECT * FROM pacientes WHERE nombre = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $nombre_paciente);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Mostrar los datos de la ficha médica
    echo "<h1>Ficha Médica de $nombre_paciente</h1>";
    echo "<div class='ficha'>";
    echo "<p><strong>Nombre:</strong> " . $row["nombre"] . "</p>";
    echo "<p><strong>Fecha de Nacimiento:</strong> " . $row["fecha_nacimiento"] . "</p>";
    echo "<p><strong>Género:</strong> " . $row["genero"] . "</p>";
    echo "<p><strong>Dirección:</strong> " . $row["direccion"] . "</p>";
    echo "<p><strong>Teléfono:</strong> " . $row["telefono"] . "</p>";
    echo "<p><strong>Persona de Contacto:</strong> " . $row["persona_contacto"] . "</p>";
    echo "<p><strong>Antecedentes Médicos:</strong> " . $row["antecedentes_medicos"] . "</p>";
    echo "<p><strong>Medicamentos Actuales:</strong> " . $row["medicamentos_actuales"] . "</p>";
    echo "<p><strong>Alergias:</strong> " . $row["alergias"] . "</p>";
    echo "<p><strong>Resultados de Exámenes:</strong> " . $row["resultados_examenes"] . "</p>";
    echo "<p><strong>Notas de Progreso:</strong> " . $row["notas_progreso"] . "</p>";
    echo "<p><strong>Plan de Tratamiento:</strong> " . $row["plan_tratamiento"] . "</p>";
    echo "</div>";
} else {
    echo "<p>No se encontraron coincidencias.</p>";
}

$stmt->close();
$conn->close();
?>
