<?php 
    include("../php/sesion.php");
    include("consultas.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="imagenes/favicon.ico">
    <title>Ajustes de Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="../alertifyjs/css/themes/default.css">
    <script src="../alertifyjs/alertify.js" type="text/javascript"></script>
    <script src="../librerias/jquery-3.5.1.js"></script>
</head>

<body>
<?php include("editar.php"); ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="../index.php"><img src="../menu_post-login/imagenes/logo2.png" alt="" width="30" height="24" class="d-inline-block align-text-top">MAKE AND TRAVEL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Acerca de</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contactanos</a>
                </li>
            </ul>
            <ul class="navbar-nav me-righ mb-2 mb-lg-0" style="margin-right: 5%;">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php if (!empty($_SESSION['imagen'])) { ?> 
                        <img src="data:<?php echo $_SESSION['tipo_imagen'];?>;base64,<?php echo base64_encode($_SESSION['imagen']);?>" alt="" width="30" height="24" class="d-inline-block align-text-top" style="border-radius: 50%"><?php echo ucfirst($_SESSION["usuario"]); ?>
                    <?php }  

                    else { ?> 
                        <?php echo ucfirst($_SESSION["usuario"]); ?>
                    <?php } ?>
                    </a>
                    <?php include("../php/admin2.php"); ?> 
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
                            <?php if (!empty($_SESSION['imagen'])) { ?> 
                                <img class='img-thumbnail' src="data:<?php echo $_SESSION['tipo_imagen'];?>;base64,<?php echo base64_encode($_SESSION['imagen']);?>">
                            <?php }  

                            else { ?> 
                                <img class='img-thumbnail' src='https://cdn2.iconfinder.com/data/icons/website-icons/512/User_Avatar-512.png' alt='ERROR AL MOSTRAR LA IMAGEN'>
                            <?php } ?>
                            <br><br>
                            <form method="post" enctype="multipart/form-data">
                                <input type="file" class="form-control" name="foto">
                                <br>
                                <button type="submit" class="btn btn-primary" name="guardar" value="guardar">Actualizar Foto</button>
                            </form>
                        </div>
                        <div class="col-8">
                            <form method="post">
                                <div class="form-group row">
                                    <label for="codigo" class="col-2"> Id_Usuario:</label>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="idm" value="<?php echo $_SESSION["id_usuario"]; ?>" readonly>
                                        </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label for="usuarop" class="col-2"> Usuario:</label>
                                        <div class="col-8">
                                            <input type="text" class="form-control" name="usuariom" value="<?php echo $u; ?>">
                                        </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <label for="email" class="col-2"> Email:</label>
                                        <div class="col-8">
                                            <input type="email" class="form-control" name="mailm" value="<?php echo $correo; ?>">
                                        </div>
                                </div>
                                <br>
                                <div class="form-group text-center">
                                    <button class="btn btn-info" name="Actualizar" value="Actualizar">Actualizar</button>
                                </div>
                                <div class="form-group text-center">
                                    <?php echo "$error"; ?>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="col-md-6 offset-md-3">
                        <h3 class="text-center">Cambio de Contraseña</h3>
                        <br>
                        <form method="post">
                            <div class="form-group row">
                                <label for="Usuario" class="col-4">Contraseña Antigua:</label>
                                <div class="col-8">
                                    <input type="password" class="form-control" name="contraan">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="contrasenia" class="col-4">Contraseña Nueva:</label>
                                <div class="col-8">
                                    <input type="password" class="form-control" name="contranu">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="ncontrasenia" class="col-4">Repetir Contraseña:</label>
                                <div class="col-8">
                                    <input type="password" class="form-control" name="contranu2">
                                </div>
                            </div>
                            <br>
                            <div class="form-group text-center">
                                <button class="btn btn-info" name="Actualizarcontra" value="Actualizarcontra">Actualizar</button>
                            </div>
                            <div class="form-group text-center">
                                <?php echo "$errorcontra"; ?>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</div>
</body>
</html>