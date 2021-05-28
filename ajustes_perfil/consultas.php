<?php 
    include("../php/conexion.php");
?>
<?php 
    $sql="SELECT correo, usuario FROM datosusuario WHERE id_usuario='$_SESSION[id_usuario]'";
    $resultado=mysqli_query($conexion, $sql);
    $email=mysqli_fetch_row($resultado);
    $correo="$email[0]";
    $u="$email[1]";

?>