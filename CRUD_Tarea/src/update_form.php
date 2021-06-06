<?php
/*
CRUD con PostgreSQL y PHP
================================
Este archivo muestra un formulario llenado automáticamente
(a partir del ID pasado por la URL) para editar
================================
 */
 
if (!isset($_GET["id"])) {
    exit();
}

$id = $_GET["id"];
include_once "config.php";

$sql = $databasePDO->prepare("SELECT id, nombre, apellido, cedula, usuario, estado, rol FROM tarea_crud WHERE id = ?;");
$sql->execute([$id]);

$usuario = $sql->fetchObject();

if (!$usuario) {
    #No existe
    echo "¡No existe algun usuario con ese ID!";
    exit();
}
#Si el usuario existe, se ejecuta esta parte del código
?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<?php
#$estado = $sql['estado'];
$estado = $usuario->estado;
#echo $estado;
#$estado = $usuario->estado;
#$estado = $usuario[7];



if ($estado == 'Activo') {

	echo'
	<div class="container">
		<div class="row">
		<h1>Actualizar Usuario</h1>

		<form action="update.php" method="POST">
			<input type="hidden" name="id" value="'.$usuario->id.'">

			<div class="row mb-3">
				<label for="nombre" class="col-sm-2 col-form-label">Nombre usuario</label>
				<div class="col-sm-6">
				<input value="'.$usuario->nombre.'" required name="nombre" class="form-control" type="text" id="nombre" placeholder="Nombre del usuario" >
				</div>
			</div>

			<div class="row mb-3">
				<label for="apellido" class="col-sm-2 col-form-label">Apellido usuario</label>
				<div class="col-sm-6">
				<input value="'.$usuario->apellido.'" required name="apellido" class="form-control" type="text" id="apellido" placeholder="Apellido del usuario">
				</div>
			</div>

			<div class="row mb-3">
				<label for="cedula" class="col-sm-2 col-form-label">Cedula usuario</label>
				<div class="col-sm-6">
				<input value="'.$usuario->cedula.'" required name="cedula" class="form-control" type="text" id="cedula" placeholder="Cedula del usuario">
				</div>
			</div>

			<div class="row mb-3">
				<label for="usuario" class="col-sm-2 col-form-label">Usuario o nick</label>
				<div class="col-sm-6">
				<input value="'.$usuario->usuario.'" required name="usuario" class="form-control" type="text" id="usuario" placeholder="Usuario o nick">
				</div>
			</div>

			<div class="row mb-3">
				<label for="estado" class="col-sm-2 col-form-label">Estado</label>
				<div class="col-sm-6">
				<input value="'.$usuario->estado.'" required name="estado" class="form-control" type="text" id="estado" placeholder="Estado">
				</div>
			</div>
			
			<br>
			<button type="submit" class="btn btn-primary mb-3">Actualizar Usuario</button>
			<br><br>
			<a href="form_update.php">Volver al Listado de los usuarios (Actualizar)</a>
		</form>
		</div>
	</div>';

} else{
	echo'
		
	<div class="container">
	<div class="row">
		<h1>Actualizar Usuario</h1>
		<form action="update.php" method="POST">
			<input type="hidden" name="id" value="'.$usuario->id.'">

			<div class="row mb-3">
				<label for="estado" class="col-sm-2 col-form-label"><h4>Estado</h4></label>
				<div class="col-sm-4">
				<input value="'.$usuario->estado.'" required name="estado" class="form-control" type="text" id="estado" placeholder="Estado">
				</div>
			</div>

			<br>
			<button type="submit" class="btn btn-primary mb-3">Actualizar Usuario</button>
			<br><br>
			<a href="form_update.php">Volver al Listado de los usuarios (Actualizar)</a>
		</form>
	</div>
	</div>';

} #fin del else

?>



