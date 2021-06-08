<?php
include("../php/conexion.php");
include("../php/sesion.php");
$error="";
$sql6="SELECT usuario FROM datosusuario INNER JOIN viajes_usuario on datosusuario.id_usuario=viajes_usuario.id_usuario WHERE viajes_usuario.id_viaje=$_SESSION[id_viaje]";
$query6=mysqli_query($conexion, $sql6);
if (isset($_POST['name'])) {

    $usu_invitado=$_POST['name'];

    if($usu_invitado !=''){

        $consulta2="SELECT * FROM datosusuario WHERE usuario='$usu_invitado'";
        $resultado2=mysqli_query($conexion, $consulta2);
        $comprobar_usu=mysqli_fetch_row($resultado2);

        if(!$comprobar_usu==TRUE){

            $error="El usuario no existe";

        }
            
        else{

            $consulta3="SELECT * FROM viajes_usuario WHERE id_usuario='$comprobar_usu[0]'";
            $resultado3=mysqli_query($conexion, $consulta3);
            $comprobar_usu2=mysqli_fetch_row($resultado3);

            if ($comprobar_usu2==TRUE) {
                $error="El usuario ya esta participando en otro viaje";
            }
            
            else {
                $invitar_usu="INSERT INTO viajes_usuario (id_viaje, id_usuario) VALUES ('$_SESSION[id_viaje]', '$comprobar_usu[0]')";
                mysqli_query($conexion, $invitar_usu);

                $sql6="SELECT usuario FROM datosusuario INNER JOIN viajes_usuario on datosusuario.id_usuario=viajes_usuario.id_usuario WHERE viajes_usuario.id_viaje=$_SESSION[id_viaje]";
                $query6=mysqli_query($conexion, $sql6);

            }
             
        }
    }
    else{

        $error="No puedes dejar campos vacíos";
    }
    
}
echo $error;
echo "<br>";
while($array6=mysqli_fetch_array($query6)){
    echo "<span class='hola'>$array6[0]</span>";
    echo "<br>";
}


?>
