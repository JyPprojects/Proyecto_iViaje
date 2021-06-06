<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="Imagenes/Favicon2.ico">
	<title>MAKE AND TRAVEL | Registrate</title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="estilos/hola3.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    <script src="jquery.ui.datepicker-es.js"></script>
    <link rel="stylesheet" type="text/css" href="../alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="../alertifyjs/css/themes/default.css">
    <script src="../alertifyjs/alertify.js" type="text/javascript"></script>

    <script>
        $.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '< Ant',
        nextText: 'Sig >',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
        dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
        weekHeader: 'Sm',
        dateFormat: 'dd-mm-yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
        };
        $.datepicker.setDefaults($.datepicker.regional['es']);

        $(function () {
        $.datepicker.setDefaults($.datepicker.regional["es"]);
        $("#fecha").datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: "1900:2030"
        });
        });
    </script>

</head>  
<body>
<?php include("login_registro.php"); ?>
<?php error_reporting(0); ?>

 <form class="formulario" method="post">
    
    <h1>MAKE AND TRAVEL</h1>
    <h3 class="Des">Organiza cualquier viaje con tus amigos o familiares con facilidad.</h3>
        
            <div class="contenedor">

                <div class="Ini">
                <h3><a class="enlace" href="index.php">Iniciar Sesion</a> | <span class="seleccion">Registrarse</span></h3>
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
                <input class="fecha" id="fecha" placeholder="Fecha de Nacimiento" type="text" name="fecha" value=<?php echo ($_POST["fecha"]); ?>>
                </div> 

                <input type="submit" value="Registrarse" class="button" name="enviar">
                <p>Al registrarte, aceptará nuestras Condiciones de uso y Política de privacidad.</p>
                <?php
                      echo $error;
                 ?> 
            </div>
    </form>
</body>
</html>