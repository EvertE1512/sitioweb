<?php

include('../conexion/db.php');

$id = $_POST['id_produc'];
mysqli_query($conexion, "DELETE FROM productos WHERE id='$id'")or die("error al eliminar");

mysqli_close($conexion);
header("location:productos.php");

?>