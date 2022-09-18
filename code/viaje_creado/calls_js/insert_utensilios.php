<?php
include(../../php/conexion.php);
include(../../php/funciones.php);

$resultado = select_query("necesidad_viaje", "necesidades_viaje", "necesidad_viaje", "$_GET[input_nuevo]");


if (!empty($_GET["input_nuevo"]) && empty($resultado[0])){
    $id_viaje = preg_replace("/\_/", " ", $_GET["id_viaje"]);
    $usuario_nuevo = preg_replace("/\_/", " ", $_GET["usuario_nuevo"]);
    $input_nuevo = preg_replace("/\_/", " ", $_GET["input_nuevo"]);

    $sql="INSERT INTO necesidades_viaje (id_viaje, id_necesidad, id_usuario, necesidad_viaje) VALUES ('$id_viaje' , 3 , '$usuario_nuevo' , '$input_nuevo')";
    $consulta=mysqli_query($conexion, $sql);
}

?>
