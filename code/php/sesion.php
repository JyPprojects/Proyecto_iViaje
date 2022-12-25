<?php 
// session_start(); NO FUNCIONA EL SESSION START

if(!isset($_SESSION["usuario"])){

    header("Location: login_registro/index.php");
}
else{
}

if (isset($_GET["exit"])){

    session_destroy();
    header("Location: ../login_registro/index.php");
    
}
else{    
}

?>