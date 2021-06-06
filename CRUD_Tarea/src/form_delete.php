<?php
/*
CRUD con PostgreSQL y PHP
================================
Este archivo lista todos los
datos de la tabla, obteniendo a
los mismos como un arreglo
================================
*/
?>

<?php
	include_once "config.php";
	$sql = $databasePDO->query("select id, nombre, apellido, cedula, usuario, estado, contrasena, rol from tarea_crud WHERE estado = 'Inactivo'");
	$resultados = $sql->fetchAll(PDO::FETCH_OBJ);
?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<div class="container">
	<div class="row">
		<div class="col-12">
			<h1>Listado de usuarios</h1>
			<br>
			<div>
				<table border="1" class="table table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Apellidos</th>
							<th>Cedula</th>
							<th>Usuario</th>
							<th>Estado</th>
							<th>Rol</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($resultados as $usuarios){ ?>
							<tr>
								<td><?php echo $usuarios->id ?></td>
								<td><?php echo $usuarios->nombre ?></td>
								<td><?php echo $usuarios->apellido ?></td>
								<td><?php echo $usuarios->cedula ?></td>
								<td><?php echo $usuarios->usuario ?></td>
								<td><?php echo $usuarios->estado ?></td>
								<td><?php echo $usuarios->rol ?></td>
								<td><a href="<?php echo "delete.php?id=" . $usuarios->id?>">Eliminar 🗑️</a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<br>
	<a href="../menu_principal.php">Volver al listado de opciones CRUD</a>
</div>


