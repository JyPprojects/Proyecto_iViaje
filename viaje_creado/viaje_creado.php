<?php
//INCLUDES
include("../php/conexion.php");
include("../php/sesion.php");
include("../php/funciones.php");

$info_viaje=select_query("*", "viajes", "id_usuario", "$_SESSION[id_usuario]");
$info_transporte=select_query("*", "transporte", "id_viaje", "$_SESSION[id_viaje]");
$info_estancia=select_query("*", "alojamiento", "id_viaje", "$_SESSION[id_viaje]");
$info_comida=select_query_necesidad("necesidad_viaje", "necesidades_viaje", "id_viaje", "$_SESSION[id_viaje]", "id_necesidad", "1");
$info_bebida=select_query_necesidad("necesidad_viaje", "necesidades_viaje", "id_viaje", "$_SESSION[id_viaje]", "id_necesidad", "2");
$info_utensilios=select_query_necesidad("necesidad_viaje", "necesidades_viaje", "id_viaje", "$_SESSION[id_viaje]", "id_necesidad", "3");
$info_general=select_query_necesidad("necesidad_viaje", "necesidades_viaje", "id_viaje", "$_SESSION[id_viaje]", "id_necesidad", "4");

$sql="SELECT id_necesidad_viaje, id_usuario, necesidad_viaje FROM necesidades_viaje WHERE id_necesidad = 1 AND id_viaje = $_SESSION[id_viaje]";
$query=mysqli_query($conexion, $sql);

$sql2="SELECT id_usuario, necesidad_viaje FROM necesidades_viaje WHERE id_necesidad = 2 AND id_viaje = $_SESSION[id_viaje]";
$query2=mysqli_query($conexion, $sql2);

?>