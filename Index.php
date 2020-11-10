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
    <link rel="stylesheet" href="menu_post-login/CSS/estilo3.css">
    <link rel="stylesheet" href="menu_post-login/CSS/fontello.css">
</head>
<body background="menu_post-login/Imagenes/fondo avion.jpg">

    <header>
        <div class="header" >
            <h1>iViaje</h1>
            <ul class="nav">
                <li><a href=""><h2><?php echo ucfirst($_SESSION["usuario"]); ?></h2></a>
                    <ul>
                        <li><a href=""><h2>Perfil</h2></a></li>
                        <li><a href="<?php $_SERVER['PHP_SELF']?>?exit='exit'"><h2>Exit</h2></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>

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