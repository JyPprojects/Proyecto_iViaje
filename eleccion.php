<?php  
//ERRORES
$error="";

//INCLUDES
include("php/conexion.php");

//CÓDIGO
$consulta1="SELECT idviaje FROM viajes WHERE id_usuario='$_SESSION[id_usuario]'";
$resultado1=mysqli_query($conexion, $consulta1);
$eleccion=mysqli_fetch_row($resultado1);

    if(!$resultado1->num_rows == 1){
?>
        <article class="sidebar2">
        <img src="menu_post-login/Imagenes/caravana2.png" alt="Error al cargar">
        <h2>Tu Viaje</h2>
        </article>
        
<?php
    }
    else{
?>
        <article class="sidebar2">
        <a href=""><img src="menu_post-login/Imagenes/caravana1.png" alt="Error al cargar">
        <h2>Tu Viaje</h2></a>
        </article>
<?php
    }

?>  