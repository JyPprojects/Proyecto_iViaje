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

    <header>
        <div class="header">
            <a href="../Index.php"><h1>iViaje</h1></a>
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

    <section id="contenido">

        <div id="tabs">
            <ul>
                <li><a href="#tabs-1">1º Paso - General</a></li>
                <li><a href="#tabs-2">2º Paso - Transporte</a></li>
                <li><a href="#tabs-3">3º Paso - Alojamiento</a></li>
                <li><a href="#tabs-4">4º Paso - Sugerencias</a></li>
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
                                Utensilions: <textarea name="utensilios" id="" cols="20" rows="2" placeholder="Separa las sugerencias con una coma"></textarea>
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