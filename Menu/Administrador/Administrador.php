<?php
    
    if( !(count($_COOKIE) > 0) ){

        header("Location: ./../newMenu/main.php");//Cerrar sesión si no hay cookies
    
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    
    <link rel="stylesheet" href="./styles/admin.css">

    <style>

        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
}

header {
    background-color: #2434e7;
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

    </style>

</head>
<body>

    <script src="./jsFiles/admin.js" defer></script>
    
    <header>
        <h1>

        <?php 
            // Mostrar el nombre del usuario almacenado en la cookie
            if(isset($_COOKIE['nombre']) && isset($_COOKIE['tipo']))
                echo "Bienvenido ".$_COOKIE['tipo'] ." ".$_COOKIE['nombre'];
            
        ?>

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
        
        <!-- 
        Botón Reportes 
            La página para dicha función se hara dentro/fuera de esta página
        -->
        <div class="menu-button">
            <button class="dropdown-button" onclick="showContent('reports')">Reportes</button>
        </div>
        
        <!-- 
        Botón Usuarios
            La página para dicha función se hara dentro/fuera de esta página
        -->
        <div class="menu-button">
            <button class="dropdown-button" onclick="showContent('changeUser')">Usuarios</button>
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
        <div class="menu-button">
            <button class="dropdown-button">Ayuda</button>
            <div class="dropdown-content">
                <button class="menu-option">Contáctanos</button>
                <button class="menu-option">Búsqueda</button>
            </div>
        </div>
    </nav>

    <!-- Contenido principal que varia de acuerdo con el botón seleccionado -->
    <main class="main-content" id="main"> 

    </main>

</body>

</html>