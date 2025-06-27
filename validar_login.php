<?php
session_start();
include("conexion.php");

// Verificar que los datos del formulario existen
if (!isset($_POST['correo']) || !isset($_POST['contrasena'])) {
    $_SESSION['error_login'] = "Faltan datos del formulario.";
    header("Location: index.php");
    exit();
}

$correo = $conn->real_escape_string($_POST['correo']);
$contrasena = $conn->real_escape_string($_POST['contrasena']);

// Buscar el usuario
$query = "SELECT * FROM usuario WHERE correo = '$correo' AND contrasena = '$contrasena'";
$result = $conn->query($query);

if (!$result) {
    $_SESSION['error_login'] = "Error en la base de datos.";
    header("Location: index.php");
    exit();
}

if ($result->num_rows === 1) {
    $usuario = $result->fetch_assoc();

    $_SESSION['id_usuario'] = $usuario['id_usuario'];
    $_SESSION['nombre'] = $usuario['nombre'];
    $_SESSION['correo'] = $usuario['correo'];
    $_SESSION['ultima_actividad'] = time(); // Inicia el contador de inactividad

    // ⚠️ Limpiar URL si venía con ?expirada=1
    if (isset($_GET['expirada'])) {
        unset($_GET['expirada']); // Solo limpia el array local, no la URL real
    }

    $id_usuario = $usuario['id_usuario'];

    // Validar tipo de usuario y redirigir
    $admin = $conn->query("SELECT * FROM administrador WHERE id_usuario = $id_usuario");
    if ($admin && $admin->num_rows > 0) {
        $_SESSION['tipo'] = "administrador";
        header("Location: Administrador/index_admin.php");
        exit();
    }

    $prof = $conn->query("SELECT * FROM profesor WHERE id_usuario = $id_usuario");
    if ($prof && $prof->num_rows > 0) {
        $_SESSION['tipo'] = "profesor";
        header("Location: Profesor/index_profesor.php");
        exit();
    }

    $alum = $conn->query("SELECT * FROM alumno WHERE id_usuario = $id_usuario");
    if ($alum && $alum->num_rows > 0) {
        $_SESSION['tipo'] = "alumno";
        header("Location: Alumno/index_alumno.php");
        exit();
    }

    $_SESSION['error_login'] = "Tu usuario no tiene un rol asignado.";
    header("Location: index.php");
    exit();
} else {
    $_SESSION['error_login'] = "Correo o contraseña incorrectos.";
    header("Location: index.php");
    exit();
}
?>

