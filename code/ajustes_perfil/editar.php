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

                if($comprobar_usu==TRUE){?>
                    <script>alertify.error('Usuario ya registrado');</script>
                <?php }
                    
                else{
                    if(!preg_match("/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/", $mail1m)){?>
                        <script>alertify.error('la direccion de correo no es valida');</script>
                    <?php }
                    else{
                        $sql2="UPDATE datosusuario SET usuario='$usuario1m', correo='$mail1m' WHERE id_usuario='$id1m'";
                        $actu=mysqli_query($conexion, $sql2);
                        $_SESSION["usuario"]=$usuario1m;
                        header("Location: index.php");
                    }     
                }
            }
            else{?>
                <script>alertify.error('No se pueden dejar campos vacíos');</script>
            <?php }
        
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
                        if(!preg_match("/^([a-z]+[0-9]+)|([0-9]+[a-z]+)/i", $contranu)){?>
                            <script>alertify.error('La contraseña debe contener mínimo un número');</script>
                        <?php }
                        else {
                            $sql3="UPDATE datosusuario SET contraseña='$hash' WHERE id_usuario='$id1m'";
                            $actucontra=mysqli_query($conexion, $sql3);?>
                            <script>alertify.success('Contraseña actualizada con exito');</script>
                        <?php }
                    }
                    else {?>
                        <script>alertify.error('La contraseña nueva no coincide');</script>
                    <?php }

                }
                    
                else{?>
                    <script>alertify.error('La contraseña antigua no coincide');</script>
                <?php }
            }
            else{?>
                <script>alertify.error('No se pueden dejar campos vacíos');</script>
            <?php }
        
    }

    if (isset($_POST['guardar'])) {
        $id1m=$_SESSION["id_usuario"];

        if (isset($_FILES['foto']['name'])) {
            $tipoArchivo = $_FILES['foto']['type'];
            $nombreArchivo = $_FILES['foto']['name'];
            $tamanoArchivo = $_FILES['foto']['size'];
            $imagenSubida = fopen($_FILES['foto']['tmp_name'], 'r');
            $binariosImagen = fread($imagenSubida, $tamanoArchivo);
            $binariosImagen = mysqli_escape_string($conexion, $binariosImagen);

            $subir_imagen="UPDATE datosusuario SET imagen='".$binariosImagen."', tipo_imagen='".$tipoArchivo."' WHERE id_usuario='$id1m'";
            mysqli_query($conexion, $subir_imagen);
            header("Location: index.php");
        }
        
    } 
?>