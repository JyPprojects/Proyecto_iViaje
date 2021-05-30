<?php 
    include("../php/conexion.php");
?>
<?php 
    $sql="SELECT correo, usuario, imagen, tipo_imagen FROM datosusuario WHERE id_usuario='$_SESSION[id_usuario]'";
    $resultado=mysqli_query($conexion, $sql);
    $row = mysqli_fetch_assoc($resultado);
    $correo="$row[correo]";
    $u="$row[usuario]";

    $sql2="SELECT imagen FROM datosusuario WHERE id_usuario='$_SESSION[id_usuario]'";
    $resultado2=mysqli_query($conexion, $sql2);
    $imagen=mysqli_fetch_row($resultado2);
    
?>