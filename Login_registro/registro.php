<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="Imagenes/Favicon2.ico">
	<title>iViaje | Registrate</title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link rel="stylesheet" href="estilos/hola3.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
        $( function() {
            $( "#datepicker" ).datepicker({
            changeMonth: true,
            changeYear: true
            });
        } );
        </script>

        <script>
        $( function() {
            $( document ).tooltip();
        } );
        </script>
        <style>
        label {
            display: inline-block;
            width: 5em;
        }
        </style>
</head>  
<body>
<?php include("login_registro.php"); ?>
<?php error_reporting(0); ?>

 <form class="formulario" method="post">
    
    <h1>iViaje</h1>
    <h3 class="Des">Organiza cualquier viaje con tus amigos o familiares con facilidad.</h3>
        
            <div class="contenedor">

                <div class="Ini">
                <h3><a href="index.php">Iniciar Sesion</a> | Registrarse</h3>
                </div>

                <div class="input-contenedor">
                <i class="fas fa-user icon"></i>
                <input type="text" placeholder="Usuario" name="usu" value=<?php echo ($_POST["usu"]); ?>>
                </div> 

                <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" title="La contraseña contendra como mínimo letras y un número" placeholder="Contraseña (Mínimo letra y número)" name="pass">
                </div> 

                <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" placeholder="Confirmar Contraseña" name="pass2">
                </div>

                <div class="input-contenedor">
                <i class="fas fa-user icon"></i>
                <input type="text" placeholder="Nombre" name="nom" value=<?php echo ($_POST["nom"]); ?>>
                </div> 

                <div class="input-contenedor">
                <i class="fas fa-user icon"></i>
                <input type="text" placeholder="Apellidos" name="ape" value=<?php echo ($_POST["ape"]); ?>>
                </div> 

                <div class="input-contenedor">
                <i class="fas fa-envelope icon"></i>
                <input type="text" placeholder="Correo" name="correo" value=<?php echo ($_POST["correo"]); ?>>
                </div> 

                <div class="input-contenedor">
                <i class="fas fa-calendar-alt icon"></i>
                <input class="fecha" id="datepicker" placeholder="Fecha de Nacimiento" type="text" name="fecha" value=<?php echo ($_POST["fecha"]); ?>>
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