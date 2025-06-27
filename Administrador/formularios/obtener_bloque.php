<?php
include("../conexion.php"); 

// Mostrar errores en desarrollo
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$sql = "SELECT * FROM bloque";
$resultado = $conn->query($sql);

$bloques = [];

while ($fila = $resultado->fetch_assoc()) {
    $bloques[] = $fila;
}

// Enviar JSON limpio
header('Content-Type: application/json');
echo json_encode($bloques);

// Cerrar conexión
$conn->close();
?>