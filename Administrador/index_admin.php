<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Apoyo a la educación primaria</title>
    <link rel="stylesheet" href="style_admin.css">
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
                        <a href="#">Consultar Datos</a>
                        <a href="#">Editar Datos</a>
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

                <a href="#">Reportes</a>
                <a href="#" onclick="mostrarUsuarios()">Usuarios</a>

                <div class="dropdown">
                    <a href="#">Ayuda</a>
                    <div class="dropdown-content">
                        <a href="#">Manual de Usuario</a>
                        <a href="#">Búsqueda</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>

        <div id="contenido-dinamico"></div>
    </main>

    <script>
    function mostrarUsuarios() {
        fetch('usuarios.php')
            .then(response => response.text())
            .then(html => {
                document.getElementById('contenido-dinamico').innerHTML = html;
            });
    }

    function mostrarAgregarUsuario() {
        fetch('agregar_usuario.php')
            .then(response => response.text())
            .then(html => {
                document.getElementById('contenido-dinamico').innerHTML = html;
            });
    }

    function mostrarAgregarAlumno() {
        fetch('formularios/agregar_alumno.php')
            .then(response => response.text())
            .then(html => {
                document.getElementById('contenido-dinamico').innerHTML = html;
            });
    }

    function mostrarAgregarProfesor() {
        fetch('formularios/agregar_profesor.php')
            .then(response => response.text())
            .then(html => {
                document.getElementById('contenido-dinamico').innerHTML = html;
            });
    }

    function mostrarAgregarAdministrador() {
        fetch('formularios/agregar_admin.php')
            .then(response => response.text())
            .then(html => {
                document.getElementById('contenido-dinamico').innerHTML = html;
            });
    }
     function mostrarAgregarGrupo() {
        fetch('formularios/agregar_grupo.php')
            .then(response => response.text())
            .then(html => {
                document.getElementById('contenido-dinamico').innerHTML = html;
            });
    }

    function mostrarVerAlumnos() {
        fetch('ver_alumnos.php')
            .then(response => response.text())
            .then(html => {
                document.getElementById('contenido-dinamico').innerHTML = html;
            })
            .catch(error => console.error('Error al cargar ver_alumnos.php:', error));
    }

    function mostrarPrincipal() {
        document.getElementById('contenido-dinamico').innerHTML = `
            <section class="bienvenida">
                <h2>¡Bienvenido al Panel del Administrador!👋</h2>
                <p>Te damos la más cordial bienvenida a la plataforma de apoyo a la educación primaria. Desde este panel podrás:</p>
                <p>🔸Administrar completamente el sistema.</p>
                <p>🔸Generar reportes detallados.</p>
                <p>🔸Agregar y gestionar usuarios como alumnos y profesores.</p>
                <p>🔸Crear recursos académicos que estarán disponibles para los docentes.</p>
                <p>Además, cuentas con una sección de ayuda guiada para apoyarte en cada paso, asegurando un uso eficiente y sencillo del sistema.</p>
                <p>¡Gracias por formar parte del equipo de administración! Tu labor es clave para el buen funcionamiento de la plataforma educativa.</p>
                <div class="imagen-final">
                    <img src="../Imagenes/admin.png" alt="Administrador" />
                </div>
            </section>
        `;
    }

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

</body>
</html>
