<?php 
include('../php/conexion.php');

$sql="SELECT * FROM datosusuario";
$resultado=mysqli_query($conexion, $sql);

$sql2="SELECT * FROM viajes";
$resultado2=mysqli_query($conexion, $sql2);

$sql3="SELECT pais, count(pais) AS Total FROM viajes GROUP BY pais";
$resultado3=mysqli_query($conexion, $sql3);

$sql4="SELECT tipo_transporte, count(tipo_transporte) AS Total FROM transporte GROUP BY tipo_transporte ORDER BY Total DESC";
$resultado4=mysqli_query($conexion, $sql4);

$sql5="SELECT tipo_alojamiento, count(tipo_alojamiento) AS Total FROM alojamiento GROUP BY tipo_alojamiento ORDER BY Total DESC";
$resultado5=mysqli_query($conexion, $sql5);

$sql6="SELECT count(usuario) AS Total FROM datosusuario";
$resultado6=mysqli_query($conexion, $sql6);
$array6=mysqli_fetch_row($resultado6);

$sql7="SELECT count(idviaje) AS Total FROM viajes";
$resultado7=mysqli_query($conexion, $sql7);
$array7=mysqli_fetch_row($resultado7);
?>