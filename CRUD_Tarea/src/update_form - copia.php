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
#Si la mascota existe, se ejecuta esta parte del código
?>


<div>
	<div>
		<h1>Actualizar Usuario</h1>
		<form action="update.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $usuario->id; ?>">
			<div class="form-group">
				<label for="nombre">Nombre usuario</label>
				<input value="<?php echo $usuario->nombre; ?>" required name="nombre" type="text" id="nombre" placeholder="Nombre del usuario" >
			</div>
			<div>
				<label for="apellido">Apellido usuario</label>
				<input value="<?php echo $usuario->apellido; ?>" required name="apellido" type="text" id="apellido" placeholder="Apellido del usuario">
			</div>
			<div>
				<label for="cedula">Cedula usuario</label>
				<input value="<?php echo $usuario->cedula; ?>" required name="cedula" type="text" id="cedula" placeholder="Cedula del usuario">
			</div>
			<div>
				<label for="usuario">Usuario o nick</label>
				<input value="<?php echo $usuario->usuario; ?>" required name="usuario" type="text" id="usuario" placeholder="Usuario o nick">
			</div>
			<div>
				<label for="estado">Estado del usuario</label>
				<input value="<?php echo $usuario->estado; ?>" required name="estado" type="text" id="estado" placeholder="Estado del usuario">
			</div>
			<div>
				<label for="rol">Rol del usuario</label>
				<input value="<?php echo $usuario->rol; ?>" required name="rol" type="text" id="rol" placeholder="Rol del usuario">
			</div>
			<br>
			<br>
			<button type="submit">Actualizar Usuario</button>
			<br><br>
			<a href="form_update.php">Volver al Listado de los usuarios (Actualizar)</a>
		</form>
	</div>
</div>
