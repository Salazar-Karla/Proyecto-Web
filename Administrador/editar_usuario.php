<?php
include("../conexion.php");
session_start();

// Validar sesión
if (!isset($_SESSION['correo']) || !isset($_SESSION['nombre'])) {
    header("Location: ../index.php");
    exit();
}

if (!isset($_GET['id'])) {
    echo "ID no recibido.";
    exit();
}

$id_usuario = $_GET['id'];
$query = "SELECT * FROM usuario WHERE id_usuario = $id_usuario";
$result = $conn->query($query);

if ($result->num_rows !== 1) {
    echo "Usuario no encontrado.";
    exit();
}

$usuario = $result->fetch_assoc();

// Obtener rol
$rol = '';
$telefono = '';
$query_admin = "SELECT telefono FROM administrador WHERE id_usuario = $id_usuario";
$result_admin = $conn->query($query_admin);
if ($result_admin->num_rows > 0) {
    $rol = 'administrador';
    $telefono = $result_admin->fetch_assoc()['telefono'];
} else {
    $query_prof = "SELECT telefono FROM profesor WHERE id_usuario = $id_usuario";
    $result_prof = $conn->query($query_prof);
    if ($result_prof->num_rows > 0) {
        $rol = 'profesor';
        $telefono = $result_prof->fetch_assoc()['telefono'];
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="style_admin.css">
    <style>
        .formulario-contenedor {
            background-color: #fff;
            padding: 30px;
            margin: 40px auto;
            width: 60%;
            border-radius: 20px;
            box-shadow: 0px 4px 12px rgba(0,0,0,0.1);
            border-top: 8px solid orange;
        }

        .formulario-contenedor h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #e67e22;
        }

        .formulario-contenedor label {
            font-weight: bold;
            display: block;
            margin-top: 15px;
        }

        .formulario-contenedor input, .formulario-contenedor select {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 2px solid #ccc;
            border-radius: 10px;
            font-size: 16px;
        }

        .formulario-contenedor input[type="submit"] {
            background-color: orange;
            color: white;
            font-weight: bold;
            border: none;
            cursor: pointer;
            margin-top: 30px;
            transition: 0.3s;
        }

        .formulario-contenedor input[type="submit"]:hover {
            background-color: #e67e22;
        }
    </style>
</head>
<body>

<header>
    <div class="logo-container">
        <img src="../Imagenes/LogoT.png" alt="Logo" class="logo">
        <h1>Apoyo a la educación primaria</h1>
        <img src="../Imagenes/tiburon.png" alt="Tiburón" class="tiburon-header">
    </div>
    <nav>
        <div class="nav-center">
            <a href="index_admin.php">Principal</a>
            <div class="dropdown">
                <a href="#">Perfil</a>
                <div class="dropdown-content">
                    <a href="#">Consultar Datos</a>
                    <a href="#">Editar Datos</a>
                </div>
            </div>
            <div class="dropdown">
                <a href="#">Recursos</a>
                <div class="dropdown-content">
                    <a href="#">Agregar Recurso</a>
                    <a href="#">Consultar Recursos</a>
                </div>
            </div>
            <a href="#">Usuarios</a>
            <a href="#">Ayuda</a>
            <a href="../cerrar_sesion.php">Cerrar sesión</a>
        </div>
    </nav>
</header>

<div class="formulario-contenedor">
    <h2>Editar Usuario</h2>
    <form action="actualizar_usuario.php" method="POST">
        <input type="hidden" name="id_usuario" value="<?php echo $usuario['id_usuario']; ?>">

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="<?php echo $usuario['nombre']; ?>" required>

        <label for="ap_Pat">Apellido Paterno:</label>
        <input type="text" name="ap_pat" id="ap_Pat" value="<?php echo $usuario['ap_Pat']; ?>" required>

        <label for="ap_Mat">Apellido Materno:</label>
        <input type="text" name="ap_mat" id="ap_Mat" value="<?php echo $usuario['ap_Mat']; ?>" required>

        <label for="correo">Correo:</label>
        <input type="email" name="correo" id="correo" value="<?php echo $usuario['correo']; ?>" required>

        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" id="telefono" value="<?php echo $telefono; ?>" required>

        <label for="rol">Rol:</label>
        <select name="tipo" id="rol" required>
            <option value="administrador" <?php if($rol == 'administrador') echo 'selected'; ?>>Administrador</option>
            <option value="profesor" <?php if($rol == 'profesor') echo 'selected'; ?>>Profesor</option>
        </select>

        <input type="submit" value="Actualizar Usuario">
    </form>
</div>

</body>
</html>
