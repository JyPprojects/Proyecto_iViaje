<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="Imagenes/Favicon2.ico">
	<title>iViaje | Registrate</title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="estilos/hola3.css">
	

</head>  
<body>
<?php include("login_registro.php"); ?>

 <form class="formulario" method="post">
    
    <h1>iViaje</h1>
    <h3 class="Des">Organiza cualquier viaje con tus amigos o familiares con facilidad.</h3>
        
            <div class="contenedor">

                <div class="Ini">
                <h3><a href="index.php">Iniciar Sesion</a> | Registrarse</h3>
                </div>

                <div class="input-contenedor">
                <i class="fas fa-user icon"></i>
                <input type="text" placeholder="Usuario" name="usu">
                </div> 

                <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" placeholder="Contraseña" name="pass">
                </div> 

                <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" placeholder="Confirmar Contraseña" name="pass2">
                </div>

                <div class="input-contenedor">
                <i class="fas fa-user icon"></i>
                <input type="text" placeholder="Nombre" name="nom">
                </div> 

                <div class="input-contenedor">
                <i class="fas fa-user icon"></i>
                <input type="text" placeholder="Apellidos" name="ape">
                </div> 

                <div class="input-contenedor">
                <i class="fas fa-envelope icon"></i>
                <input type="text" placeholder="Correo" name="correo">
                </div> 

                <div class="input-contenedor">
                <i class="fas fa-calendar-alt icon"></i>
                <input class="fecha" type="date" name="fecha">
                </div> 

                <input type="submit" value="Registrarse" class="button" name="enviar">
                <p>Al registrarte, aceptará nuestras Condiciones de uso y Política de privacidad.</p>
                <?php echo $registro;
                      echo $error;
                 ?> 
            </div>
    </form>
</body>
</html>