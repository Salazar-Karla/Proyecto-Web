<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Apoyo a la educación primaria</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <?php
        // ✅ Mensaje de sesión expirada por inactividad
        if (isset($_GET['expirada'])) {
            echo "<div style='color: darkorange; background-color: #fff4e5; border: 1px solid orange; padding: 10px; text-align: center; font-weight: bold; margin: 10px auto; width: 50%; border-radius: 8px;'>
                    ⚠️ Tu sesión ha expirado por inactividad. Por favor, inicia sesión de nuevo ⚠️
                  </div>";
        }
        ?>
        <div class="logo-container">
            <img src="Imagenes/LogoT.png" alt="Logo" class="logo">
            <h1>Apoyo a la educación primaria</h1>
            <img src="Imagenes/tiburon.png" alt="Tiburón" class="tiburon-header">
        </div>
        <nav>
            <a href="#" onclick="mostrarContacto()">Contáctanos</a>
            <a href="#" onclick="mostrarAyuda()">¿Cómo ingresar a la plataforma?</a>
        </nav>
    </header>


    <?php
    if (isset($_SESSION['error_login'])) {
        echo "<div style='color: red; background-color: #ffe0e0; border: 1px solid red; padding: 10px; text-align: center; font-weight: bold; margin: 10px auto; width: 50%; border-radius: 8px;'>
                {$_SESSION['error_login']}
              </div>";
        unset($_SESSION['error_login']);
    }
    ?>

    <main>
        <!-- Panel de bienvenida -->
        <div class="bienvenida">
            <h2>¡Bienvenido!👋</h2>
            <p>Esta es una plataforma divertida y educativa creada especialmente para ti 😊. Aquí podrás ver recursos, aprender y realizar tus exámenes de una forma fácil y segura. ¡Disfruta aprendiendo!🦖⭐</p>
            <div class="bienvenida-img-container">
                <img src="Imagenes/niños.jpg" alt="Niños felices">
            </div>
        </div>

        <!-- Panel de login -->
        <div class="login-container">
            <div class="login-image">
                <img src="Imagenes/libro-man.png" alt="Login Icon">
            </div>

            <h2>🍎 Inicio de sesión 🍎</h2>
            <form action="validar_login.php" method="POST">
                <label for="correo">📧 Correo:</label>
                <input type="email" id="correo" name="correo" required>

                <label for="contrasena">🔑 Contraseña: </label>
                <input type="password" id="contrasena" name="contrasena" required>

                <button type="submit">Entrar</button>
            </form>

            <div class="extra-links">
                <a href="#">🔐 ¿Olvidaste tu contraseña? 🔐</a>
            </div>
        </div>
    </main>

    <!-- Modal: Contacto -->
    <div id="modalContacto" class="modal">
        <div class="modal-contenido">
            <span class="cerrar" onclick="cerrarContacto()">&times;</span>
            <h3>👨‍💼 Contáctanos 👩‍💼</h3>
            <p><strong>📧 Email:</strong> proyectowebgaby@gmail.com</p>
            <p><strong>📞 Teléfono:</strong> 55-43-05-46-32</p>
            <p><strong>🗺️📍 Dirección:</strong> ESCOM IPN, Unidad Profesional Adolfo López Mateos, Av. Juan de Dios Bátiz, Nueva Industrial Vallejo, Gustavo A. Madero, 07320 Ciudad de México, CDMX</p>
            <img src="Imagenes/contactanos.png" alt="Tiburón chambeador" class="img-modal">
        </div>
    </div>

    <!-- Modal: ¿Cómo ingresar? -->
    <div id="modalAyuda" class="modal">
        <div class="modal-contenido">
            <span class="cerrar" onclick="cerrarAyuda()">&times;</span>
            <h3>💻 ¿Cómo ingresar a la plataforma? 💻</h3>
            <p><strong>✔️1. Ubica el formulario de inicio de sesión</strong></p>
            <p>🔸En la parte derecha de la pantalla verás el panel llamado "Inicio de sesión".</p>
            <p>🔸Campos para ingresar tu correo electrónico y contraseña.</p>
            <br>
            <p><strong>✔️ 2. Llena tus datos</strong></p>
            <p>🔸En el campo Correo, escribe tu correo registrado (ejemplo: alumno@escuela.mx).</p>
            <p>🔸En el campo Contraseña, escribe tu contraseña asignada.</p>
            <br>
            <p><strong>✔️ 3. Haz clic en el botón Entrar</strong></p>   
            <p>🔸Una vez ingresados los datos correctamente, haz clic en "Entrar".</p>
            <p>🔸El sistema validará tu acceso.</p> 
            <br>   
            <p><strong>⚠️ ¿Y si no recuerdo mi contraseña o no tengo cuenta? ⚠️</strong></p>
            <p>📌Si olvidaste tu contraseña, da clic en el enlace "¿Olvidaste tu contraseña?".</p>
            <p>📌Si no tienes cuenta, acércate a tu profesor o administrador para que te registre.</p>

            <img src="Imagenes/sesion.png" alt="sesion-decorativa" class="img-modal">
        </div>
    </div>

    <footer>
        <p>&copy; 2025 Equipo2 - Todos los derechos reservados</p>
    </footer>

    <script>
        function mostrarContacto() {
            document.getElementById("modalContacto").style.display = "block";
        }
        function cerrarContacto() {
            document.getElementById("modalContacto").style.display = "none";
        }

        function mostrarAyuda() {
            document.getElementById("modalAyuda").style.display = "block";
        }
        function cerrarAyuda() {
            document.getElementById("modalAyuda").style.display = "none";
        }

        window.onclick = function(event) {
            const modalContacto = document.getElementById("modalContacto");
            const modalAyuda = document.getElementById("modalAyuda");
            if (event.target === modalContacto) modalContacto.style.display = "none";
            if (event.target === modalAyuda) modalAyuda.style.display = "none";
        }
    </script>
<script>
    // Si la URL contiene ?expirada=1, la eliminamos del historial
    if (window.location.href.includes("expirada=1")) {
        const url = new URL(window.location.href);
        url.searchParams.delete("expirada");
        window.history.replaceState({}, document.title, url.pathname);
    }
</script>

</body>
</html>
