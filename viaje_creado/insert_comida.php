<?php
include("../php/conexion.php");

$id_viaje = preg_replace("/\_/", " ", $_GET["id_viaje"]);
$usuario_nuevo = preg_replace("/\_/", " ", $_GET["usuario_nuevo"]);
$input_nuevo = preg_replace("/\_/", " ", $_GET["input_nuevo"]);

$sql="INSERT INTO necesidades_viaje (id_viaje, id_necesidad, id_usuario, necesidad_viaje) VALUES ('$id_viaje' , 1 , '$usuario_nuevo' , '$input_nuevo')";
$consulta=mysqli_query($conexion, $sql);



?>
