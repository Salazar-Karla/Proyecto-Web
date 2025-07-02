<?php
$id = $_GET['id'] ?? '1';

?>
<style>
    .contenedor-usuarios {
        display: flex;
        justify-content: space-between;
        gap: 30px;
        padding: 30px 50px;

    }

    .usuario-card {
        background-color: #fff3e0;
        border: 2px solid #7b1fa2;
        border-radius: 12px;
        padding: 20px;
        text-align: center;
        max-width: 14vw;
        flex: 1;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .usuario-card h3 {
        color: #7b1fa2;
        margin-bottom: 15px;
        text-overflow: initial;
  		white-space: wrap;
  		overflow:hidden ;
    }

    .usuario-card img {
        max-width: 100px;
        height: auto;
        margin-bottom: 20px;
    }

    .usuario-card button {
        padding: 10px 15px;
        background-color: #8e24aa;
        color: white;
        border: none;
        border-radius: 8px;
        font-weight: bold;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .usuario-card button:hover {
        background-color: #e64a19;
    }


</style>
<script>
	function mostrarExamenes(n) {
	    fetch('HubExamenes.php').then(response => response.text())
            .then(html => {
                document.getElementById('contenido-dinamico').innerHTML = html;
            });
    }
</script>
<h2 class="titulo-seccion">➕ Selecciona el tipo de material que quieres revisar ➕</h2>

<div class="contenedor-usuarios">
    <div class="usuario-card">
        <h3>Realizar Examen</h3>
        <img src="../Imagenes/Examen.png" alt="Examen">
        <button onclick="mostrarExamenes(<?= htmlspecialchars($id) ?>)">Realizar Examen</button>
    </div>
    <div class="usuario-card">
        <h3>Revisar Videos</h3>
        <img src="../Imagenes/video.png" alt="Video">
        <button onclick="mostrarVideos(<?= htmlspecialchars($id) ?>)">Revisar Videos</button>
    </div>
    <div class="usuario-card">
        <h3>Ver Imprimibles</h3>
        <img src="../Imagenes/Imprimir.png" alt="Imprimibles">
        <button onclick="mostrarImprimibles(<?= htmlspecialchars($id) ?>)">Imprimibles</button>
    </div>

    <div class="usuario-card">
        <h3>Practicas</h3>
        <img src="../Imagenes/Examen.png" alt="Practicas">
        <button onclick="mostrarPracticas(<?= htmlspecialchars($id) ?>)">Ponte a prueba</button>
    </div>
    <div class="usuario-card">
        <h3>Consultar material</h3>
        <img src="../Imagenes/Libros.png" alt="Grupo">
        <button onclick="mostrarLibros(<?= htmlspecialchars($id) ?>)">Consultar libros</button>
    </div>
</div>