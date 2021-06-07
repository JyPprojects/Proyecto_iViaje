<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="icon" href="imagenes/favicon5.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="formulario.js"></script> 
    <style type="text/css">
        #regiration_form fieldset:not(:first-of-type) {
            display: none;
        }
    </style>
    <script>
        $( function() {
            $( "#tabs" ).tabs();
        } );
    </script>
    <title>MAKE AND TRAVEL | Crea tu viaje</title>
</head>
<body>
<?php include("nuevoviaje.php"); ?>

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
                <?php echo ucfirst($_SESSION["usuario"]); ?>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="../ajustes_perfil/index.php">Ajustes</a></li>
                    <li><a class="dropdown-item" href="#">Acerca de</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="../php/sesion.php?exit='exit'">Cerrar Sesión</a></li>
                </ul>
            </li>
      </ul> 
    </div>
  </div>
</nav>

    <div class="container">
        <h1>Crea tu viaje paso a paso</h1>
        <div class="progress">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <br>
        <form id="regiration_form" novalidate method="post">

            <fieldset>

                <h2>Paso 1: Da nombre a tu viaje</h2>
                <div class="form-group">
                    <label for="nviaje">Nombre Viaje</label>
                    <input id="nviaje" type="text" class="form-control" name="nviaje" placeholder="Nombre Viaje">
                </div>
                <br>
                <div class="form-group">
                    <label for="pais">Pais</label>
                    <input id="pais" type="text" class="form-control" name="pais" placeholder="Pais">
                </div>
                <br>
                <div class="form-group">
                    <label for="bote">Bote</label>
                    <input id="bote" type="number" class="form-control" name="bote" placeholder="Bote">
                </div>
                <br>
                <div class="form-group">
                    <label for="Fecha Inicio Viaje">Fecha Inicio Viaje</label>
                    <input id="fecha_ini" type="date" class="form-control" name="fecha_ini" placeholder="Fecha Inicio Viaje">
                </div>
                <br>
                <div class="form-group">
                    <label for="Fecha Final Viaje">Fecha Final Viaje</label>
                    <input id="fecha_fin" type="date" class="form-control" name="fecha_fin" placeholder="Fecha Final Viaje">
                </div>
                <br>
                <input id="siguiente1" type="button" class="next btn btn-info" value="Siguiente" />

            </fieldset>

            <fieldset>

                <h2> Paso 2: Transporte</h2>
                <div class="form-group">
                    <label for="transporte">Medio de transporte</label>
                    <select id="transporte" name="transporte" class="form-control">
                        <option selected value=""> Elige una opción </option>
                        <option value="Coche">Coche</option> 
                        <option value="Avión">Avión</option> 
                        <option value="Caravana">Caravana</option>
                        <option value="Ave">Ave</option>
                        <option value="Tren">Tren</option>
                        <option value="Barco">Barco</option>
                        <option value="Autobus">Autobus</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="cantidad">Cantidad de Coches</label>
                    <input id="c_coches" type="number" class="form-control" name="cantidad_coche" placeholder="Cantidad de Coches">
                </div>
                <br>
                <div class="form-group">
                    <label for="combustible">Combustible</label>
                    <select id="combustible" name="combustible" class="form-control">
                        <option selected value=""> Elige una opción </option>
                        <option value="Diesel">Diesel</option> 
                        <option value="Gasolina">Gasolina</option> 
                        <option value="Hibrido">Hibrido</option>
                        <option value="Electrico">Electrico</option>
                    </select>
                </div>
                <br>
                <input type="button" name="previous" class="previous btn btn-default" value="Atras" />
                <input id="siguiente2" type="button" name="next" class="next btn btn-info" value="Siguiente" />

            </fieldset>

            <fieldset>
                <h2>Paso 3: Alojamiento</h2>
                <div class="form-group">
                    <label for="estancia">Tipo de Estancia</label>
                    <select id="estancia" name="estancia" class="form-control">
                        <option selected value=""> Elige una opción </option>
                        <option value="Hotel">Hotel</option> 
                        <option value="Casa Rural">Casa Rural</option> 
                        <option value="Caravana">Caravana</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="direccion">Dirección de la Estancia</label>
                    <input id="direccion" type="text" class="form-control" name="d_estancia" placeholder="Dirección de la Estancia">
                </div>
                <br>
                <div class="form-group">
                    <label for="telefono">Teléfono Estancia</label>
                    <input id="tlf_estancia" type="text" class="form-control" name="tlfn_estancia" placeholder="Teléfono Estancia">
                </div>
                <br>
                <input type="button" name="previous" class="previous btn btn-default" value="Atras" />
                <input id="siguiente3" type="button" name="next" class="next btn btn-info" value="Siguiente" />
            </fieldset>

            <fieldset>
                <h2>Paso 4: Añade algo a tu viaje</h2>
                <div class="form-group">
                    <label for="comida">Comida</label>
                    <textarea class="form-control" name="comida" placeholder="Separa las sugerencias con una coma"></textarea>
                </div>
                <div class="form-group">
                    <label for="bebida">Bebida</label>
                    <textarea class="form-control" name="bebida" placeholder="Separa las sugerencias con una coma"></textarea>
                </div>
                <div class="form-group">
                    <label for="utensilios">Utensilios</label>
                    <textarea class="form-control" name="utensilios" placeholder="Separa las sugerencias con una coma"></textarea>
                </div>
                <div class="form-group">
                    <label for="general">General</label>
                    <textarea class="form-control" name="general" placeholder="Separa las sugerencias con una coma"></textarea>
                </div>
                <br>
                <input type="button" name="previous" class="previous btn btn-default" value="Atras" />
                <input type="submit" name="enviar" class="submit btn btn-success" value="Enviar" id="submit_data" />
            </fieldset>
        </form>
    </div>
</body>
</html>