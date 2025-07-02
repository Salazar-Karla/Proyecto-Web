
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
                    <a href="#">Bloque</a>
                    <div class="dropdown-content">
                        <a href="#" onclick="mostrarBloque(1)">1er Bloque</a>
                        <a href="#" onclick="mostrarBloque(2)">2do Bloque</a>
                        <a href="#" onclick="mostrarBloque(3)">3er Bloque</a>
                    </div>
                </div>

                <a href="#">Sesión</a>

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
        <!-- Panel de bienvenida -->
        <div class="bienvenida">
            <h2>¡Bienvenido!👋</h2>
            <p>Esta es una plataforma divertida y educativa creada especialmente para ti 😊. Aquí podrás ver recursos, aprender y realizar tus exámenes de una forma fácil y segura. ¡Disfruta aprendiendo!🦖⭐</p>
            <div class="bienvenida-img-container">
                <img src="../Imagenes/niños.jpg" alt="Niños felices">
            </div>
        </div>
        <div id="contenido-dinamico">
    
            <section class="bienvenida">
                <h2>¡Bienvenido al Panel de Alumno!👋</h2>
                <p>Te damos la más cordial bienvenida a la plataforma de apoyo a la educación primaria. Desde este panel podrás:</p>
                <p>🔸Revisar los contenidos que suba tu profesor.</p>
                <p>🔸Revisar tus calificaciones en tiempo real.</p>
                <p>🔸Realizar y repasar los temas que te enseñen en clases.</p>
                <p>🔸Realizar formularios y examenes que te asignen.</p>
                <p>Además, cuentas con una sección de ayuda guiada para apoyarte en cada paso, asegurando un uso eficiente y sencillo del sistema.</p>
                <p>¡Gracias por formar parte del alumnado! Intentaremos brindarte el mejor funcionamiento de la plataforma educativa para tu crecimiento academico.</p>
                <div class="imagen-final">
                    <img src="../Imagenes/alum.jpg" alt="Alumno" />
                </div>
            </section>
        </div>
    </main>
        <script>
            function mostrarPrincipal() {
                document.getElementById('contenido-dinamico').innerHTML ="";
                document.getElementById('contenido-dinamico').innerHTML = `
                    <section class="bienvenida">
                        <h2>¡Bienvenido al Panel de Alumno!👋</h2>
                        <p>Te damos la más cordial bienvenida a la plataforma de apoyo a la educación primaria. Desde este panel podrás:</p>
                        <p>🔸Revisar los contenidos que suba tu profesor.</p>
                        <p>🔸Revisar tus calificaciones en tiempo real.</p>
                        <p>🔸Realizar y repasar los temas que te enseñen en clases.</p>
                        <p>🔸Realizar formularios y examenes que te asignen.</p>
                        <p>Además, cuentas con una sección de ayuda guiada para apoyarte en cada paso, asegurando un uso eficiente y sencillo del sistema.</p>
                        <p>¡Gracias por formar parte del alumnado! Intentaremos brindarte el mejor funcionamiento de la plataforma educativa para tu crecimiento academico.</p>
                        <div class="imagen-final">
                            <img src="../Imagenes/alum.jpg" alt="Alumno" />
                        </div>
                    </section>
                `;
            }
            function mostrarBloque(n) {
                fetch(`HubBloque.php?id=${n}`)
            .then(response => response.text())
            .then(html => {
                document.getElementById('contenido-dinamico').innerHTML = html;
            });
            }
            function mostrarListaExamenes(n){
            fetch(`Consultas_Base_Datos/obtenerExamenes.php?id=${n}`)
                .then(response=>response.json())
                    .then(data=>{
                        const lista= document.getElementById(`lista-Examenes`);
                        console.log(data.cantidad);
                        data.examenes.forEach(
                            item=>{
                                    const li=document.createElement('li');
                                    const button=document.createElement('button');
                                    button.onclick=()=>generarExamen(item.id_examen);
                                    button.type="button";
                                    button.textContent=item.nombreExamen;
                                    li.appendChild(button);
                                    lista.appendChild(li);
                            });
                    })
                    .catch(error=> {
                        console.error("Error al obtener examenes",error);
                    });
            }
            function mostrarExamenes(n) {
                    fetch('HubExamenes.php').then(response => response.text())
            .then(html => {
                document.getElementById('contenido-dinamico').innerHTML = html;
            });
            mostrarListaExamenes(n);
            }
            function generarExamen(n){
                fetch('Examen.php')
                    .then(response => response.text())
                        .then(html => {
                            document.getElementById('contenido-dinamico').innerHTML = html;
                        });
                obtener_Preguntas(n)
            }
            function obtener_Preguntas(n) {
                fetch(`Consultas_Base_Datos/obtener_preguntas_por_examen.php?id=${n}`)
                .then(response=>response.json())
                .then(data=>{
                    if (data.error) {
                        alert(data.error);
                    }
                    else{
                        const preguntasAleatorias = aleatorizar_Preguntas(data.preguntas);
                        console.log(data.examen.cantidad_preguntas);
                        mostrar_Preguntas(preguntasAleatorias,data.examen.cantidad_preguntas);
                    }

                })
                .catch(error => {
                   console.error("Error al obtener el examen:", error);
                });
            }
            function aleatorizar_Preguntas(preguntas) {
                preguntas = preguntas.sort(() => Math.random() - 0.5);
                return preguntas.map(p => {
                    const opciones = [
                        { texto: p.opcionA, id: 1 },
                        { texto: p.opcionB, id: 2 },
                        { texto: p.opcionC, id: 3 },
                        { texto: p.opcionD, id: 4 },
                    ];

                    const opciones_aleatorias = opciones.sort(() => Math.random() - 0.5);

                    return {
                        id: p.id_pregunta,
                        enunciado: p.pregunta,
                        opciones: opciones_aleatorias
                    };
                });

            }
            function mostrar_Preguntas(preguntas,size) {
                const formulario = document.getElementById("Cuestionario");

                preguntas.forEach((pregunta, index) => {
                    if (index<size) {
                        const fieldset = document.createElement("fieldset");
                    const legend = document.createElement("legend");
                    legend.textContent = `Pregunta ${index + 1}: ${pregunta.enunciado}`;
                    fieldset.appendChild(legend);

                    pregunta.opciones.forEach(opcion => {
                        const label = document.createElement("label");
                        const radio = document.createElement("input");
                        radio.type = "radio";
                        radio.name = `pregunta_${pregunta.id}`;
                        radio.value = opcion.id;
                        radio.id = `respuesta_${pregunta.id}_${opcion.id}`;

                        label.appendChild(radio);
                        label.appendChild(document.createTextNode(" " + opcion.texto));
                        fieldset.appendChild(label);
                        fieldset.appendChild(document.createElement("br"));
                    });

                    formulario.appendChild(fieldset);
                    }
                    
                });
                const boton = document.createElement("button");
                boton.type = "submit";
                boton.textContent = "Enviar respuestas";
                formulario.appendChild(boton);
            }
            function mostrarFormulario(cadena) {
                fetch(`Formulario/${cadena}/index.html`)
                    .then(response => response.text())
                    .then(html => {
                        document.getElementById('contenido-dinamico').innerHTML = html;
                    })
                    .catch(error => console.error('Error al cargar el formulario:', error));
            }
            function mostrarPracticas() {
                fetch(`HubPracticas.php`)
                    .then(response => response.text())
                    .then(html => {
                        document.getElementById('contenido-dinamico').innerHTML = html;
                    })
                    .catch(error => console.error('Error al cargar el formulario:', error));
            }

        </script>


</body>
</html>

