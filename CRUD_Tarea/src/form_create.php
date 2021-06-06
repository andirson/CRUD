<?php
/*
================================
Este archivo muestra un formulario que
se envía a create_Edificio.php, el cual guardará
los datos
================================
*/


?>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- 
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
-->

<div class="container">

	<div class="row">
		<h1>Crear un nuevo usuario</h1>
		<br>
		<form action="create.php" method="POST">
			<div class="row mb-3">
				<label for="nombre" class="col-sm-2 col-form-label">Nombre usuario:</label>
				<div class="col-sm-6">
					<input required name="nombre" class="form-control" type="text" id="nombre" placeholder="Nombre del usuario">
				</div>
			</div>
			<br>
			<div class="row mb-3">
				<label for="apellido" class="col-sm-2 col-form-label">Apellido usuario:</label>
				<div class="col-sm-6">
					<input required name="apellido" class="form-control" type="text" id="apellido" placeholder="Apellido del usuario">
				</div>
			</div>
			<br>
			<div class="row mb-3">
				<label for="cedula" class="col-sm-2 col-form-label">Cedula usuario:</label>
				<div class="col-sm-6">
					<input required name="cedula" class="form-control" type="number" id="cedula" placeholder="Cedula del usuario">
				</div>
			</div>
			<br>
			<div class="row mb-3">
				<label for="usuario" class="col-sm-2 col-form-label">Usuario o nick:</label>
				<div class="col-sm-6">
					<input required name="usuario" class="form-control" type="text" id="usuario" placeholder="Usuario o nick">
				</div>
			</div>
			<br>
			<div class="row mb-3">
				<label for="estado" class="col-sm-2 col-form-label">Estado usuario:</label>
				<div class="col-sm-6">
					<select required name="estado" class="form-select" type="text" id="estado">
					<option value="Activo">Activo</option>
					<option value="Inactivo">Inactivo</option>
					</select>
				</div>
			</div>
			<br>
			<div class="row mb-3">
				<label for="contrasena" class="col-sm-2 col-form-label">Contrasena usuario:</label>
				<div class="col-sm-6">
					<input required name="contrasena" class="form-control" type="text" id="contrasena" placeholder="Contrasena del usuario">
				</div>
			</div>
			<br>
			<div class="row mb-3">
				<label for="rol" class="col-sm-2 col-form-label">Rol usuario:</label>
				<div class="col-sm-6">
					<select required name="rol" class="form-select" type="text" id="estado">
					<option value="Administrador">Administrador</option>
					<option value="Usuario">Usuario</option>
					</select>
					</div>				
			</div>
			<br>
			<button type="submit" class="btn btn-primary mb-3">Crear Usuario</button>
			<br><br>
			<!-- Enlace a listado de Edificios -->
			<a href="../menu_principal.php">Volver al listado de opciones CRUD</a>
		</form>
	</div>
</div>
