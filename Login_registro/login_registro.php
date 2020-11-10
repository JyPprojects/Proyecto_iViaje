<?php 

//ERRORES
$error="";
$registro="";
error_reporting();

//INCLUDES
include("../php/conexion.php");

//LOGIN 

if (isset($_POST["login"])){
    global $usuario1;
    $usuario1=mysqli_real_escape_string($conexion, $_POST["usu"]);
    $contraseña1=mysqli_real_escape_string($conexion, $_POST["pass"]);
    
        if($usuario1 !='' && $contraseña1 !=''){
    
             $consulta1="SELECT contraseña FROM datosusuario WHERE usuario='$usuario1'";
             $resultado1=mysqli_query($conexion, $consulta1);
             $consultaid1="SELECT id_usuario FROM datosusuario WHERE usuario='$usuario1'";
             $resultadoid1=mysqli_query($conexion, $consultaid1);
             $id_usuario=mysqli_fetch_row($resultadoid1);
             $login=mysqli_fetch_row($resultado1);
    
                if($resultado1->num_rows == 1 && password_verify($contraseña1, $login[0])){
    
                    session_start();
                    $_SESSION["usuario"]=$_POST["usu"];
                    $_SESSION["id_usuario"]=$id_usuario[0];
                        if(isset($_POST["cookie"])){
                            setcookie("cookie1", $_POST["usu"],time()+604800);
                            header("Location: ../Index.php");
                            
                                
                        }
                        else{
                            header("Location: ../Index.php");
    
                        }  
                                                
                }
                else{
    
                    $error="Usuario o contraseña incorrecto";
                        
                }
    
}
else{
    
    $error="No puedes dejar campos vacíos";
}
    
}

//REGISTRO

/* elseif(isset($_POST["registro"])){

/* header(HACIA LA MISMA PÁGINA PERO CON EL FORMULARIO DE REGISTRO CARGADO) 
 }
*/

if(isset($_POST["enviar"])){

        $usuario1=mysqli_real_escape_string($conexion, $_POST["usu"]);
        $contraseña1=mysqli_real_escape_string($conexion, $_POST["pass"]);
        $hash1=password_hash($contraseña1, PASSWORD_DEFAULT);
        $contraseña2=mysqli_real_escape_string($conexion, $_POST["pass2"]);
        $correo1=mysqli_real_escape_string($conexion, $_POST["correo"]);
        $nombre1=mysqli_real_escape_string($conexion, $_POST["nom"]);
        $apellidos1=mysqli_real_escape_string($conexion, $_POST["ape"]);
        $fecha_naci1=mysqli_real_escape_string($conexion, $_POST["fecha"]);


            if($usuario1 !='' && $contraseña1 !='' && $correo1 !='' && $nombre1 !='' && $apellidos1 !='' && $fecha_naci1 !=''){

                $consulta2="SELECT * FROM datosusuario WHERE usuario='$usuario1' OR correo='$correo1'";
                $resultado2=mysqli_query($conexion, $consulta2);
                $comprobar_registro=mysqli_fetch_row($resultado2);


                    if($comprobar_registro==TRUE){

                        $error="Usuario o correo ya registrado";

                    }
                    
                    elseif($contraseña1!=$contraseña2){

                        $error="Las contraseñas no coinciden";
                                    
                    }
                    
                    else{
                    
                            if(!preg_match("/^([a-z]+[0-9]+)|([0-9]+[a-z]+)/i", $contraseña1)){

                                $error="La contraseña debe contener números y letras";
                            }
                            elseif(!preg_match("/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/", $correo1)){

                                $error="El correo no es válido";
                            }
                            else{
                                $consulta3="INSERT INTO datosusuario (usuario, contraseña, correo, fecha, nombre, apellidos) VALUES ('$usuario1', '$hash1', '$correo1', '$fecha_naci1', '$nombre1', '$apellidos1') ";
                                $resultado3=mysqli_query($conexion, $consulta3);
                                header("Location: index.php");
                                $registro="Usuario registrado con éxito";
                            }     
                    }
            }
            else{

                $error="No puedes dejar campos vacíos";
            }

    }

?>