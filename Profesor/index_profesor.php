<?php
session_start();

$inactividad_maxima = 300; // 5 minutos (300 segundos)

if (isset($_SESSION['ultima_actividad']) && (time() - $_SESSION['ultima_actividad']) > $inactividad_maxima) {
    session_unset();
    session_destroy();
    header("Location: ../cerrar_sesion.php?expirada=1");
    exit();
}

$_SESSION['ultima_actividad'] = time(); // Actualiza la actividad

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Apoyo a la educación primaria</title>
    <link rel="stylesheet" href="style_profesor.css">
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
                <a href="#" onclick="mostrarPrincipal()">Principal</a>

                <div class="dropdown">
                    <a href="#">Perfil</a>
                    <div class="dropdown-content">
                        <a href="formularios/ver_profe_cards.php">Consultar Datos</a>
                        <a href="formularios/ver_perfil.php">Ver Perfil</a>
                        <a href="#">Ver Grupos</a>
                        <a href="#">Recuperar Contraseña</a>
                    </div>
                </div>

                <div class="dropdown">
                    <a href="#">Recursos</a>
                    <div class="dropdown-content">
                        <a href="#">Crear</a>
                        <a href="#">Consultar</a>
                        <a href="#">Editar</a>
                    </div>
                </div>

                <a href="#">Calificaciones</a>

                <div class="dropdown">
                    <a href="#">Ayuda</a>
                    <div class="dropdown-content">
                        <a href="#">Manual de Usuario</a>
                        <a href="#">Búsqueda</a>
                    </div>
                </div>
                <a href="../cerrar_sesion.php" class="btn-cerrar-sesion"> Cerrar sesión</a>
            </div>
        </nav>
    </header>

    <main>

        <div id="contenido-dinamico"></div>
    </main>

</body>
</html>
