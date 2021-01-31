<?php
include("viaje_creado.php");
?>
<h1>Viaje: <?php echo $info_viaje[2];?></h1>
<h1>Fecha de inicio: <?php echo $info_viaje[3];?></h1>
<h1>Fecha fin: <?php echo $info_viaje[4];?></h1>
<h1>Bote: <?php echo $info_viaje[5];?>€</h1>

<br><hr>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="../librerias/jquery-3.5.1.js"></script>
    <script src="comida.js"></script>
    <script src="bebida.js"></script>
    <title>Document</title>

</head>
<body>
    


<h2>Necesidades</h2>
    <h3>Comida</h3>
    <?php print_r($info_comida);?>
    <table class="table table-hover table-dark" id="tabla">
    <tr>
        <th>Comida</th>
        <th>Usuario</th>
    </tr>  
<p id="sesion_usuario"> <?php echo $_SESSION["usuario"];?> </p>
<p id="sesion_idusuario"> <?php echo $_SESSION["id_usuario"];?> </p>
<p id="sesion_idviaje"> <?php echo $_SESSION["id_viaje"];?> </p>
<?php 
$k=1;
while($array=mysqli_fetch_array($query)){
    $sql3="SELECT usuario FROM datosusuario INNER JOIN necesidades_viaje ON datosusuario.id_usuario = necesidades_viaje.id_usuario WHERE necesidades_viaje.id_usuario = $array[id_usuario]";
    $query3=mysqli_query($conexion, $sql3);
    $array3=mysqli_fetch_row($query3);
    $array["id_necesidad_viaje"];
?>
<div id="resultado"></div>

<div id="resultado"></div>

    <tr>
        <td><p class="p_viaje" id="p_<?php echo $k; ?>"><?php echo $array["necesidad_viaje"];?></p><input type="text" id="i_<?php echo $k; ?>"  class="input_viaje" value="<?php echo $array["necesidad_viaje"];?>"></td>
        <td><p id="u_<?php echo $k; ?>"><?php echo $array3[0];?></p></td>
        <td><p class="p_oculto" id="id_oculto_<?php echo $k; ?>"><?php echo $array["id_necesidad_viaje"];?></p></td>
    </tr>
<?php
$k++;
}
?>
    </table>
    <button class="btn btn-primary" id="añadir">Añadir</button>
 

<h3>Bebida</h3>
    <?php print_r($info_bebida);?>
    <h3>Bebida</h3>
    <table class="table table-hover table-dark"  id="tabla2">
        <tr>
            <th>Bebida</th>
            <th>Usuario</th>
        </tr>
<?php 
$x=1;
while($array2=mysqli_fetch_array($query2)){
?>
<div id="resultado2"></div>      
        <tr>
            <td><p class="p_viaje2" id="p2_<?php echo $x; ?>"><?php echo $array2["necesidad_viaje"];?></p><input type="text" id="i2_<?php echo $x; ?>"  class="input_viaje2" value="<?php echo $array2["necesidad_viaje"];?>"></td>
            <td><p id="u2_<?php echo $x; ?>"><?php echo $array2["id_usuario"];?></p></td>
            </tr>
<?php
$x++;
}
?>
    </table>
    <button class="btn btn-primary" id="añadir2">Añadir</button>
<h3>Utensilios</h3>
    <?php  
        print_r($info_utensilios);
    ?>

<h3>General</h3>
    <?php  
        print_r($info_general);
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

</body>
</html>