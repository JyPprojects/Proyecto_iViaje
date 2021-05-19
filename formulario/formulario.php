<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#tabs" ).tabs();
        } );
    </script>
    <title>iViaje | Crea tu viaje</title>
</head>
<body>
<?php include("nuevoviaje.php"); ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="../Index.php">iViaje</a>
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
                <li><a class="dropdown-item" href="#">Ajustes</a></li>
                <li><a class="dropdown-item" href="#">Acerca de</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="../php/sesion.php?exit='exit'">Cerrar Sesión</a></li>
              </ul>
            </li>
      </ul> 
    </div>
  </div>
</nav>

    <section id="contenido">

        <div id="tabs">
            <ul>
                <li><a href="#tabs-1">1º Paso - General</a></li>
                <li><a href="#tabs-2">2º Paso - Transporte</a></li>
                <li><a href="#tabs-3">3º Paso - Alojamiento</a></li>
                <li><a href="#tabs-4">4º Paso - Añade algo a tu Viaje</a></li>
            </ul>

            <div id="tabs-1">
                <form method="post">
                    <table id="paso1">
                        
                            <tr class="input-contenedor">
                                <td><p>Nombre Viaje: &nbsp;</p></td>
                                <td class="cuadro"><input type="text" name="nviaje" ></td>
                            </tr>

                            <tr class="input-contenedor">
                                <td><p>Pais: &nbsp;</p></td>
                                <td class="cuadro"><input type="text" name="pais" ></td>
                            </tr>

                            <tr class="input-contenedor">
                                <td><p>Bote: &nbsp;</p></td>
                                <td class="cuadro"><input type="number" name="bote" ></td>
                            </tr>

                            <tr class="input-contenedor">
                                <td><p>Fecha Inicio Viaje: &nbsp;</p></td>
                                <td class="cuadro"><input type="date" name="fecha_ini" ></td>
                            </tr>

                            <tr class="input-contenedor">
                                <td><p>Fecha Final Viaje: &nbsp;</p></td>
                                <td class="cuadro"><input type="date" name="fecha_fin" ></td>
                            </tr>

                    </table>
                    <input type="submit" value="Enviar" name="enviar">
                    <span class="flechas"><i class="fas fa-arrow-alt-circle-right"></i></span>

            </div>

            <div id="tabs-2">

                    <table id="paso1">

                        <tr class="input-contenedor">
                            <td><p>Medio de transporte: &nbsp;</p></td>
                            <td class="cuadro">
                                <select name="transporte" >
                                    <option selected value="0"> Elige una opción </option>
                                    <option value="Coche">Coche</option> 
                                    <option value="Avión">Avión</option> 
                                    <option value="Caravana">Caravana</option>
                                    <option value="Ave">Ave</option>
                                    <option value="Tren">Tren</option>
                                    <option value="Barco">Barco</option>
                                    <option value="Autobus">Autobus</option>
                                </select>
                            </td>
                        </tr>

                        <tr class="input-contenedor">
                            <td><p>Cantidad de Coches: &nbsp;</p></td>
                            <td class="cuadro"><input type="number" name="cantidad_coche" ></td>
                        </tr>

                        <tr class="input-contenedor">
                            <td><p>Combustible: &nbsp;</p></td>
                            <td class="cuadro">
                                <select name="combustible">
                                    <option selected value="0"> Elige una opción </option>
                                    <option value="Diesel">Diesel</option> 
                                    <option value="Gasolina">Gasolina</option> 
                                    <option value="Hibrido">Hibrido</option>
                                    <option value="Electrico">Electrico</option>
                                </select>
                            </td>
                        </tr>
                    </table>

                    <span class="flechas"><i class="fas fa-arrow-alt-circle-left"></i></span>
                    <span class="flechas"><i class="fas fa-arrow-alt-circle-right"></i></span>
                        
            </div>

            <div id="tabs-3">
                    <table id="paso1">

                        <tr class="input-contenedor">
                            <td><p>Tipo de Estancia: &nbsp;</p></td>
                            <td class="cuadro">
                                <select name="estancia">
                                    <option selected value="0"> Elige una opción </option>
                                    <option value="Hotel">Hotel</option> 
                                    <option value="Casa Rural">Casa Rural</option> 
                                    <option value="Caravana">Caravana</option>
                                </select>
                            </td>
                        </tr>

                        <tr class="input-contenedor">
                            <td><p>Dirección de la Estancia: &nbsp;</p></td>
                            <td class="cuadro"><input type="text" name="d_estancia" ></td>
                        </tr>

                        <tr class="input-contenedor">
                            <td><p>Tlfn Estancia: &nbsp;</p></td>
                            <td class="cuadro"><input type="number" name="tlfn_estancia" ></td>
                        </tr>

                    </table>
                    <span class="flechas"><i class="fas fa-arrow-alt-circle-left"></i></span> 
                
            </div>

            <div id="tabs-4">

                    <table>
                        <tr class="input-contenedor">
                            <td>
                                Comida: <textarea name="comida" id="" cols="20" rows="2" placeholder="Separa las sugerencias con una coma"></textarea>
                                Bebida: <textarea name="bebida" id="" cols="20" rows="2" placeholder="Separa las sugerencias con una coma" ></textarea>
                                Utensilios: <textarea name="utensilios" id="" cols="20" rows="2" placeholder="Separa las sugerencias con una coma"></textarea>
                                General: <textarea name="general" id="" cols="20" rows="2" placeholder="Separa las sugerencias con una coma"></textarea>
                                <!--<
                                    <select name="elegir_sugerencia">
                                    option selected value="0"> Elige una opción </option>
                                    <option value="1">Comida</option> 
                                    <option value="2">Bebida</option> 
                                    <option value="3">Utensilios</option>
                                    <option value="4">General</option>
                                </select>
                                &nbsp;<input type="text" name="sugerencia">
                                -->
                            </td>
                            <td>
                                
                            </td>
                        </tr>
                    </table>

                    <br><br>

                    <input type="submit" name="enviar" value="Enviar">
                </form>
            </div>

        </div>

    </section>

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