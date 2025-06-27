<h2 class="titulo-seccion">Nuevo Alumno</h2>
<div>
	<form id="formAlumno">
		<fieldset>
			<legend>Datos del alumno</legend>

			<label for="Nombre">Nombre</label>
			<input type="text" name="Nombre" required>

			<label for="ap_Pat">Apellido Paterno</label>
			<input type="text" name="ap_Pat" required>

			<label for="ap_Mat">Apellido Materno</label>
			<input type="text" name="ap_Mat" required>
			<br>

			<label for="correo">Correo electrónico</label>
			<input type="email" name="correo" required>

			<label for="contrasena">Contraseña</label>
			<input type="password" name="contrasena" required>
			<br>

			<label for="numero">Número de teléfono</label>
			<input type="text" name="numero" pattern="[0-9]+" required>
			<br>

			<label for="Grupo">Grupo</label>
			<select name="Grupo" id="Grupo" required>
				<option value="">Seleccione un grupo</option>
			</select>
			<br><br>

			<button type="submit" style="
				background-color: #007BFF;
				color: white;
				padding: 10px 20px;
				border: none;
				border-radius: 5px;
				cursor: pointer;
			">Registrar Alumno</button>

		</fieldset>
	</form>
</div>

