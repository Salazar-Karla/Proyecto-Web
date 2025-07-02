<?php
session_start();
include("../conexion.php");

if (!isset($_SESSION['correo'], $_SESSION['nombre'], $_SESSION['id_usuario'])) {
    header("Location: ../../index.php");
    exit();
}

$id_usuario = $_SESSION['id_usuario'];

$sql = "SELECT a.id_usuario, u.nombre, u.ap_Pat, u.ap_Mat, u.correo, u.numero, a.telefono
        FROM administrador a
        JOIN usuario u ON a.id_usuario = u.id_usuario
        WHERE a.id_usuario = $id_usuario";
$resultado = $conn->query($sql);

if ($resultado->num_rows === 0) {
    echo "<p style='text-align:center; color:red;'>No se encontraron datos del administrador actual.</p>";
    exit();
}

$admin = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Mi Perfil</title>
  <link rel="stylesheet" href="../style_admin.css">
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #fff2dc;
    }

    .contenedor-flex {
      display: flex;
      justify-content: center;
      align-items: flex-start;
      gap: 30px;
      padding: 30px 20px;
      flex-wrap: wrap;
    }

    .perfil-contenedor {
      background: white;
      border-radius: 14px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
      width: 330px;
      text-align: center;
      overflow: hidden;
      border-left: 10px solid #e67e22;
    }

    .titulo {
      font-size: 22px;
      font-weight: bold;
      color: #e67e22;
      margin-top: 20px;
      margin-bottom: 10px;
    }

    .icono-perfil {
      width: 90px;
      height: 90px;
      border-radius: 50%;
      background-color: #e67e22;
      margin: 0 auto 15px;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
      overflow: hidden;
    }

    .icono-perfil img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 50%;
    }

    .rol {
      background-color: #e67e22;
      color: black;
      font-weight: bold;
      font-size: 16px;
      padding: 10px;
      width: 100%;
    }

    .contenido-datos {
      padding: 20px;
    }

    .dato {
      font-size: 14px;
      margin: 6px 0;
      color: #333;
      text-align: left;
    }

    .dato strong {
      color: #000;
    }

    .libreta-form {
      flex: 1;
      min-width: 450px;
      max-width: 800px;
      padding: 30px 40px;
      background-image: linear-gradient(to bottom, #fffdf5 0.1em, transparent 0.1em);
      background-size: 100% 2.2em;
      border-left: 10px solid #e67e22;
      position: relative;
      font-family: 'Courier New', Courier, monospace;
      line-height: 1.7em;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
      border-radius: 14px;
      background-color: #fff;
    }

    .libreta-form h2 {
      color: #e67e22;
      margin-bottom: 25px;
      font-size: 24px;
      border-bottom: 2px dashed #e67e22;
      padding-bottom: 10px;
    }

    .libreta-form label {
      font-weight: bold;
      display: block;
      margin-top: 20px;
    }

    .libreta-form input {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      font-size: 15px;
      border: 1px solid #ccc;
      border-radius: 6px;
      background-color: #ffffffc0;
    }

    .libreta-form button {
      margin-top: 30px;
      background-color: #e67e22;
      color: white;
      padding: 12px 24px;
      font-size: 16px;
      font-weight: bold;
      border: none;
      border-radius: 10px;
      cursor: pointer;
    }

    .libreta-form button:hover {
      background-color: #cf6918;
    }

    .formulario-doble {
      display: flex;
      gap: 30px;
      flex-wrap: wrap;
      justify-content: space-between;
      width: 100%;
    }

    .formulario-doble form {
      flex: 1;
      min-width: 350px;
    }

    @media (max-width: 768px) {
      .contenedor-flex {
        flex-direction: column;
        align-items: center;
      }

      .libreta-form {
        max-width: 95%;
      }

      .formulario-doble {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>

<div class="contenedor-flex">

  <!-- Tarjeta de perfil -->
  <div class="perfil-contenedor">
    <div class="titulo">Mi Perfil</div>

    <div class="icono-perfil">
      <img src="../Imagenes/credencial.png" alt="Icono perfil">
    </div>

    <div class="rol">Administrador</div>

    <div class="contenido-datos">
      <p class="dato"><strong>Nombre:</strong> <?= htmlspecialchars($admin['nombre']) ?></p>
      <p class="dato"><strong>Apellido paterno:</strong> <?= htmlspecialchars($admin['ap_Pat']) ?></p>
      <p class="dato"><strong>Apellido materno:</strong> <?= htmlspecialchars($admin['ap_Mat']) ?></p>
      <p class="dato"><strong>Correo:</strong> <?= htmlspecialchars($admin['correo']) ?></p>
      <p class="dato"><strong>Teléfono:</strong> <?= htmlspecialchars($admin['telefono']) ?></p>
      <br>
      <div class="rol">Credencial</div>
    </div>
  </div>

  <!-- Formulario de edición de datos y contraseña -->
  <div class="libreta-form">
    <div class="formulario-doble">

      <!-- Formulario de editar información -->
      <form action="../procesar_edicion_admin.php" method="POST">
        <h2>Editar Información</h2>

        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="<?= htmlspecialchars($admin['nombre']) ?>" required>

        <label for="ap_Pat">Apellido paterno</label>
        <input type="text" name="ap_Pat" value="<?= htmlspecialchars($admin['ap_Pat']) ?>" required>

        <label for="ap_Mat">Apellido materno</label>
        <input type="text" name="ap_Mat" value="<?= htmlspecialchars($admin['ap_Mat']) ?>" required>

        <label for="correo">Correo</label>
        <input type="email" name="correo" value="<?= htmlspecialchars($admin['correo']) ?>" required>

        <label for="telefono">Teléfono</label>
        <input type="text" name="telefono" value="<?= htmlspecialchars($admin['telefono']) ?>" required>

        <button type="submit">Guardar cambios</button>
      </form>

      <!-- Formulario de cambiar contraseña -->
      <form action="../procesar_cambiar_contrasena.php" method="POST">
        <h2>Cambiar Contraseña</h2>

        <label for="actual">Contraseña actual</label>
        <input type="password" name="actual" required>

        <label for="nueva">Nueva contraseña</label>
        <input type="password" name="nueva" required>

        <label for="confirmar">Confirmar nueva contraseña</label>
        <input type="password" name="confirmar" required>

        <button type="submit">Actualizar contraseña</button>
      </form>

    </div>
  </div>

</div>

</body>
</html>
