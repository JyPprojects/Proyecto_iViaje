<?php 
error_reporting();

//INCLUDES
include("../php/conexion.php");
include("../php/sesion.php");
include("../php/funciones.php");

if (isset($_POST["enviar"])){
 
//PASO 1
$nviaje=$_POST["nviaje"];
$fecha_ini=$_POST["fecha_ini"];
$fecha_fin=$_POST["fecha_fin"];
$bote=$_POST["bote"];

//PASO 2
$transporte=$_POST["transporte"];
$cantidad_coches=$_POST["cantidad_coche"];
$combustible=$_POST["combustible"];

//PASO 3
$estancia=$_POST["estancia"];
$direccion_estancia=$_POST["d_estancia"];
$telefono_estancia=$_POST["tlfn_estancia"];

//PASO 4
$comida=preg_split("/(\,)/", $_POST["comida"]);
$bebida=preg_split("/(\,)/", $_POST["bebida"]);
$utensilios=preg_split("/(\,)/", $_POST["utensilios"]);
$general=preg_split("/(\,)/", $_POST["general"]);




if (!empty($nviaje && $fecha_ini && $fecha_fin && $bote)){

    $viaje=select_query("idviaje", "viajes", "id_usuario", "$_SESSION[id_usuario]");

        if(empty($viaje)){

            //INSERT PASO 1
            $insertar_viaje="INSERT INTO viajes (id_usuario, nombre_viaje, fecha_inicio, fecha_fin, bote) VALUES ('$_SESSION[id_usuario]', '$nviaje', '$fecha_ini', '$fecha_fin', '$bote')";
            mysqli_query($conexion, $insertar_viaje);

            $sql="SELECT idviaje FROM viajes WHERE id_usuario=$_SESSION[id_usuario]";
            $consulta_id_viaje=mysqli_query($conexion, $sql);
                while ($id_viaje=mysqli_fetch_row($consulta_id_viaje)){
                    $array_id_viaje[]=$id_viaje[0];
                    
                }
            $_SESSION["id_viaje"]=end($array_id_viaje); //Con esto tenemos en SESSION el ID VIAJE generado por la consulta anterior.

            //Generar URL
            echo "Esta es la dirección del viaje: "; echo "<br>";
            echo "<a href='../viaje_creado/viaje.php'>Localhost:8080/Proyecto_iViaje/viaje_creado/viaje_creado.php/$_SESSION[id_viaje]</a>";
        }

        else{
            echo "Lo siento, ya has creado un viaje";
            echo "<br>";
            $id_viaje_creado=select_query("idviaje", "viajes", "id_usuario", "$_SESSION[id_usuario]");
            $_SESSION["id_viaje"]=$id_viaje_creado[0];
            echo "Tu viaje es: "; 
            echo "<br>";
            echo "<a href='../viaje_creado/viaje.php'>Localhost:8080/Proyecto_iViaje/viaje_creado/viaje_creado.php/$id_viaje_creado[0]</a>";
        }
}    

//INSERT PASO 2

if (!empty($transporte && $cantidad_coches && $combustible)){

            $insertar_viaje="INSERT INTO transporte (tipo_transporte, cantidad, combustible, id_viaje) VALUES ('$transporte', '$cantidad_coches', '$combustible', '$_SESSION[id_viaje]')";
            mysqli_query($conexion, $insertar_viaje);
}

//INSERT PASO 3

if (!empty($estancia && $direccion_estancia && $telefono_estancia)){

    $insertar_viaje="INSERT INTO alojamiento (tipo_alojamiento, direccion_alojamiento, tlfn_estancia, id_viaje) VALUES ('$estancia', '$direccion_estancia', '$telefono_estancia', '$_SESSION[id_viaje]')";
    mysqli_query($conexion, $insertar_viaje);
}

//INSERT PASO 4

if (!empty($comida)){
    foreach ($comida as $valor) {
        $insertar_viaje="INSERT INTO necesidades_viaje (id_viaje, id_necesidad, id_usuario, necesidad_viaje) VALUES ('$_SESSION[id_viaje]', '1', '$_SESSION[id_usuario]', '$valor')";
        mysqli_query($conexion, $insertar_viaje);
    }
}

if (!empty($bebida)){
    foreach ($bebida as $valor) {
        $insertar_viaje="INSERT INTO necesidades_viaje (id_viaje, id_necesidad, id_usuario, necesidad_viaje) VALUES ('$_SESSION[id_viaje]', '2', '$_SESSION[id_usuario]', '$valor')";
        mysqli_query($conexion, $insertar_viaje);
    }
}

if (!empty($utensilios)){
    foreach ($utensilios as $valor) {
        $insertar_viaje="INSERT INTO necesidades_viaje (id_viaje, id_necesidad, id_usuario, necesidad_viaje) VALUES ('$_SESSION[id_viaje]', '3', '$_SESSION[id_usuario]', '$valor')";
        mysqli_query($conexion, $insertar_viaje);
    }
}

if (!empty($general)){
    foreach ($general as $valor) {
        $insertar_viaje="INSERT INTO necesidades_viaje (id_viaje, id_necesidad, id_usuario, necesidad_viaje) VALUES ('$_SESSION[id_viaje]', '4', '$_SESSION[id_usuario]', '$valor')";
        mysqli_query($conexion, $insertar_viaje);
    }
}





else{
    echo "Debes rellenar todos los campos";
}


}
?> 
