<?php
include("../../php/conexion.php");
include("../../php/funciones.php");

$input_delete=$_GET["input_delete"];

$sql="DELETE FROM necesidades_viaje WHERE id_necesidad_viaje = '$input_delete'";
$consulta=mysqli_query($conexion, $sql);


?>