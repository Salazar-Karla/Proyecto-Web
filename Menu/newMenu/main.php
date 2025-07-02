<section class="principal">
<?php
  if(count($_COOKIE) > 0){
    // Si hay cookies, redirigir a la página de inicio
    header("Location: ./../".$_COOKIE['tipo']."/".$_COOKIE['tipo'].".php");
  }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>

  <link rel="stylesheet" href="./styles/mainStyle.css">

    <script>
        function mostrarContenidoPrincipal() {
            document.getElementById('contenidoPrincipal').style.display = 'block';
            // Ocultar otros contenidos si los hay
        }
    </script>
</head>

<body>
  <header>
    <!-- <div class="logo">
      <img src="./assets/Logo.jpe" alt="Logo Matemáticas Divertidas">
    </div> -->
    <div class="titulo">Matemáticas divertidas</div>
  </header>

  <nav>
  <div class="menu-item">
    <button class="menu-button">Principal</button>
  </div>
  <div class="menu-item">
    <button class="menu-button" onclick="window.location.href='about.html'">Acerca de</button>
  </div>
  <div class="menu-item">
    <button class="menu-button" onclick="window.location.href='preguntas.html'">Preguntas frecuentes</button>
  </div>
  <div class="menu-item">
    <button class="menu-button" onclick="window.location.href='contactos.html'">Contacto</button>
  </div>
  <div class="menu-item">
    <button class="menu-button" onclick="window.location.href='help.html'">Ayuda</button>
  </div>
</nav>

  <main>
    <section class="izquierda">
      <p>Usa el menú para navegar por las secciones. Los colores indican si un botón está activo, seleccionado o inactivo.</p>
      <p>Con los siguientes tipos de usuarios:</p>
      <ul>
        <li><span class="dot sobre"></span> Alumno</li>
        <li><span class="dot activo"></span> Profesor</li>
        <li><span class="dot inactivo"></span> Administrador</li>
      </ul>
    </section>

    <section class="contenido" id="contenidoPrincipal">
      <p>Bienvenido a Matemáticas Divertidas! Este sistema está diseñado para hacer el aprendizaje de las matemáticas más ameno y accesible para todos.</p>
      <p>Esta área muestra el contenido principal del sistema. Aquí encontrarás:</p>
      <ul>
        <li>Lecciones interactivas</li>
        <li>Ejercicios prácticos</li>
        <li>Juegos educativos</li>
        <li>Recursos para profesores</li>
      </ul>
      <p><strong>Selecciona una opción del menú lateral para comenzar.</strong></p>
    </section>

    <aside class="login">
      <h3>inicio de sesión</h3>
      <form action="./../initCookies.php" method="post">
        <input type="text" placeholder="Boleta" name="boleta">
        <input type="password" placeholder="Contraseña" name="password">
        <select name="tipo">
          <option>Alumno</option>
          <option>Profesor</option>
          <option>Administrador</option>
        </select>
        <button>Aceptar</button>
      </form>
      <div class="links">
        <a href="./Registro.php">Registrarse</a><br>
        <a href="./olvidoPassword.php">¿Olvidó su contraseña?</a>
      </div>
    </aside>
  </main>

</body>
</html>
</section>