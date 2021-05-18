<?php 
include("../php/conexion.php");

$input = preg_replace("/\_/", " ", $_GET["input"]);
$id_oculto = preg_replace("/\_/", " ", $_GET["id_oculto"]);

$sql="UPDATE necesidades_viaje SET necesidad_viaje = '$input' WHERE id_necesidad_viaje = '$id_oculto'";
$consulta=mysqli_query($conexion, $sql);

?>
