<?php
/*
================================
Este archivo muestra un formulario que
se envía a create_Edificio.php, el cual guardará
los datos
================================
*/
?>

<div class="row">
	<div class="col-12">
		<h1>Crear un nuevo usuario</h1>
		<form action="create.php" method="POST">
			<div>
				<label for="nombre">Nombre usuario:</label>
				<input required name="nombre" type="text" id="nombre" placeholder="Nombre del usuario">
			</div>
			<br>
			<div>
				<label for="apellido">Apellido usuario:</label>
				<input required name="apellido" type="text" id="apellido" placeholder="Apellido del usuario">
			</div>
			<br>
			<div>
				<label for="cedula">Cedula usuario:</label>
				<input required name="cedula" type="number" id="cedula" placeholder="Cedula del usuario">
			</div>
			<br>
			<div>
				<label for="usuario">Usuario o nick:</label>
				<input required name="usuario" type="text" id="usuario" placeholder="Usuario o nick">
			</div>
			<br>
			<div>
				<label for="estado">Estado usuario:</label>
				<input required name="estado" type="text" id="estado" placeholder="Estado del usuario">
			</div>
			<br>
			<div>
				<label for="contrasena">Contrasena usuario:</label>
				<input required name="contrasena" type="text" id="contrasena" placeholder="Contrasena del usuario">
			</div>
			<br>
			<div>
				<label for="rol">Rol usuario:</label>
				<input required name="rol" type="text" id="rol" placeholder="Rol del usuario">
			</div>
			<br>
			<button type="submit">Crear Usuario</button>
			<br><br>
			<!-- Enlace a listado de Edificios -->
			<a href="../menu_principal.php">Volver al listado de opciones CRUD</a>
		</form>
	</div>
</div>
