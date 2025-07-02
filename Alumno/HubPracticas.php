<?php
$id = $_GET['id'] ?? '1';

?>

<div id="contenedor-Practicas">
	<h2 class="titulo-seccion">¿Qué examen vas a presentar?</h2>
	<ul id="lista-Practicas">
		<li>
			<button onclick="mostrarFormulario('SucesosEnElTiempo')">Sucesos en el tiempo</button>
		</li>
		<li>
			<button onclick="mostrarFormulario('Figuras')">Figuras</button>
		</li>
		<li>
			<button onclick="mostrarFormulario('Longitudes')">Longitudes</button>
		</li>
		<li>
			<button onclick="mostrarFormulario('Contar50')">Contar hasta 50</button>
		</li>
		
	</ul>
</div>
<style>
	#contenido-dinamico {
		min-width: 90vw;
	}
	#contenedor-Practicas{
		align-content: center;
		min-width: 90vw;
	}
	#lista-Practicas li {
		list-style-type: none;
		align-content: center;
		padding-left: 20vw;
	}
	
    #contenedor-Practicas button {
        padding: 10px 15px;
        background-color: #8e24aa;
        color: white;
        border: none;
        border-radius: 8px;
        font-weight: bold;
        cursor: pointer;
        transition: background 0.3s ease;
        min-width: 50vw;
        margin: 5px;
    }

    #contenedor-Practicas button:hover {
        background-color: #e64a19;
    }
</style>