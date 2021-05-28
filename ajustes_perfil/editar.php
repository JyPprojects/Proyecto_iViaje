<?php
$error="";
$errorcontra="";

include("../php/conexion.php");

    if (isset($_POST['Actualizar'])) {

        $usuario1m=$_POST['usuariom'];
        $mail1m=$_POST['mailm'];
        $id1m=$_POST['idm'];

            if($usuario1m !='' && $mail1m !=''){

                $consulta2="SELECT * FROM datosusuario WHERE usuario='$usuario1m'";
                $resultado2=mysqli_query($conexion, $consulta2);
                $comprobar_usu=mysqli_fetch_row($resultado2);

                if($comprobar_usu==TRUE){

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

    if (isset($_POST['Actualizarcontra'])) {

        $contraan=$_POST['contraan'];
        $contranu=$_POST['contranu'];
        $contranu2=$_POST['contranu2'];
        $id1m=$_SESSION["id_usuario"];
        $hash=password_hash($contranu, PASSWORD_DEFAULT);

            if($contraan !='' && $contranu !='' && $contranu2 !=''){

                $consulta="SELECT contraseña FROM datosusuario WHERE id_usuario='$id1m'";
                $resultado=mysqli_query($conexion, $consulta);
                $passbd=mysqli_fetch_row($resultado);

                if(password_verify($contraan, $passbd[0])){

                    if($contranu==$contranu2){
                        if(!preg_match("/^([a-z]+[0-9]+)|([0-9]+[a-z]+)/i", $contranu)){

                            $errorcontra="La contraseña debe contener mínimo un número";
                        }
                        else {
                            $sql3="UPDATE datosusuario SET contraseña='$hash' WHERE id_usuario='$id1m'";
                            $actucontra=mysqli_query($conexion, $sql3);
                            $errorcontra="Contraseña actualizada con exito";
                        }
                    }
                    else {
                        $errorcontra="Las contraseñas nuevas no coinciden";
                    }

                }
                    
                else{
                    $errorcontra="La contraseña antigua no coincide";
                }
            }
            else{

                $errorcontra="No puedes dejar campos vacíos";
            }
        
    }
?>