<?php 
$error="";

if (isset($_POST['Invitar'])) {

    $usu_invitado=$_POST['usu_invitado'];

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
            }
             
        }
    }
    else{

        $error="No puedes dejar campos vacíos";
    }
    
}


?>