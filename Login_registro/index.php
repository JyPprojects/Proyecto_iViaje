<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="Imagenes/Favicon2.ico">
	<title>MAKE AND TRAVEL | Organiza tu Viaje</title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="estilos/hola3.css">
    <link rel="stylesheet" type="text/css" href="../alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="../alertifyjs/css/themes/default.css">
    <script src="../alertifyjs/alertify.js" type="text/javascript"></script>
	<script src="../librerias/jquery-3.5.1.js"></script>

    <script>
        $(document).ready(function(){
            $("body").hide().fadeIn(2000);
        });
    </script>

    
</head>  
<body>
<?php  include("login_registro.php"); ?>
 <form class="formulario" method="post">
    
    <h1>MAKE AND TRAVEL</h1>
    <h3 class="Des">Organiza cualquier viaje con tus amigos o familiares con facilidad.</h3>
        
            <div class="contenedor">

                <div class="Ini">
                <h3><span class="seleccion">Iniciar Sesion</span> | <a class="enlace" href="registro.php">Registrarse</a></h3>
                </div>

                <div class="input-contenedor">
                <i class="fas fa-user icon"></i>
                <input type="text" placeholder="Usuario" name="usu" value=<?php echo ucfirst($_COOKIE["cookie1"]); ?>>
                </div> 

                <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" placeholder="Contraseña" name="pass">
                </div>

                <input type="checkbox" value="Recúerdame" name="cookie"> Recuérdame
                <br><br>

                <input type="submit" value="Login" class="button" name="login">
                <p>¿Quienes somos? <a href="">Pincha aquí</a></p>
                <?php 
                    echo $error;
                    if (isset($_GET['registro'])) {?>
                        <script>
                            alertify.success('Usuario registrado con exito'); 
                        </script>
                    <?php }
                 ?>
                
            </div>
    </form>
</body>
</html>