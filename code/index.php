<?php 
echo "YEEEEPA";die;
//INCLUDES
include("php/sesion.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="menu_post-login/Imagenes/favicon5.ico">
    <title>MAKE AND TRAVEL | <?php echo ucfirst($_SESSION["usuario"]); ?> </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="menu_post-login/CSS/estilo3.css">
    <link rel="stylesheet" href="menu_post-login/CSS/fontello.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   
    <script>
        $( document ).ready(function() {
        $('#Modal').modal('toggle')
        });
    </script>
    
</head>
<body background="menu_post-login/Imagenes/fondo avion.jpg">

<?php 
if (isset($_GET['viaje'])) {?>
  <div id="Modal" class="modal fade" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div style="margin: 15px;" class="modal-content">
      <div class="modal-header">
        <h3 style="font-weight: 600;" class="modal-title">¡VIAJE CREADO CON EXITO!</h3>
      </div>
      <div class="modal-body">
        <div style="padding: 30px;" class="alert alert-success" role="alert">
          <h3 style="margin-bottom: 10px;" class="alert-heading">ENHORABUENA!</h3>
          <p style="font-size: large;">Has creado el viaje <?php echo $_GET['viaje'] ?> con exito. Pulsa sobre el boton para acceder a el y empezar a organizarlo con amigos o familiares.</p>
          <a href="viaje_creado/viaje.php"><button style="font-weight: 600; text-align: center;" type="button" class="btn btn-outline-success">Accede a Tu Viaje</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php } ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="menu_post-login/Imagenes/logo2.png" alt="" width="30" height="24" class="d-inline-block align-text-top">MAKE AND TRAVEL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" target="_blank" href="https://es.stackoverflow.com/">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" target="_blank" href="https://trello.com/b/MDw6jnOn/finalizar-proyecto">Acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" target="_blank" href="https://github.com/JyPprojects/Proyecto_iViaje">Contactanos</a>
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
          <?php include("php/admin.php"); ?> 
        </li>
      </ul> 
    </div>
  </div>
</nav>

    <section class="contenido">
        <h1>Que desea hacer...</h1>
    </section>

<?php include("eleccion.php");?> 


        <footer>
            <div class="contenedor">
            <p class="Derechos">MAKE AND TRAVEL &copy; 2021</p>
                <div class="redes">
                    <a class="icon-twitter" href="https://twitter.com/MartRod13"></a>
                    <a class="icon-instagram" href="www.google.com"></a>
                    <a class="icon-twitch" href="www.google.com"></a>
                    <a class="icon-facebook-squared" href="www.google.com"></a>
                </div>
                </div>
        </footer>
</body>
</html>