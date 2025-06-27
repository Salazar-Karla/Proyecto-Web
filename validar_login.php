<?php
session_start();
include("conexion.php");

// Validar que se reciban datos del formulario
if (!isset($_POST['correo']) || !isset($_POST['contrasena'])) {
    die("Faltan datos del formulario.");
}

// Escapar caracteres especiales
$correo = $conn->real_escape_string($_POST['correo']);
$contrasena = $conn->real_escape_string($_POST['contrasena']);

// Consulta al usuario
$query = "SELECT * FROM usuario WHERE correo = '$correo' AND contrasena = '$contrasena'";
$result = $conn->query($query);
echo json_encode("segundopaso"<=true);
// Verificar si hubo error en la consulta
if (!$result) {
    die("Error en la consulta: " . $conn->error);
}

// Validar si se encontró un usuario
if ($result->num_rows === 1) {
    $usuario = $result->fetch_assoc();

    $_SESSION['id_usuario'] = $usuario['id_usuario'];
    $_SESSION['nombre'] = $usuario['nombre'];
    $_SESSION['correo'] = $usuario['correo'];
    $_SESSION['tipo'] = "administrador";
    $id_usuario = $usuario['id_usuario'];

    // Verificar si es administrador
    $admin = $conn->query("SELECT * FROM administrador WHERE id_usuario = $id_usuario");
    if ($admin && $admin->num_rows > 0) {
        header("Location: Administrador/index_admin.php");
        exit();
    }

    // Verificar si es profesor
    $_SESSION['tipo'] = "profesor";
    $prof = $conn->query("SELECT * FROM profesor WHERE id_usuario = $id_usuario");
    if ($prof && $prof->num_rows > 0) {
        header("Location: Profesor/index_profesor.php");
        exit();
    }
    $_SESSION['tipo'] = "alumno";
    // Verificar si es alumno
    $alum = $conn->query("SELECT * FROM alumno WHERE id_usuario = $id_usuario");
    if ($alum && $alum->num_rows > 0) {
        header("Location: Alumno/index_alumno.php");
        exit();
    }

    echo "Tu usuario no tiene un rol asignado.";
} else {
    echo "Correo o contraseña incorrectos.";
}
?>
