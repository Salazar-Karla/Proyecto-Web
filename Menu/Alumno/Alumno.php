<?php
    
    if( !(count($_COOKIE) > 0) ){

        header("Location: ./../newMenu/main.php");//Cerrar sesión si no hay cookies
    
    }

?>

<!DOCTYPE html>
<html lang="es">
    
<script src="./alumno.js"></script>
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumno</title>
    
    <style>

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
}

header {
    background-color: #1a237e;
    color: white;
    padding: 15px 20px;
    margin-bottom: 0;
}

nav {
    display: flex;
    gap: 10px;
    padding: 15px;
    background-color: #d1d9ff;
    border-bottom: 1px solid #b3b8e5;
    flex-wrap: wrap;
}

.menu-button {
    position: relative;
    display: inline-block;
}

.dropdown-button, .menu-option {
    background-color: #5c6bc0;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
    min-width: 100px;
    text-align: left;
    display: block;
    width: 100%;
    margin: 2px 0;
}

.dropdown-button:hover, .menu-option:hover {
    background-color: #3f51b5;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    border-radius: 5px;
    padding: 5px;
}

.menu-button:hover .dropdown-content {
    display: block;
}

/* Estilos para menús anidados con botones */
.nested-menu {
    position: relative;
}

.nested-menu-content {
    display: none;
    position: absolute;
    left: 100%;
    top: 0;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    border-radius: 5px;
    z-index: 2;
    padding: 5px;
}

.dropdown-content .nested-menu:hover > .nested-menu-content {
    display: block;
}

.nested-menu > .menu-option::after {
    content: " ▶";
    float: right;
    font-size: 0.8em;
}

    </style>

</head>

<body>

    <script src="./jsFiles/alumno.js" defer></script>

    <header>
        <h1>

        <div>
            <?php 
            // Mostrar el nombre del usuario almacenado en la cookie
            if(isset($_COOKIE['nombre']) && isset($_COOKIE['tipo']))
                echo "Bienvenidos ".$_COOKIE['tipo'] ." ".$_COOKIE['nombre'];
            
            ?>
        </div>

        </h1>
    </header>
    
    <nav>
        <!-- Botón Principal -->
        <div class="menu-button">
            <button class="dropdown-button" onclick="showContent('mainMenu')">Principal</button>
        </div>
        
        <!-- Botón Perfil -->
        <div class="menu-button">
            <button class="dropdown-button" onclick="showContent('Consultar')">Perfil</button>
        </div>
        
        <!-- Botón Bloques -->
        <div class="menu-button">
            <button class="dropdown-button">Bloques</button>
            <div class="dropdown-content">
                <!-- Bloque 1 -->
                <div class="nested-menu">
                    <button class="menu-option">Bloque 1</button>
                    <div class="nested-menu-content">
                        <div class="nested-menu">
                            <button class="menu-option">Libro resolver</button>
                            <div class="nested-menu-content">
                                <button class="menu-option">Rompecabezas</button>
                                <button class="menu-option">Asociar columnas</button>
                            </div>
                        </div>
                        <button class="menu-option">Libro descargable</button>
                        <button class="menu-option">Videos locales</button>
                        <button class="menu-option">Prácticas</button>
                    </div>
                </div>
                
                <!-- Bloque 2 -->
                <div class="nested-menu">
                    <button class="menu-option">Bloque 2</button>
                    <div class="nested-menu-content">
                        <div class="nested-menu">
                            <button class="menu-option">Libro resolver</button>
                            <div class="nested-menu-content">
                                <button class="menu-option">Rompecabezas</button>
                                <button class="menu-option">Asociar columnas</button>
                            </div>
                        </div>
                        <button class="menu-option">Libro descargable</button>
                        <button class="menu-option">Videos locales</button>
                        <button class="menu-option">Prácticas</button>
                    </div>
                </div>
                
                <!-- Bloque 3 -->
                <div class="nested-menu">
                    <button class="menu-option">Bloque 3</button>
                    <div class="nested-menu-content">
                        <div class="nested-menu">
                            <button class="menu-option">Libro resolver</button>
                            <div class="nested-menu-content">
                                <button class="menu-option" onclick="window.location.href='./../Libro/Rompecabezas/menuPuzzles.php'">Rompecabezas</button>
                                <button class="menu-option" onclick="window.location.href='./../Libro/matchColumn/menuMatch.php'">Asociar columnas</button>
                            </div>
                        </div>
                        <a href="./../Libro/Descargar/LibroWeb.pdf" download="LibroWeb.pdf">
                            <button class="menu-option">Libro descargable</button>
                        </a>
                        <button class="menu-option" onclick="window.location.href='./../Libro/Videos_apoyo/menuVideos.php'">Videos</button>
                        <button class="menu-option" onclick="window.location.href='./../Libro/Formulario/menuForm.php'">Prácticas</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Botón Recursos -->
        <div class="menu-button">
            <button class="dropdown-button">Recursos</button>
            <div class="dropdown-content">
                <button class="menu-option" onclick="window.location.href='./../Libro/MenuLibro/Menu.html'">Libro</button>
                <button class="menu-option">Exámenes</button>
                <button class="menu-option">Calificaciones</button>
            </div>
        </div>
        
        <!-- Botón Sesión -->
        <div class="menu-button">
            <button class="dropdown-button">Sesión</button>
            <form action="./../deleteCookies.php" method="post">

                <div class="dropdown-content">
                    <button class="menu-option">Cerrar sesión</button>
                </div>

            </form>
        </div>
        
        <!-- Botón Ayuda -->
        <!--
        <div class="menu-button">
            <button class="dropdown-button">Ayuda</button>
            <div class="dropdown-content">
            <button class="menu-option">Manual de usuario</button>
            <button class="menu-option">Búsqueda</button>
            </div>
        </div>
        -->
    </nav>

    <!-- Contenido principal que varia de acuerdo con el botón seleccionado -->
    <main class="main-content" id="main"> 

    <script>

    const response = await fetch(`mainMenu.php`);

    if (!response.ok)
    throw new Error("Archivo no encontrado");
             
    const html = await response.text();
    document.getElementById("main").innerHTML = html;

    </script>

    </main>

</body>

</html>