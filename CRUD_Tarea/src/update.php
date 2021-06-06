<?php
/*
CRUD con PostgreSQL y PHP
================================
Este archivo guarda los datos del formulario
en donde se editan
================================
*/
?>

<?php
#Salir si alguno de los datos no está presente

/*
if (
    !isset($_POST["nombre"]) ||
    !isset($_POST["apellido"]) ||
    !isset($_POST["cedula"]) ||
    !isset($_POST["usuario"]) ||
    !isset($_POST["estado"]) ||
    !isset($_POST["rol"]) ||
    !isset($_POST["id"])
){
   exit();
}
*/

if (
    isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["cedula"]) && isset($_POST["usuario"])  && isset($_POST["estado"]) && isset($_POST["id"])) 
    { #Cuando va nombre, apellido, cedula, usuario e id

#Si todo va bien, se ejecuta esta parte del código...
include_once "config.php";

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$cedula = $_POST["cedula"];
$usuario = $_POST["usuario"];
$estado = $_POST["estado"];

$sql = $databasePDO->prepare("UPDATE tarea_crud SET nombre = ?, apellido = ?, cedula = ?, usuario = ?, estado = ?  WHERE id = ?;");
$resultado = $sql->execute([$nombre, $apellido, $cedula, $usuario, $estado, $id]); # Pasar en el mismo orden de los ?

} elseif (isset($_POST["estado"]) && isset($_POST["id"])) { # Cuando va rol e id pero no van los demas

#Si todo va bien, se ejecuta esta parte del código...
include_once "config.php";

$id = $_POST["id"];
$estado = $_POST["estado"];

$sql = $databasePDO->prepare("UPDATE tarea_crud SET estado = ?  WHERE id = ?;");
$resultado = $sql->execute([$estado, $id]); # Pasar en el mismo orden de los ?

  } else { # Cuando no se cumple ninguno de los dos anteriores
  exit();
  }

#Si todo salio bien, retornar al form del listado de usuarios
if ($resultado === true) {
    header("Location: form_read.php");
} else {
    echo "Algo salio mal. Por favor verifica que la tabla exista, así como el ID del usuario";
}