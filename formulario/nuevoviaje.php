<?php 
//INCLUDES
include("../php/conexion.php");
include("../php/sesion.php");

if (isset($_POST["enviar"])){
  
$nviaje=$_POST["nviaje"];
$fecha_ini=$_POST["fecha_ini"];
$fecha_fin=$_POST["fecha_fin"];
$bote=$_POST["bote"];

$consulta_viaje="INSERT INTO viajes (id_usuario, nombre_viaje, fecha_inicio, fecha_fin, bote) VALUES ('$_SESSION[id_usuario]', '$nviaje', '$fecha_ini', '$fecha_fin', '$bote')";
$consulta_insertar=mysqli_query($conexion, $consulta_viaje);






}






?> 