<?php 

session_start();

if(!isset($_SESSION["usuario"])){

    header("Location: ../Principal/index.php");
}
else{
}

if (isset($_GET["exit"])){

    session_destroy();
    header("Location: ../Principal/index.php");
    
}
else{    
}






?>