<?php
//INCLUDES
include("../php/conexion.php");
include("../php/sesion.php");
include("../php/funciones.php");

$info_viaje=select_query("*", "viajes", "id_usuario", "$_SESSION[id_usuario]");

?>