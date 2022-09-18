<?php
//INCLUDES


//FUNCION SELECT SQL
function select_query($campo,$tabla,$where1,$where2){
        include('conexion.php');

        $sql="SELECT $campo FROM $tabla WHERE $where1='$where2'";
        $resultado1=mysqli_query($conexion, $sql);
        $resultado2=mysqli_fetch_row($resultado1);

        return $resultado2;
}

function select_query_necesidad($campo,$tabla,$where1,$where2,$where3,$where4){
        include('conexion.php');

        $sql="SELECT $campo FROM $tabla WHERE $where1='$where2' AND $where3='$where4'";
        $resultado3=mysqli_query($conexion, $sql);
        $resultado4=mysqli_fetch_row($resultado3);
        return $resultado4;
}


?>