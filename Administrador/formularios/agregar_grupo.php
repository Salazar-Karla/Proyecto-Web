<h2 class="titulo-seccion">Nuevo Grupo</h2>
<section class="formulario-container">
	<form id="formAlumno" class="formulario">
		<fieldset>
			<legend>Datos del Grupo</legend>

			<div class="campo fila">
				<div class="grupo">
					<label for="Profesor">Profesor</label>
					<select name="Profesor" id="Profesor" required>
						<option value="">Seleccione un grupo</option>
					</select>
				</div>
				<div class="grupo">
					<label for="Bloques">Bloques</label>
					<select name="Bloques[]" id="Bloques" required multiple>
						<option value="">Seleccione un grupo</option>
					</select>
				</div>
				
		
			</div>
			<div class="boton-container">
				<button type="submit" class="btn-formulario">Registrar Grupo</button>
			</div>
		</fieldset>
	</form>
</div>

