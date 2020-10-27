<?php 
include("../Login_registro/sesion.php");

?>
<p>Bienvenido <?php echo $_SESSION["usuario"]; ?></p>
<form action="" method="post">

<input type="submit" value="Exit" name="exit">
</form>
