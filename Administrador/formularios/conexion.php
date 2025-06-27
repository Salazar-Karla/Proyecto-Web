<?php
$host = "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "sistema_academico";

$conn = new mysqli($host, $usuario, $contrasena, $basedatos);

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
?>

