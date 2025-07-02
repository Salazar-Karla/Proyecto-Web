<?php
include("../conexion.php"); 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$sql = "SELECT a.id_usuario, u.nombre, u.ap_Pat, u.ap_Mat, u.correo, u.numero, a.telefono
FROM profesor a
JOIN usuario u ON a.id_usuario = u.id_usuario;
";
$resultado = $conn->query($sql);

$profesores = [];

while ($fila = $resultado->fetch_assoc()) {
    $profesores[] = $fila;
}

header('Content-Type: application/json');
echo json_encode($profesores);

$conn->close();
?>
