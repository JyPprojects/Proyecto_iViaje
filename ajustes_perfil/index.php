<?php 
    include("../php/sesion.php");
    include("consultas.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajustes de Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="../Index.php">MAKE AND TRAVEL</a>
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
                        <li><a class="dropdown-item" href="#">Acerca de</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="../php/sesion.php?exit='exit'">Cerrar Sesión</a></li>
                    </ul>
                </li>
            </ul> 
        </div>
    </div>
</nav>

    <br>
    <br>
    <br>
    <br>
    <br>


<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Datos Usuario</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Actualizar Contraseña</button>
                </li>
            </ul>
                <div class="tab-content" id="myTabContent">
                <br>
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row">
                        <div class="col-4">
                            <img class="img-thumbnail"
                                src="https://cdn2.iconfinder.com/data/icons/website-icons/512/User_Avatar-512.png"
                                alt="">
                        </div>
                        <div class="col-8">
                            <div class="form-group row">
                                <label for="codigo" class="col-2"> Id_Usuario:</label>
                                    <div class="col-8">
                                        <input type="text" class="form-control" value="<?php echo $_SESSION["id_usuario"]; ?>" readonly>
                                    </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="usuarop" class="col-2"> Usuario:</label>
                                    <div class="col-8">
                                        <input type="text" class="form-control" value="<?php echo $_SESSION["usuario"]; ?>">
                                    </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="email" class="col-2"> Email:</label>
                                    <div class="col-8">
                                        <input type="email" class="form-control" value="<?php echo $correo; ?>">
                                    </div>
                            </div>
                            <br>
                            <div class="form-group text-center">
                                <button class="btn btn-info">Actualizar</button>
                             </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="col-md-6 offset-md-3">
                                <h3 class="text-center">Cambio de Contraseña</h3>
                                <br>
                                <div class="form-group row">
                                    <label for="Usuario" class="col-4">Contraseña Antigua:</label>
                                    <div class="col-8">
                                        <input type="password" class="form-control">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label for="contrasenia" class="col-4">Contraseña Nueva:</label>
                                    <div class="col-8">
                                        <input type="password" class="form-control">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label for="ncontrasenia" class="col-4">Repetir Contraseña Nueva:</label>
                                    <div class="col-8">
                                        <input type="password" class="form-control">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group text-center">
                                    <button class="btn btn-info">Actualizar</button>
                                </div>
                    </div>
                </div>
        </div>
    </div>
</div>
</body>
</html>