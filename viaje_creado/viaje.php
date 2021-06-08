<?php
include("viaje_creado.php");
include("participantes.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../menu_post-login/Imagenes/favicon5.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="../librerias/jquery-3.5.1.js"></script>
    <script src="comida.js"></script>
    <script src="bebida.js"></script> 
    <script src="utensilios.js"></script> 
    <script src="general.js"></script> 
    <script src="participantes.js"></script>
    <title><?php echo ucfirst($_SESSION["usuario"]); ?> | <?php echo $info_viaje[0];?></title>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="../Index.php"><img src="../menu_post-login/Imagenes/logo2.png" alt="" width="30" height="24" class="d-inline-block align-text-top">MAKE AND TRAVEL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../index.php">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Acerca de</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contactanos</a>
            </li>
      </ul>
      <ul class="navbar-nav me-righ mb-2 mb-lg-0" style="margin-right: 5%;">
        <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php if (!empty($_SESSION['imagen'])) { ?> 
                    <img src="data:<?php echo $_SESSION['tipo_imagen'];?>;base64,<?php echo base64_encode($_SESSION['imagen']);?>" alt="" width="30" height="24" class="d-inline-block align-text-top" style="border-radius: 50%"><?php echo ucfirst($_SESSION["usuario"]); ?>
                <?php }  

                else { ?> 
                    <?php echo ucfirst($_SESSION["usuario"]); ?>
                <?php } ?>
              </a>
              <?php include("../php/admin2.php"); ?> 
            </li>
      </ul> 
    </div>
  </div>
</nav>
  <?php 

  ?>
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
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="participantes-tab" data-bs-toggle="tab" data-bs-target="#participantes" type="button" role="tab" aria-controls="participantes" aria-selected="false">Participantes</button>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">

    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
      <h1>Viaje: <?php echo $info_viaje[0];?></h1>
      <h1>Pais: <?php echo $info_viaje[1];?></h1>
      <h1>Fecha de inicio: <?php echo $info_viaje[2];?></h1>
      <h1>Fecha fin: <?php echo $info_viaje[3];?></h1>
      <h1>Bote: <?php echo $info_viaje[4];?>€</h1>
    </div>

    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

      
      <h3>Comida</h3>
      <table class="table table-striped table-hover" id="tabla">
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
            $q_comida="SELECT usuario FROM datosusuario INNER JOIN necesidades_viaje ON datosusuario.id_usuario = necesidades_viaje.id_usuario WHERE necesidades_viaje.id_usuario = $array[id_usuario]";
            $q_comida2=mysqli_query($conexion, $q_comida);
            $a_comida=mysqli_fetch_row($q_comida2);
        ?>
        <div id="resultado"></div>
          <tr id="eliminar_<?php echo $k;?>">
            <td><p class="p_viaje" id="p_<?php echo $k; ?>"><?php echo $array["necesidad_viaje"];?></p><input type="text" id="i_<?php echo $k; ?>"  class="input_viaje" value="<?php echo $array["necesidad_viaje"];?>"></td>
            <td><p id="u_<?php echo $k; ?>"><?php echo $a_comida[0];?></p></td>
            <td><p class="p_oculto" id="id_oculto_<?php echo $k; ?>"><?php echo $array["id_necesidad_viaje"];?></p></td>
            <td><button id="eliminar_<?php echo $k;?>" type="button" class="btn btn-danger delete">Eliminar</button></td>
          </tr>
        <?php
          $k++;
          }
        ?>

      </table>
      <button class="btn btn-primary" id="añadir">Añadir</button>
          

      <h3>Bebida</h3>
      <table class="table table-striped table-hover"  id="tabla2">
        <tr>
          <th>Bebida</th>
          <th>Usuario</th>
        </tr>

        <?php 
          $x=1;
          while($array2=mysqli_fetch_array($query2)){
            $q_bebida="SELECT usuario FROM datosusuario INNER JOIN necesidades_viaje ON datosusuario.id_usuario = necesidades_viaje.id_usuario WHERE necesidades_viaje.id_usuario = $array2[id_usuario]";
            $q_bebida2=mysqli_query($conexion, $q_bebida);
            $a_bebida=mysqli_fetch_row($q_bebida2);
        ?>
        <div id="resultado2"></div>      
          <tr id="eliminar2_<?php echo $x;?>">
            <td><p class="p_viaje2" id="p2_<?php echo $x; ?>"><?php echo $array2["necesidad_viaje"];?></p><input type="text" id="i2_<?php echo $x; ?>"  class="input_viaje2" value="<?php echo $array2["necesidad_viaje"];?>"></td>
            <td><p id="u2_<?php echo $x; ?>"><?php echo $a_bebida[0];?></p></td>
            <td><p class="p_oculto2" id="id_oculto2_<?php echo $x; ?>"><?php echo $array2["id_necesidad_viaje"];?></p></td>
            <td><button id="eliminar2_<?php echo $x; ?>" type="button" class="btn btn-danger delete2">Eliminar</button></td>
          </tr>
        <?php
          $x++;
          }
        ?>

      </table>
      <button class="btn btn-primary" id="añadir2">Añadir</button>
              
      <h3>Utensilios</h3>
      <table class="table table-striped table-hover" id="tabla3">
        <tr>
          <th>Utensilio</th>
          <th>Usuario</th>
        </tr>
        <?php 
          $y=1;
          while($array3=mysqli_fetch_array($query3)){
            $q_utensilios="SELECT usuario FROM datosusuario INNER JOIN necesidades_viaje ON datosusuario.id_usuario = necesidades_viaje.id_usuario WHERE necesidades_viaje.id_usuario = $array3[id_usuario]";
            $q_utensilios2=mysqli_query($conexion, $q_utensilios);
            $a_utensilios=mysqli_fetch_row($q_utensilios2);
        ?>
        <div id="resultado3"></div>      
          <tr id="eliminar3_<?php echo $y;?>">
            <td><p class="p_viaje3" id="p3_<?php echo $y; ?>"><?php echo $array3["necesidad_viaje"];?></p><input type="text" id="i3_<?php echo $y; ?>"  class="input_viaje3" value="<?php echo $array3["necesidad_viaje"];?>"></td>
            <td><p id="u3_<?php echo $y; ?>"><?php echo $a_utensilios[0];?></p></td>
            <td><p class="p_oculto3" id="id_oculto3_<?php echo $y; ?>"><?php echo $array3["id_necesidad_viaje"];?></p></td>
            <td><button id="eliminar3_<?php echo $y; ?>" type="button" class="btn btn-danger delete3">Eliminar</button></td>
          </tr>
        <?php
          $y++;
          }
        ?>

      </table>
      <button class="btn btn-primary" id="añadir3">Añadir</button>

      <h3>General</h3>
      <table class="table table-striped table-hover" id="tabla4">
        <tr>
          <th>Item</th>
          <th>Usuario</th>
        </tr>
        <?php 
          $z=1;
          while($array4=mysqli_fetch_array($query4)){
            $q_general="SELECT usuario FROM datosusuario INNER JOIN necesidades_viaje ON datosusuario.id_usuario = necesidades_viaje.id_usuario WHERE necesidades_viaje.id_usuario = $array4[id_usuario]";
            $q_general2=mysqli_query($conexion, $q_general);
            $a_general=mysqli_fetch_row($q_general2);
        ?>
        <div id="resultado4"></div>      
          <tr id="eliminar4_<?php echo $z;?>">
            <td><p class="p_viaje4" id="p4_<?php echo $z; ?>"><?php echo $array4["necesidad_viaje"];?></p><input type="text" id="i4_<?php echo $z; ?>"  class="input_viaje4" value="<?php echo $array4["necesidad_viaje"];?>"></td>
            <td><p id="u4_<?php echo $z; ?>"><?php echo $a_general[0];?></p></td>
            <td><p class="p_oculto4" id="id_oculto4_<?php echo $z; ?>"><?php echo $array4["id_necesidad_viaje"];?></p></td>
            <td><button id="eliminar4_<?php echo $z; ?>" type="button" class="btn btn-danger delete4">Eliminar</button></td>
          </tr>
        <?php
          $z++;
          }
        ?>

      </table>
      <button class="btn btn-primary" id="añadir4">Añadir</button>
      <br><br>
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

          <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=<?php echo $info_estancia[2]; ?>&key=AIzaSyASd10WQhVts73MLA5fmb32XP_433pAios" allowfullscreen></iframe>
    </div>

    <div class="tab-pane fade" id="participantes" role="tabpanel" aria-labelledby="participantes-tab">
    <div id="resultado5"> 
      <form method="post" action="">
        <input type="text" name="usu_invitado" id="name">
        <input type="submit" value="Invitar" name="Invitar" onclick="return clickButton();">
      </form>
      <p id="msg"></p>

      <div id="part">
      <?php  
        while($array6=mysqli_fetch_array($query6)){
          echo "$array6[0]";
          echo "<br>";
      }
      ?>
      </div>
      </div>     
    </div>
  </div>
  </div>

</body>
</html>