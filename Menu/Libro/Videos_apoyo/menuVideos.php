<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Videos</title>

    <link rel="stylesheet" href="menuVideos.css">k

</head>

<body>
    <div class="container">
        <h1>Videos de apoyo</h1>
        <div class="menu" id="menu-unidades">
            <!-- Botones se generarán aquí con JavaScript -->
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menu = document.getElementById('menu-unidades');

            // Crear 9 botones de unidades
            for (let i = 1; i <= 9; i++) {
                const boton = document.createElement('button');
                boton.className = 'unidad-btn';
                boton.textContent = `Unidad ${i}`;
                
                // Redirigir al hacer clic (cambia la ruta si es necesario)
                boton.onclick = () => {
                    window.location.href = `./Tema${i}/Video_0${i}.html`; // Cambia esto si tus archivos tienen otro nombre
                    // Alternativa: alert(`Ir a la Unidad ${i}`); // Para pruebas sin crear páginas
                };

                menu.appendChild(boton);
            }
        });
    </script>

</body>

</html>