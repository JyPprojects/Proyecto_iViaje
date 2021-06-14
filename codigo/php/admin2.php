<?php 
if ($_SESSION["usuario"]=="Titijuanan" || $_SESSION["usuario"]=="gaonis") {
?>
<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
    <li><a class="dropdown-item" href="ajustes_perfil/index.php">Ajustes</a></li>
    <li><a class="dropdown-item" href="../admin/index.php">Admin</a></li>
    <li><a class="dropdown-item" href="#">Acerca de</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="../php/sesion.php?exit='exit'">Cerrar Sesión</a></li>
</ul>
<?php } 

else {?>
<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
    <li><a class="dropdown-item" href="../ajustes_perfil/index.php">Ajustes</a></li>
    <li><a class="dropdown-item" href="#">Acerca de</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="../php/sesion.php?exit='exit'">Cerrar Sesión</a></li>
</ul>
<?php } ?>