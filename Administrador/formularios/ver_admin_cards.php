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

    .perfil-contenedor, .bienvenida {
      background: white;
      border-radius: 14px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }

    .perfil-contenedor {
  background: white;
  border-radius: 14px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.15);
  width: 330px;
  text-align: center;
  overflow: hidden;
  border-left: 10px solid #e67e22; /* borde estilo libreta */
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
      text-align: center;
    }

    .dato strong {
      color: #000;
      display: block;
      font-size: 15px;
      margin-bottom: 8px;
    }

    .btn-contrasena {
      display: block;
      width: 100%;
      padding: 10px;
      margin-top: 20px;
      background-color: #e67e22;
      color: white;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-weight: bold;
      transition: 0.3s;
    }

    .btn-contrasena:hover {
      background-color: #cf6918;
    }

    .bienvenida {
      max-width: 800px;
      padding: 25px;
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
      gap: 20px;
      border-left: 10px solid #e67e22;
    }

    .bienvenida-texto {
      flex: 1;
    }

    .bienvenida-texto h2 {
      color: #e67e22;
      margin-top: 0;
      font-size: 24px;
    }

    .bienvenida-texto p {
      font-size: 14px;
      margin: 8px 0;
      text-align: justify;
      color: #333;
    }

    .bienvenida-imagen {
      max-width: 450px;
    }

    .bienvenida-imagen img {
      width: 100%;
      height: auto;
    }

    @media (max-width: 768px) {
      .bienvenida {
        flex-direction: column;
        text-align: center;
      }

      .bienvenida-imagen img {
        max-width: 300px;
      }
    }
  </style>
</head>
<body>

<div class="contenedor-flex">

  <!-- Tarjeta de perfil -->
  <div class="perfil-contenedor">
    <div class="titulo">Sesión Activa</div>

    <div class="icono-perfil">
      <img src="../Imagenes/credencial.png" alt="Icono perfil">
    </div>

    <div class="rol">Administrador</div>

    <div class="contenido-datos">
      <p class="dato">
        <strong><?= htmlspecialchars($admin['nombre']) . " " . htmlspecialchars($admin['ap_Pat']) . " " . htmlspecialchars($admin['ap_Mat']) ?></strong>
      </p>
      <p class="dato">
        Usuario encargado de gestionar y supervisar todo el sistema. Tiene acceso completo para agregar, editar y eliminar usuarios, asignar recursos, generar reportes y asegurar el buen funcionamiento de la plataforma, entre otras cosas.
      </p>
      <br>
      <div class="rol">Credencial</div>
    </div>
  </div>

  <!-- Tarjeta de bienvenida -->
  <section class="bienvenida">
    <div class="bienvenida-texto">
      <h2>¡Bienvenido al Panel del Administrador! 👋</h2>
      <p>Te damos la más cordial bienvenida a la plataforma de apoyo a la educación primaria. Desde este panel podrás:</p>
      <p>🔸 Administrar completamente el sistema.</p>
      <p>🔸 Generar reportes detallados.</p>
      <p>🔸 Agregar y gestionar usuarios como alumnos y profesores.</p>
      <p>🔸 Crear recursos académicos que estarán disponibles para los docentes.</p>
      <p>Además, cuentas con una sección de ayuda guiada para apoyarte en cada paso, asegurando un uso eficiente y sencillo del sistema.</p>
      <p>¡Gracias por formar parte del equipo de administración! Tu labor es clave para el buen funcionamiento de la plataforma educativa.</p>
    </div>
    <div class="bienvenida-imagen">
      <img src="../Imagenes/admin.png" alt="Administrador">
    </div>
  </section>

</div>

</body>
</html>
