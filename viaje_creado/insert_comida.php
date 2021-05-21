<?php
include("../php/conexion.php");
include("../php/funciones.php");

// $resultado = select_query("necesidad_viaje", "necesidades_viajes", "necesidad_viaje", "$_GET[input_nuevo]");
// echo $resultado[0];


if (!empty($_GET["input_nuevo"])){
    $id_viaje = preg_replace("/\_/", " ", $_GET["id_viaje"]);
    $usuario_nuevo = preg_replace("/\_/", " ", $_GET["usuario_nuevo"]);
    $input_nuevo = preg_replace("/\_/", " ", $_GET["input_nuevo"]);

    $sql="INSERT INTO necesidades_viaje (id_viaje, id_necesidad, id_usuario, necesidad_viaje) VALUES ('$id_viaje' , 1 , '$usuario_nuevo' , '$input_nuevo')";
    $consulta=mysqli_query($conexion, $sql);
}


?>
