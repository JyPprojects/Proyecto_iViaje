<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="Imagenes/Favicon2.ico">
	<title>iViaje | Organiza tu Viaje</title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="hola1.css">
	

</head>  
<body>
<?php  include("../Login_registro/login_registro.php"); ?>
 <form class="formulario" method="post">
    
    <h1>iViaje</h1>
    <h3 class="Des">Organiza cualquier viaje con tus amigos o familiares con facilidad.</h3>
        
            <div class="contenedor">

                <div class="Ini">
                <h3><a href="">Iniciar Sesion</a> | <a href="registro.php">Registrarse</a></h3>
                </div>

                <div class="input-contenedor">
                <i class="fas fa-user icon"></i>
                <input type="text" placeholder="Usuario" name="usu" required value=<?php echo ucfirst($_COOKIE["cookie1"]); ?>>
                </div> 

                <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" placeholder="Contraseña" name="pass" required>
                </div>

                <input type="submit" value="Login" class="button" name="login">
                <p>Al registrarte, aceptará nuestras Condiciones de uso y Política de privacidad.</p>
                <?php echo $error; ?>
                <input type="checkbox" value="Recúerdame" name="cookie">
            </div>
    </form>
</body>
</html>