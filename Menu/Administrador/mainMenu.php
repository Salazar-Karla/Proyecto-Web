<?php

    include './../conexion.php';
    
    $query = "SELECT * FROM ".$_COOKIE['tipo']." WHERE boleta = ".$_COOKIE['boleta'];
    $result = $conexion->query($query);
    $row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida - Sistema Escolar</title>

    <style>
        :root {
            --color-primario: #4361ee;
            --color-secundario: #3a0ca3;
            --color-fondo: #f8f9fa;
            --color-texto: #2b2d42;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--color-fondo);
            color: var(--color-texto);
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .encabezado {
            background: linear-gradient(135deg, var(--color-primario), var(--color-secundario));
            color: white;
            padding: 2rem 1rem;
            text-align: center;
        }

        .avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background-color: white;
            margin: 0 auto 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--color-primario);
            font-size: 32px;
            font-weight: bold;
            border: 3px solid white;
        }

        .contenido-principal {
            max-width: 800px;
            margin: 2rem auto;
            padding: 0 1rem;
            text-align: center;
            flex: 1;
        }

        .bienvenida {
            background: white;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
        }

        .bienvenida h1 {
            color: var(--color-primario);
            margin-bottom: 1rem;
        }

        .bienvenida p {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .botones {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
            margin-top: 2rem;
        }

        .boton {
            padding: 12px 25px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .boton-primario {
            background-color: var(--color-primario);
            color: white;
        }

        .boton-primario:hover {
            background-color: var(--color-secundario);
            transform: translateY(-2px);
        }

        .boton-secundario {
            background-color: white;
            color: var(--color-primario);
            border: 2px solid var(--color-primario);
        }

        .boton-secundario:hover {
            background-color: var(--color-fondo);
        }

        footer {
            background-color: var(--color-primario);
            color: white;
            text-align: center;
            padding: 1rem;
            margin-top: auto;
        }

        @media (max-width: 600px) {
            .botones {
                flex-direction: column;
                align-items: center;
            }
            
            .boton {
                width: 100%;
                justify-content: center;
            }
        }
    </style>

</head>
<body>
    <header class="encabezado">
        <div class="avatar">Ad</div>
        <h1>
            <?php
                echo "Bienvenido " . $row['nombre'] ."!";
            ?>
        </h1>
    </header>

    <main class="contenido-principal">
        <section class="bienvenida">
            <h1><i class="fas fa-smile"></i> ¡Hola de nuevo!</h1>
            <p>Estamos felices de tenerte aquí. Desde tu panel podrás acceder a tu perfil, reportes y Usuario.</p>
            
            <div class="botones">
                <a href="./../Libro/MenuLibro/Menu.html" class="boton boton-primario">
                    <i class="fas fa-book-open">Libro</i>
                </a>
            </div>
        </section>
    </main>

    <footer>
        <p>Sistema Escolar Primaria © 2023</p>
    </footer>

    <script>
        // Mostrar fecha actual
        const opcionesFecha = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        const fecha = new Date().toLocaleDateString('es-ES', opcionesFecha);
        document.getElementById('fecha').textContent = fecha;

        // Ejemplo: Podrías agregar aquí la carga dinámica de actividades pendientes
    </script>
</body>
</html>