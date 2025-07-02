<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Apoyo a la educación primaria</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <div class="logo-container">
            <img src="../Imagenes/Logo.png" alt="Logo" class="logo">
            <h1>Apoyo a la educación primaria</h1>
            <img src="../Imagenes/tiburon.png" alt="Tiburón" class="tiburon-header">
        </div>
        <nav>
            <a href="#" onclick="mostrarContacto()">Contáctanos</a>
            <a href="#" onclick="mostrarAyuda()">¿Cómo ingresar a la plataforma?</a>
        </nav>
    </header>

    <main>
        <!-- Panel de bienvenida -->
        <div class="bienvenida">
            <h2>¡Bienvenido!👋</h2>
            <p>Esta es una plataforma divertida y educativa creada especialmente para ti 😊. Aquí podrás ver recursos, aprender y realizar tus exámenes de una forma fácil y segura. ¡Disfruta aprendiendo!🦖⭐</p>
            <div class="bienvenida-img-container">
                <img src="../Imagenes/niños.jpg" alt="Niños felices">
            </div>
        </div>



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

</body>
</html>

