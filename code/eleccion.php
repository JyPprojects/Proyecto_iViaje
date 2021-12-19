<?php  
//ERRORES
$error="";

//INCLUDES
include("php/conexion.php");

//CÓDIGO
$consulta1="SELECT id_viaje FROM viajes_usuario WHERE id_usuario='$_SESSION[id_usuario]'";
$resultado1=mysqli_query($conexion, $consulta1);
$eleccion=mysqli_fetch_row($resultado1);

$consulta2="SELECT viajes.nombre_viaje FROM viajes INNER JOIN viajes_usuario on viajes.idviaje=viajes_usuario.id_viaje WHERE viajes.idviaje='$_SESSION[id_viaje]'";
$resultado2=mysqli_query($conexion, $consulta2);
$eleccion2=mysqli_fetch_row($resultado2);

    if(!$resultado1->num_rows == 1){
?>

        <article class="sidebar1 Efecto">
            <a href="formulario/formulario.php?nuevoviaje='nuevoviaje'"><img src="menu_post-login/Imagenes/mas.png" alt="Error al cargar"> 
            <h2>Nuevo Viaje</h2></a>
        </article>

        <article class="sidebar2">
            <img src="menu_post-login/Imagenes/caravana2.png" alt="Error al cargar">
            <h2 class="letra">Tu Viaje</h2>
        </article>
        
<?php
    }
    else{
?>

        <article class="sidebar1">
            <img src="menu_post-login/Imagenes/mas1.png" alt="Error al cargar"> 
            <h2 class="letra">Nuevo Viaje</h2>
        </article>

        <article class="sidebar2 Efecto">
            <a href="viaje_creado/viaje.php"><img src="menu_post-login/Imagenes/caravana1.png" alt="Error al cargar">
            <h2><?php echo "$eleccion2[0]"; ?></h2></a>
        </article>
<?php
    }

?>  