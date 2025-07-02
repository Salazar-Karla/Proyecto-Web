<h2 class="titulo-seccion">Nuevo Administrador</h2>
<section class="formulario-container">
	<form id="formAlumno" class="formulario">
		<fieldset>
			<legend>Datos del Administrador</legend>

			<div class="campo fila">
			    <div class="grupo">
			        <label for="Nombre">Nombre</label>
			        <input type="text" name="Nombre" id="Nombre" required>
			    </div>
			    <div class="grupo">
			        <label for="ap_Pat">Apellido Paterno</label>
			        <input type="text" name="ap_Pat" id="ap_Pat" required>
			    </div>
			    <div class="grupo">
			        <label for="ap_Mat">Apellido Materno</label>
			        <input type="text" name="ap_Mat" id="ap_Mat" required>
			    </div>
			</div>

			<div class="campo">
				<label for="correo">Correo electrónico</label>
				<input type="email" name="correo" id="correo" required>
			</div>

			<div class="campo">
				<label for="contrasena">Contraseña</label>
				<input type="password" name="contrasena" id="contrasena" required>
			</div>

			<div class="campo">
				<label for="numero">Número de teléfono</label>
				<input type="text" name="numero" id="numero" pattern="[0-9]+" required>
			</div>

			<div class="campo">
				<label for="telefono">Número de teléfono alternativo</label>
				<input type="text" name="telefono" id="telefono" pattern="[0-9]+" required>
			</div>

			<div class="boton-container">
				<button type="submit" class="btn-formulario">Registrar Administrador</button>
			</div>
		</fieldset>
	</form>
</section>
