<?php 
require('constants.php');

$db_host="database-1-test.c4t4842a3z9o.eu-west-3.rds.amazonaws.com";
$db_nombre="test2";
$db_usuario="root";
$db_contra=$db_pass;

$conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

?>
