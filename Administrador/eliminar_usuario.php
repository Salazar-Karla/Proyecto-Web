<?php
include("conexion.php");

if (!isset($_GET['id'])) {
    echo "ID no proporcionado";
    exit();
}

$id_usuario = intval($_GET['id']);

// Borrar de profesor o administrador
$conn->query("DELETE FROM profesor WHERE id_usuario = $id_usuario");
$conn->query("DELETE FROM administrador WHERE id_usuario = $id_usuario");

// Borrar del usuario
$conn->query("DELETE FROM usuario WHERE id_usuario = $id_usuario");

header("Location: index_admin.php?seccion=usuarios&actualizado=1");
?>
