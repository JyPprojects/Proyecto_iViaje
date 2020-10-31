<?php  
//ERRORES
$error="";


//INCLUDES
include("../Login_registro/conexion.php");


//CÓDIGO

$consulta1="SELECT idviaje FROM viajes WHERE usuario='$_SESSION[usuario]'";
$resultado1=mysqli_query($conexion, $consulta1);
$eleccion=mysqli_fetch_row($resultado1);

    if(!$resultado1->num_rows == 1){
?>
        <article class="sidebar2">
        <img src="Imagenes/caravana2.png" alt="Error al cargar">
        <h2>Tu Viaje</h2>
        </article>
        
<?php
    }
    else{
?>
        <article class="sidebar2">
        <a href=""><img src="Imagenes/caravana1.png" alt="Error al cargar">
        <h2>Tu Viaje</h2></a>
        </article>
<?php
    }






?>  