<?php 
include("../php/conexion.php");

$sql="SELECT * FROM datosusuario";
$resultado=mysqli_query($conexion, $sql);

$sql2="SELECT * FROM viajes";
$resultado2=mysqli_query($conexion, $sql2);
?>