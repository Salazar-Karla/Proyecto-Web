<?php
include("conexion.php");

$nombre = $_POST['Nombre'];
$ap_Pat = $_POST['ap_Pat'];
$ap_Mat = $_POST['ap_Mat'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$numero = $_POST['numero'];
$id_grupo = $_POST['Grupo'];

// Insertar en usuario
$insert_usuario = $mysqli->prepare("INSERT INTO usuario (nombre, ap_Pat, ap_Mat, correo, contraseña, numero) VALUES (?, ?, ?, ?, ?, ?)");
$insert_usuario->bind_param("ssssss", $nombre, $ap_Pat, $ap_Mat, $correo, $contrasena, $numero);

if (!$insert_usuario->execute()) {
    echo json_encode(['success' => false, 'message' => 'Error al insertar usuario']);
    exit;
}

$id_usuario = $mysqli->insert_id; // ID del usuario recién insertado

// Insertar en alumno
$insert_alumno = $mysqli->prepare("INSERT INTO alumno (id_grupo, id_usuario) VALUES (?, ?)");
$insert_alumno->bind_param("ii", $id_grupo, $id_usuario);

if (!$insert_alumno->execute()) {
    echo json_encode(['success' => false, 'message' => 'Error al insertar alumno']);
    exit;
}

echo json_encode(['success' => true]);
$mysqli->close();
?>
