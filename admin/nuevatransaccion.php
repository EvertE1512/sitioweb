<?php
ini_set('dysplay_errors', 1);
error_reporting(E_ALL);

include('../conexion/db.php');

$id_usuario= '1';
$cartera= $_POST['cartera'];
$categoria= $_POST['categoria'];
$producto= $_POST['producto'];
$descripccion= $_POST['descripccion'];
$valor= $_POST['valor'];

$consulta="INSERT INTO `transacciones` (`id_usuario`, `cartera`, `categoria`, `producto`, `descripcion`, `valor`)
VALUES ('$id_usuario', '$cartera', '$categoria', '$producto', '$descripccion', '$valor');";

$resultado=mysqli_query($conexion,$consulta) or die ("error al cadastrar");
echo "transaccion cadastrada";

mysqli_close($conexion);
header("location:admin.php");

?>