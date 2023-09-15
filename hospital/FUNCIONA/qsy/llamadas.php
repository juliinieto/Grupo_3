<?php

// Conexión a la base de datos (reemplaza con tus propios datos)
$host = "localhost";
$dbname = "hospital";


try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión a la base de datos: " . $e->getMessage());
}

// Función para registrar una llamada
function registrarLlamada($tipo, $atendida, $tiempo_respuesta) {
    global $pdo;
    
    try {
        $stmt = $pdo->prepare("INSERT INTO llamadas (tipo, atendida, tiempo_respuesta) VALUES (?, ?, ?)");
        $stmt->execute([$tipo, $atendida, $tiempo_respuesta]);
    } catch (PDOException $e) {
        die("Error al registrar la llamada: " . $e->getMessage());
    }
    
}

// Función para calcular el tiempo promedio de respuesta para un tipo de llamada
function calcularTiempoPromedio($tipo) {
    global $pdo;
    
    try {
        $stmt = $pdo->prepare("SELECT AVG(tiempo_respuesta) as tiempo_promedio FROM llamadas WHERE tipo = ?");
        $stmt->execute([$tipo]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $row['tiempo_promedio'];
    } catch (PDOException $e) {
        die("Error al calcular el tiempo promedio: " . $e->getMessage());
    }
}

// Ejemplo de uso
registrarLlamada('Normal', true, 5); // Registrar una llamada normal atendida con 5 minutos de respuesta
registrarLlamada('Emergencia', false, 2); // Registrar una llamada de emergencia no atendida con 2 minutos de respuesta

$tiempo_promedio_normal = calcularTiempoPromedio('Normal');
$tiempo_promedio_emergencia = calcularTiempoPromedio('Emergencia');

echo "Tiempo promedio de respuesta para llamadas normales: $tiempo_promedio_normal minutos<br>";
echo "Tiempo promedio de respuesta para llamadas de emergencia: $tiempo_promedio_emergencia minutos";

?>
