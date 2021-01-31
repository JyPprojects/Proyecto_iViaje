<?php
include("../php/conexion.php");

$sql="INSERT INTO viajes (id_viaje, id_necesidad, id_usuario, necesidad_viaje) VALUES ('$_GET[id_viaje]' , 2 , '$_GET[usuario_nuevo]' , '$_GET[input_nuevo]')";
$consulta=mysqli_query($conexion, $sql);




?>
