<?php
include("viaje_creado.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="../librerias/jquery-3.5.1.js"></script>
    <script src="comida.js"></script>
    <script src="bebida.js"></script>
    <title><?php echo ucfirst($_SESSION["usuario"]); ?> | <?php echo $info_viaje[2];?></title>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="../Index.php">iViaje</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <ul class="navbar-nav me-righ mb-2 mb-lg-0" style="margin-right: 5%;">
        <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo ucfirst($_SESSION["usuario"]); ?>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Ajustes</a></li>
                <li><a class="dropdown-item" href="#">Acerca de</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="../php/sesion.php?exit='exit'">Cerrar Sesión</a></li>
              </ul>
            </li>
      </ul> 
    </div>
  </div>
</nav>

<div>
<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Info Viaje</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Necesidades</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Transporte</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="alojamiento-tab" data-bs-toggle="tab" data-bs-target="#alojamiento" type="button" role="tab" aria-controls="alojamiento" aria-selected="false">Alojamiento</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  <h1>Viaje: <?php echo $info_viaje[2];?></h1>
        <h1>Fecha de inicio: <?php echo $info_viaje[3];?></h1>
        <h1>Fecha fin: <?php echo $info_viaje[4];?></h1>
        <h1>Bote: <?php echo $info_viaje[5];?>€</h1>
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
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
  </div>

  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

        <h3>Medio de transporte: <?php echo $info_transporte[1];?></h1> </h3>
        <h3>Cantidad: <?php echo $info_transporte[2];?></h1> </h3>
        <h3>Tipo de Combustible: <?php echo $info_transporte[3];?></h1> </h3>
  </div>

  <div class="tab-pane fade" id="alojamiento" role="tabpanel" aria-labelledby="alojamiento-tab">

        <h3>Tipo de alojamiento: <?php echo $info_estancia[1];?></h1> </h3>
        <h3>Direccion: <?php echo $info_estancia[2];?></h1> </h3>
        <h3>Telefono: <?php echo $info_estancia[3];?></h1> </h3>
  </div>
</div>
</div>

</body>
</html>