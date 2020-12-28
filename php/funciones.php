<?php
//INCLUDES


//FUNCION SELECT SQL
function select_query($campo,$tabla,$where1,$where2){
        include("conexion.php");

        $sql="SELECT $campo FROM $tabla WHERE $where1='$where2'";
        $resultado1=mysqli_query($conexion, $sql);
        $resultado2=mysqli_fetch_row($resultado1);

        return $resultado2;
}


?>