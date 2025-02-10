<?php

include('../conexion/db.php');

$id_trans= $_POST['id_trans'];
$cartera= $_POST['cartera'];
$categoria= $_POST['categoria'];
$producto= $_POST['producto'];
$descripccion= $_POST['descripccion'];
$valor= $_POST['valor'];



mysqli_query($conexion, "UPDATE `transacciones` SET `cartera` = '$cartera', 
`categoria` = '$categoria', `producto` = '$producto', `descripcion` = '$descripccion', 
`valor` = '$valor' WHERE `id` = '$id_trans'")or die("error al actualizar");

mysqli_close($conexion);
header("location:editartransaccion.php");

?>