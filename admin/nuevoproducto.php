<?php
ini_set('dysplay_errors', 1);
error_reporting(E_ALL);

include('../conexion/db.php');

$nombre= $_POST['nombre'];
$valor= $_POST['valor'];

$consulta="INSERT INTO `productos` (`nombre`, `valor`)
VALUES ('$nombre', '$valor');";

$resultado=mysqli_query($conexion,$consulta) or die ("error al cadastrar");
echo "Producto cadastrado";

mysqli_close($conexion);
header("location:productos.php");

?>