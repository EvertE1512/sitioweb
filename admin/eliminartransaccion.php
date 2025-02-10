<?php

include('../conexion/db.php');

$id = $_POST['id_trans'];
mysqli_query($conexion, "DELETE FROM transacciones WHERE id='$id'")or die("error al eliminar");

mysqli_close($conexion);
header("location:transacciones.php");

?>