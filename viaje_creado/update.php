<?php 
include("../php/conexion.php");

$sql="UPDATE necesidades_viaje SET necesidad_viaje = '$_GET[input]' WHERE id_necesidad_viaje = '$_GET[id_oculto]'";
$consulta=mysqli_query($conexion, $sql);

?>
