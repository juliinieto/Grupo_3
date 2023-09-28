<?php
require_once('TCPDF-main/tcpdf.php'); // Asegúrate de incluir la ruta correcta al archivo TCPDF

if (isset($_POST["descargar"])) {
    $nombre = $_POST["nombre"];
    $dni = $_POST["dni"];

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
    $sql = "SELECT * FROM pacientes WHERE nombre = ? AND dni = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $nombre, $dni);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nombre = $row["nombre"];
        $fechaNacimiento = $row["fecha_nacimiento"];
        $genero = $row["genero"];
        $direccion = $row["direccion"];
        $telefono = $row["telefono"];
        $personaContacto = $row["persona_contacto"];
        $antecedentesMedicos = $row["antecedentes_medicos"];
        $medicamentosActuales = $row["medicamentos_actuales"];
        $alergias = $row["alergias"];
        $resultadosExamenes = $row["resultados_examenes"];
        $notasProgreso = $row["notas_progreso"];
        $planTratamiento = $row["plan_tratamiento"];
    } else {
        echo "No se encontraron registros para el nombre y DNI proporcionados.";
        exit;
    }

    $stmt->close();
    $conn->close();

    // Crear una nueva instancia de TCPDF
    $pdf = new TCPDF();

    // Establecer el título del documento PDF
    $pdf->SetTitle('Ficha Médica');

    // Agregar una página
    $pdf->AddPage();
    //Establecer el color de fondo verde (#f5f5db en formato RGB)
    $pdf->SetFillColor(0xf5, 0xf5, 0xdb);
    $pdf->Rect(10, 10, 190, 20, 'F'); // Coordenadas y dimensiones del rectángulo de fondo verde
    
    
    // Establecer el color del texto del título (#f5f5db en formato RGB)
    $pdf->SetTextColor(0xf5, 0xf5, 0xdb);
    
    // Agregar el título en el rectángulo de fondo verde
    $pdf->Text(15, 20, 'Ficha Médica');
    
    // Restaurar el color del texto a negro para el contenido
    $pdf->SetTextColor(0, 0, 0);
    // Agregar contenido al PDF
    $html = "

    <h1>Ficha Médica</h1>
    <p><strong>Nombre:</strong> $nombre</p>
    <p><strong>Fecha de Nacimiento:</strong> $fechaNacimiento</p>
    <p><strong>Género:</strong> $genero</p>
    <p><strong>Dirección:</strong> $direccion</p>
    <p><strong>Teléfono:</strong> $telefono</p>
    <p><strong>Persona de Contacto:</strong> $personaContacto</p>
    <p><strong>Antecedentes Médicos:</strong> $antecedentesMedicos</p>
    <p><strong>Medicamentos Actuales:</strong> $medicamentosActuales</p>
    <p><strong>Alergias:</strong> $alergias</p>
    <p><strong>Resultados de Exámenes:</strong> $resultadosExamenes</p>
    <p><strong>Notas de Progreso:</strong> $notasProgreso</p>
    <p><strong>Plan de Tratamiento:</strong> $planTratamiento</p>
    ";

    $pdf->writeHTML($html, true, false, true, false, '');

    // Definir un nombre para el archivo PDF
    $filename = 'ficha_medica.pdf';

    // Enviar el PDF al navegador para descargar
    $pdf->Output($filename, 'D');
} else {
    echo "Acceso no autorizado.";
}
?>
