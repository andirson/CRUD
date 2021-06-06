<?php
/*
CRUD con PostgreSQL y PHP
================================
Este archivo inserta los datos 
enviados a través de formulario.php
================================
*/
?>
<?php
#Salir si alguno de los datos no está presente
if (!isset($_POST["nombre"]) || !isset($_POST["apellido"])|| !isset($_POST["cedula"])|| !isset($_POST["usuario"]) || !isset($_POST["estado"])|| !isset($_POST["contrasena"])|| !isset($_POST["rol"]) ){
    exit("Los datos no estan completos");
}
#Si todo va bien, se ejecuta esta parte del código...
include_once "config.php";

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$cedula = $_POST["cedula"];
$usuario = $_POST["usuario"];
$estado = $_POST["estado"];
$contrasena = $_POST["contrasena"];
$rol = $_POST["rol"];

$sql = $databasePDO->prepare("INSERT INTO tarea_crud(nombre, apellido, cedula, usuario, estado, contrasena, rol) VALUES (?, ?, ?, ?, ?, ?, ?);");
$resultado = $sql->execute([$nombre, $apellido, $cedula, $usuario, $estado, $contrasena, $rol]); # Pasar en el mismo orden de los ?
#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar
if ($resultado === true) {
    # Redireccionar a la lista
	header("Location: form_read.php");
} else {
    echo "Algo salio mal. Por favor verifica que la tabla exista";
}
