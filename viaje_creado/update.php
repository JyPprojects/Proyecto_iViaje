<?php
error_reporting(0);

include("../php/conexion.php");

$input = preg_replace("/\_/", " ", $_GET["input"]);
$id_oculto = preg_replace("/\_/", " ", $_GET["id_oculto"]);

$input2 = preg_replace("/\_/", " ", $_GET["input2"]);
$id_oculto2 = preg_replace("/\_/", " ", $_GET["id_oculto2"]);

if (!empty($id_oculto)){
    $sql="UPDATE necesidades_viaje SET necesidad_viaje = '$input' WHERE id_necesidad_viaje = '$id_oculto'";
    $consulta=mysqli_query($conexion, $sql);
}
else{
    $sql="UPDATE necesidades_viaje SET necesidad_viaje = '$input2' WHERE id_necesidad_viaje = '$id_oculto2'";
    $consulta=mysqli_query($conexion, $sql);
}



?>
