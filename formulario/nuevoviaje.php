<?php 
//INCLUDES
include("../login_registro/conexion.php");


if (isset($_POST["enviar"])){

    
$nviaje=$_POST["nviaje"];
$fecha_ini=$_POST["fecha_ini"];
$fecha_fin=$_POST["fecha_fin"];
$bote=$_POST["bote"];

echo $nviaje;
echo "</br>";
echo $fecha_ini;
echo "</br>";
echo $fecha_fin;
echo "</br>";
echo $bote;

$sql="INSERT INTO viajes (nombre_viaje, fecha_inicio, fecha_fin) VALUES '$nviaje' , '$fecha_ini', '$fecha_fin'";
$consulta_insertar=mysqli_query($sql, $conexion);
$resultado_insertar=mysqli_fetch_row($consulta_insertar);



}






?> 