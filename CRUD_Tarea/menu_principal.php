<?php
/*
================================
Este archivo muestra un listado de opciones (CRUD)
Tarea de Anderson Castañeda Trujillo - Geoinformación
================================
*/
?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="panel-title" align = center>
						<h1> REGISTRO DE USUARIOS</h1>
					</div>
				</div>
				<div class="panel-body">
					<div class="col-12">
						<a href="src/form_create.php"><button type="button" class="btn btn-primary btn-block">CREAR USUARIO</button></a> 
						<br>

						<a href="src/form_read.php"><button type="button" class="btn btn-primary btn-block">LEER USUARIOS</button></a> 
						<br>

						<a href="src/form_update.php"><button type="button" class="btn btn-primary btn-block">ACTUALIZAR USUARIO</button></a> 
						<br>

						<a href="src/form_delete.php"><button type="button" class="btn btn-primary btn-block">BORRAR USUARIO</button></a> 
						<br>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>