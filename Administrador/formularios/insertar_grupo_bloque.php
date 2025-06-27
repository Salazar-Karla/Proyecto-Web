<?php
include("conexion.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$nombre = $_POST['Nombre'];
$ap_Pat = $_POST['ap_Pat'];
$ap_Mat = $_POST['ap_Mat'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$numero = $_POST['numero'];
$telefono = $_POST['telefono']; 

// Insertar en usuario
$insert_usuario = $conn->prepare("INSERT INTO usuario (nombre, ap_Pat, ap_Mat, correo, contrasena, numero) VALUES (?, ?, ?, ?, ?, ?)");
if (!$insert_usuario) {
    echo json_encode(['success' => false, 'message' => 'Error en prepare usuario: ' . $conn->error]);
    exit;
}

$insert_usuario->bind_param("ssssss", $nombre, $ap_Pat, $ap_Mat, $correo, $contrasena, $numero);
if (!$insert_usuario->execute()) {
    echo json_encode(['success' => false, 'message' => 'Error al ejecutar usuario: ' . $insert_usuario->error]);
    exit;
}

$id_usuario = $conn->insert_id;

// Insertar en profesor
$insert_profesor = $conn->prepare("INSERT INTO profesor (id_usuario, telefono) VALUES (?, ?)");
if (!$insert_profesor) {
    echo json_encode(['success' => false, 'message' => 'Error en prepare alumno: ' . $conn->error]);
    exit;
}

$insert_profesor->bind_param("ii", $id_usuario, $telefono);
if (!$insert_profesor->execute()) {
    echo json_encode(['success' => false, 'message' => 'Error al ejecutar profesor: ' . $insert_profesor->error]);
    exit;
}

echo json_encode(['success' => true]);
$conn->close();
?>
