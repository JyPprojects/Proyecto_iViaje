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
?>