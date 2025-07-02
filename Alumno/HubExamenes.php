<?php
$id = $_GET['id'] ?? '1';

?>

<div id="contenedor-Examenes">
	<h2 class="titulo-seccion">¿Qué examen vas a presentar?</h2>
	<ul id="lista-Examenes">
		
	</ul>
</div>
<style>
	#contenido-dinamico {
		min-width: 90vw;
	}
	#contenedor-Examenes{
		align-content: center;
		min-width: 90vw;
	}
	#lista-Examenes li {
		list-style-type: none;
		align-content: center;
		padding-left: 20vw;
	}
	
    #contenedor-Examenes button {
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

    #contenedor-Examenes button:hover {
        background-color: #e64a19;
    }
</style>