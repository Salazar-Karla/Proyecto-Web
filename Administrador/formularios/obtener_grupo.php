<?php
include("conexion.php");

$sql = "SELECT * FROM grupo";
$resultado = $conn->query($sql);

$grupos = [];

while ($fila = $resultado->fetch_assoc()) {
    $grupos[] = $fila;
}

header('Content-Type: application/json');
echo json_encode($grupos);

$conexion->close();
?>
