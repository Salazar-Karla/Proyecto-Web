<?php
include("conexion.php");

if (!isset($_POST['id_usuario'], $_POST['tipo'], $_POST['nombre'], $_POST['ap_pat'], $_POST['ap_mat'], $_POST['correo'], $_POST['telefono'])) {
    echo "Datos incompletos.";
    exit();
}

$id_usuario = intval($_POST['id_usuario']);
$tipo = $_POST['tipo'] === "administrador" ? "administrador" : "profesor";

$nombre   = $conn->real_escape_string($_POST['nombre']);
$ap_pat   = $conn->real_escape_string($_POST['ap_pat']);
$ap_mat   = $conn->real_escape_string($_POST['ap_mat']);
$correo   = $conn->real_escape_string($_POST['correo']);
$telefono = $conn->real_escape_string($_POST['telefono']); // se usará tanto como teléfono del rol y como "numero" en usuario

// Actualizar en tabla usuario
$sql_usuario = "
    UPDATE usuario SET 
        nombre = '$nombre',
        ap_Pat = '$ap_pat',
        ap_Mat = '$ap_mat',
        correo = '$correo',
        numero = '$telefono'
    WHERE id_usuario = $id_usuario
";

if (!$conn->query($sql_usuario)) {
    echo "Error al actualizar datos del usuario: " . $conn->error;
    exit();
}

// Actualizar en tabla administrador o profesor
if ($tipo === "administrador") {
    $sql_rol = "UPDATE administrador SET telefono = '$telefono' WHERE id_usuario = $id_usuario";
} else {
    $sql_rol = "UPDATE profesor SET telefono = '$telefono' WHERE id_usuario = $id_usuario";
}

if (!$conn->query($sql_rol)) {
    echo "Error al actualizar datos del $tipo: " . $conn->error;
    exit();
}

// Redirige a vista de usuarios dentro del panel admin
header("Location: index_admin.php?seccion=usuarios&actualizado=1");
exit();
?>
