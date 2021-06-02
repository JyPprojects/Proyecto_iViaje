<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="Estilos/estilo.css">
    <title>Admin</title>
</head>
<?php 
  include("../php/sesion.php");
  include("consultas.php");
?>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php">MAKE AND TRAVEL</a>
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
                <li><a class="dropdown-item" href="../ajustes_perfil/index.php">Ajustes</a></li>
                <li><a class="dropdown-item" href="#">Acerca de</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="../php/sesion.php?exit='exit'">Cerrar Sesión</a></li>
              </ul>
            </li>
      </ul> 
    </div>
  </div>
</nav>

<h1 class="titulo">Usuarios Registrados</h1>
<table class="table table-striped table-sm">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Usuario</th>
      <th scope="col">Dirección Correo</th>
      <th scope="col">Fecha Nacimiento</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellidos</th>
    </tr>
  </thead>
  <tbody>
    <?php
      while ($array=mysqli_fetch_assoc($resultado)) {
          echo "<tr>";
              echo "<td>$array[id_usuario]</td>";
              echo "<td>$array[usuario]</td>";
              echo "<td>$array[correo]</td>";
              echo "<td>$array[fecha]</td>";
              echo "<td>$array[nombre]</td>";
              echo "<td>$array[apellidos]</td>";
          echo "</tr>";
      }
    ?>
  </tbody>
</table>

<br>

<h1 class="titulo">Viajes Creados</h1>
<table class="table table-striped table-sm">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre Viaje</th>
      <th scope="col">fecha Inicio</th>
      <th scope="col">Fecha Fin</th>
      <th scope="col">Bote</th>
    </tr>
  </thead>
  <tbody>
    <?php
      while ($array=mysqli_fetch_assoc($resultado2)) {
          echo "<tr>";
              echo "<td>$array[idviaje]</td>";
              echo "<td>$array[nombre_viaje]</td>";
              echo "<td>$array[fecha_inicio]</td>";
              echo "<td>$array[fecha_fin]</td>";
              echo "<td>$array[bote]</td>";
          echo "</tr>";
      }
    ?>
  </tbody>
</table>

</body>
</html>