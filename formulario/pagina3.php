<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <p><h1>PAGINA 3</h1></p>
    <hr>

    <form method="post" >
        <p><h2>Elige el nombre de tu viaje: </h2></p>
        <input type="text" name="nviaje" id="">
        
<br>
        <p>Fecha inicio:</p>
        <input type="date" name="fecha_ini">
        <p>Fecha fin:</p>
        <input type="date" name="fecha_fin">
        <p>Bote:</p>
        <input type="number" name="bote">
<br><br>
        <input type="submit" name="enviar">
<br><br> 
       <a href="../Index.php">EXIT</a> 
    </form>




    <br><br><br><br><br><br><hr>
    <?php include("nuevoviaje.php")  ?> 
</body>
</html>