<?php
//INCLUDES
include("../php/conexion.php");
include("../php/sesion.php");
include("../php/funciones.php");

$sql_info_viaje="SELECT nombre_viaje, fecha_inicio, fecha_fin, bote FROM viajes INNER JOIN viajes_usuario on viajes.idviaje=viajes_usuario.id_viaje WHERE viajes.idviaje=$_SESSION[id_viaje]";
$info_viaje0=mysqli_query($conexion, $sql_info_viaje);
$info_viaje=mysqli_fetch_row($info_viaje0);
$info_transporte=select_query("*", "transporte", "id_viaje", "$_SESSION[id_viaje]");
$info_estancia=select_query("*", "alojamiento", "id_viaje", "$_SESSION[id_viaje]");
$info_comida=select_query_necesidad("necesidad_viaje", "necesidades_viaje", "id_viaje", "$_SESSION[id_viaje]", "id_necesidad", "1");
$info_bebida=select_query_necesidad("necesidad_viaje", "necesidades_viaje", "id_viaje", "$_SESSION[id_viaje]", "id_necesidad", "2");
$info_utensilios=select_query_necesidad("necesidad_viaje", "necesidades_viaje", "id_viaje", "$_SESSION[id_viaje]", "id_necesidad", "3");
$info_general=select_query_necesidad("necesidad_viaje", "necesidades_viaje", "id_viaje", "$_SESSION[id_viaje]", "id_necesidad", "4");

$sql="SELECT id_necesidad_viaje, id_usuario, necesidad_viaje FROM necesidades_viaje WHERE id_necesidad = 1 AND id_viaje = $_SESSION[id_viaje]";
$query=mysqli_query($conexion, $sql);

$sql2="SELECT id_necesidad_viaje, id_usuario, necesidad_viaje FROM necesidades_viaje WHERE id_necesidad = 2 AND id_viaje = $_SESSION[id_viaje]";
$query2=mysqli_query($conexion, $sql2);

$sql3="SELECT id_necesidad_viaje, id_usuario, necesidad_viaje FROM necesidades_viaje WHERE id_necesidad = 2 AND id_viaje = $_SESSION[id_viaje]";
$query3=mysqli_query($conexion, $sql3);

$sql4="SELECT id_necesidad_viaje, id_usuario, necesidad_viaje FROM necesidades_viaje WHERE id_necesidad = 2 AND id_viaje = $_SESSION[id_viaje]";
$query4=mysqli_query($conexion, $sql4);

$sql6="SELECT usuario FROM datosusuario INNER JOIN viajes_usuario on datosusuario.id_usuario=viajes_usuario.id_usuario";
$query6=mysqli_query($conexion, $sql6);

?>