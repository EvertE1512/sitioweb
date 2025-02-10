<?php

include('../conexion/db.php');

$id_produc= $_POST['id_produc'];
$nombre= $_POST['nombre'];
$valor= $_POST['valor'];



mysqli_query($conexion, "UPDATE `productos` SET `nombre` = '$nombre', 
`valor` = '$valor' WHERE `id` = '$id_produc'")or die("error al actualizar");

mysqli_close($conexion);
header("location:editarproducto.php");

?>