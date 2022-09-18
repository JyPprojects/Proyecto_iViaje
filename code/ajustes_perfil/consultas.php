<?php 
    include('../php/conexion.php');
?>
<?php 
    $sql="SELECT correo, usuario, imagen, tipo_imagen FROM datosusuario WHERE id_usuario='$_SESSION[id_usuario]'";
    $resultado=mysqli_query($conexion, $sql);
    $row = mysqli_fetch_assoc($resultado);
    $correo="$row[correo]";
    $u="$row[usuario]";
    $im="$row[imagen]";
    $tip="$row[tipo_imagen]";

    $_SESSION["imagen"]=$im;
    $_SESSION["tipo_imagen"]=$tip;
    
?>