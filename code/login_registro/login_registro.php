<?php 

//ERRORES
$error="";
$registro="";


//INCLUDES

include('../php/conexion.php');

include('../php/funciones.php');

//LOGIN 
if (isset($_POST["login"])){
    
    $usuario1=mysqli_real_escape_string($conexion, $_POST["usu"]);
    $contraseña1=mysqli_real_escape_string($conexion, $_POST["pass"]);

        if($usuario1 !='' && $contraseña1 !=''){
    

             $contraseñabd=select_query("contraseña", "datosusuario", "usuario", $usuario1);

             $consultaid1="SELECT * FROM datosusuario WHERE usuario='$usuario1'";
             $resultadoid1=mysqli_query($conexion, $consultaid1);
             $id_usuario=mysqli_fetch_assoc($resultadoid1);
             
    
                if(!empty($contraseñabd) && password_verify($contraseña1, $contraseñabd[0])){
    
                    session_start();
                    $_SESSION["usuario"]=$_POST["usu"];
                    $_SESSION["id_usuario"]=$id_usuario['id_usuario'];
                    $_SESSION["imagen"]=$id_usuario['imagen'];
                    $_SESSION["tipo_imagen"]=$id_usuario['tipo_imagen'];
                    $id_viaje=select_query("id_viaje", "viajes_usuario", "id_usuario", "$_SESSION[id_usuario]");
                    if(!empty($id_viaje)){
                        
                        $_SESSION["id_viaje"]=$id_viaje[0];
                    }

                        if(isset($_POST["cookie"])){
                            setcookie("cookie1", $_POST["usu"],time()+604800);
                            header("Location: ../Index.php");
                            
                                
                        }
                        else{
                            header("Location: ../Index.php");
                        }                                                 
                }
                else{?>

                    <script>
                        alertify.error('Usuario o contraseña incorrectos'); 
                    </script>

                <?php }
    
        }
        else{?>
            <script>
                alertify.error('No se pueden dejar campos vacíos'); 
            </script>
        <?php }
    
}

//REGISTRO
if(isset($_POST["enviar"])){

        $usuario1=mysqli_real_escape_string($conexion, $_POST["usu"]);
        $contraseña1=mysqli_real_escape_string($conexion, $_POST["pass"]);
        $hash1=password_hash($contraseña1, PASSWORD_DEFAULT);
        $contraseña2=mysqli_real_escape_string($conexion, $_POST["pass2"]);
        $correo1=mysqli_real_escape_string($conexion, $_POST["correo"]);
        $nombre1=mysqli_real_escape_string($conexion, $_POST["nom"]);
        $apellidos1=mysqli_real_escape_string($conexion, $_POST["ape"]);
        $fecha_naci=mysqli_real_escape_string($conexion, $_POST["fecha"]);

        $fecha_naci1 = date("Y-m-d", strtotime($fecha_naci));


            if($usuario1 !='' && $contraseña1 !='' && $correo1 !='' && $nombre1 !='' && $apellidos1 !='' && $fecha_naci1 !=''){

                $consulta2="SELECT * FROM datosusuario WHERE usuario='$usuario1' OR correo='$correo1'";
                $resultado2=mysqli_query($conexion, $consulta2);
                $comprobar_registro=mysqli_fetch_row($resultado2);


                    if($comprobar_registro==TRUE){?>

                        <script>
                            alertify.error('Usuario o correo ya registrado'); 
                        </script>

                    <?php }
                    
                    elseif($contraseña1!=$contraseña2){?>

                        <script>
                            alertify.error('Las contraseñas no coinciden'); 
                        </script>
                            
                    <?php }
                    
                    else{
                    
                            if(!preg_match("/^([a-z]+[0-9]+)|([0-9]+[a-z]+)/i", $contraseña1)){?>
                                <script>
                                    alertify.error('La contraseña debe contener números y letras'); 
                                </script>
                            <?php }
                            elseif(!preg_match("/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/", $correo1)){?>
                                <script>
                                    alertify.error('El correo no es válido'); 
                                </script>
                            <?php }
                            else{
                                $consulta3="INSERT INTO datosusuario (usuario, contraseña, correo, fecha, nombre, apellidos) VALUES ('$usuario1', '$hash1', '$correo1', '$fecha_naci1', '$nombre1', '$apellidos1') ";
                                $resultado3=mysqli_query($conexion, $consulta3);
                                header("Location: index.php?registro=Usuario registrado con éxito");
                            }     
                    }
            }
            else{
                ?>
                <script>
                    alertify.error('No se pueden dejar campos vacíos'); 
                </script>
            <?php }

    }

?>