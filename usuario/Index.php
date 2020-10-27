<?php 
//INCLUDES
include("../Login_registro/sesion.php");

?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenid@ | <?php echo ucfirst($_SESSION["usuario"]); ?> </title>
    <link rel="stylesheet" href="CSS/estilo2.css">
    <link rel="stylesheet" href="CSS/fontello.css">
</head>
<body background="Imagenes/fondo avion.jpg">

    <header>
        <div class="header">
            <h1>iViaje</h1>
            <h2><?php echo ucfirst($_SESSION["usuario"]); ?></h2>
        </div>
    </header>

    <section class="contenido">
        <h1>Que desea hacer...</h1>
    </section>

            <article class="sidebar1">
                <a href=""><img src="Imagenes/mas.png" alt="Error al cargar"> 
                <h2>Nuevo Viaje</h2></a>
            </article>

<?php include("../Pagina2/eleccion.php");?> 


<!-- PRUEBA EXIT -->

<form action="" method="post">
<input type="submit" value="Exit" name="exit">
</form>
        
<!-- FINAL PRUEBA EXIT -->    
        
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