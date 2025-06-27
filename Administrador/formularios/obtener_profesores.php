<?php
include("../conexion.php"); 

// Mostrar errores en desarrollo
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$sql = "SELECT u.id_usuario, u.nombre, u.ap_Pat, u.ap_Mat
FROM profesor p
JOIN usuario u ON p.id_usuario = u.id_usuario;
";
$resultado = $conn->query($sql);

$profesores = [];

while ($fila = $resultado->fetch_assoc()) {
    $profesores[] = $fila;
}

// Enviar JSON limpio
header('Content-Type: application/json');
echo json_encode($profesores);

// Cerrar conexión
$conn->close();
?>
