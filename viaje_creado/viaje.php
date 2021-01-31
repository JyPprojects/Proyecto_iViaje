<?php
include("viaje_creado.php");
?>
<h1>Viaje: <?php echo $info_viaje[2];?></h1>
<h1>Fecha de inicio: <?php echo $info_viaje[3];?></h1>
<h1>Fecha fin: <?php echo $info_viaje[4];?></h1>
<h1>Bote: <?php echo $info_viaje[5];?>€</h1>

<br><hr>

<h2>Necesidades</h2>
    <h3>Comida</h3>
    <?php  
        print_r($info_comida);
    ?>

<br><hr>

<h2>Transporte</h2>
    <h3>Medio de transporte: <?php echo $info_transporte[1];?></h1> </h3>
    <h3>Cantidad: <?php echo $info_transporte[2];?></h1> </h3>
    <h3>Tipo de Combustible: <?php echo $info_transporte[3];?></h1> </h3>
<table>
    <tr></tr>

</table>

<br><hr>

<h2>Alojamiento</h2>
    <h3>Tipo de alojamiento: <?php echo $info_estancia[1];?></h1> </h3>
    <h3>Direccion: <?php echo $info_estancia[2];?></h1> </h3>
    <h3>Telefono: <?php echo $info_estancia[3];?></h1> </h3>
<table>
    <tr></tr>

</table>

<h2></h2>