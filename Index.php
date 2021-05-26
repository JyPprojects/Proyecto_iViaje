<?php 
//INCLUDES
include("php/sesion.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenid@ | <?php echo ucfirst($_SESSION["usuario"]); ?> </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="menu_post-login/CSS/estilo3.css">
    <link rel="stylesheet" href="menu_post-login/CSS/fontello.css">
    
</head>
<body background="menu_post-login/Imagenes/fondo avion.jpg">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">iViaje</a>
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
                <li><a class="dropdown-item" href="ajustes_perfil/index.php">Ajustes</a></li>
                <li><a class="dropdown-item" href="#">Acerca de</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="php/sesion.php?exit='exit'">Cerrar Sesión</a></li>
              </ul>
            </li>
      </ul> 
    </div>
  </div>
</nav>

    <section class="contenido">
        <h1>Que desea hacer...</h1>
    </section>

            <article class="sidebar1">
                <a href="formulario/formulario.php?nuevoviaje='nuevoviaje'"><img src="menu_post-login/Imagenes/mas.png" alt="Error al cargar"> 
                <h2>Nuevo Viaje</h2></a>
            </article>

<?php include("eleccion.php");?> 


        
        <footer>
            <div class="contenedor">
            <p class="Derechos">iViaje &copy; 2020</p>
                <div class="redes">
                    <a class="icon-twitter" href="https://www.google.com"></a>
                    <a class="icon-instagram" href="www.google.com"></a>
                    <a class="icon-twitch" href="www.google.com"></a>
                    <a class="icon-facebook-squared" href="www.google.com"></a>
                </div>
                </div>
        </footer>
</body>
</html>