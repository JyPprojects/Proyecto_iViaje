<?php
$error="";

include("../php/conexion.php");

    if (isset($_POST['Actualizar'])) {

        $usuario1m=$_POST['usuariom'];
        $mail1m=$_POST['mailm'];
        $id1m=$_POST['idm'];

            if($usuario1m !='' && $mail1m !=''){

                $consulta2="SELECT * FROM datosusuario WHERE usuario='$usuario1m'";
                $resultado2=mysqli_query($conexion, $consulta2);
                $comprobar_registro=mysqli_fetch_row($resultado2);

                if($comprobar_registro==TRUE){

                    $error="Usuario ya registrado";

                }
                    
                else{
                    if(!preg_match("/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/", $mail1m)){

                        $error="El correo no es válido";
                    }
                    else{
                        $sql2="UPDATE datosusuario SET usuario='$usuario1m', correo='$mail1m' WHERE id_usuario='$id1m'";
                        $actu=mysqli_query($conexion, $sql2);
                        header("Location: index.php");
                    }     
                }
            }
            else{

                $error="No puedes dejar campos vacíos";
            }
        
    }
?>