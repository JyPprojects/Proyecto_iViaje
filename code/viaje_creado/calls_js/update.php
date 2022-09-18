<?php

include(../../php/conexion.php);

$input = preg_replace("/\_/", " ", $_GET["input"]);
$id_oculto = preg_replace("/\_/", " ", $_GET["id_oculto"]);

$input2 = preg_replace("/\_/", " ", $_GET["input2"]);
$id_oculto2 = preg_replace("/\_/", " ", $_GET["id_oculto2"]);

$input3 = preg_replace("/\_/", " ", $_GET["input3"]);
$id_oculto3 = preg_replace("/\_/", " ", $_GET["id_oculto3"]);

$input4 = preg_replace("/\_/", " ", $_GET["input4"]);
$id_oculto4 = preg_replace("/\_/", " ", $_GET["id_oculto4"]);

if (!empty($id_oculto)){
    $sql="UPDATE necesidades_viaje SET necesidad_viaje = '$input' WHERE id_necesidad_viaje = '$id_oculto'";
    $consulta=mysqli_query($conexion, $sql);
}
elseif(!empty($id_oculto2)){
    $sql="UPDATE necesidades_viaje SET necesidad_viaje = '$input2' WHERE id_necesidad_viaje = '$id_oculto2'";
    $consulta=mysqli_query($conexion, $sql);
}
elseif(!empty($id_oculto3)){
    $sql="UPDATE necesidades_viaje SET necesidad_viaje = '$input3' WHERE id_necesidad_viaje = '$id_oculto3'";
    $consulta=mysqli_query($conexion, $sql);
}
elseif(!empty($id_oculto4)){
    $sql="UPDATE necesidades_viaje SET necesidad_viaje = '$input4' WHERE id_necesidad_viaje = '$id_oculto4'";
    $consulta=mysqli_query($conexion, $sql);
}

?>
