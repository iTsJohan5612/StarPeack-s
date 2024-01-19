<?php require_once "config/conexion.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Conocenos</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets\favicon.ico" />
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link href="assets/css/estilos.css" rel="stylesheet" />
</head>
<body>
<?php
          include_once('views/navbar.php');
  ?> 
    <header class="py-5 bg-info">
          <div class="container px-4 px-lg-5 my-5">
              <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Perfil</h1>
                <p class="lead fw-normal text-white-50 mb-0"> 
                  <?php
                    // Establecer variables de sesión con los datos de la tabla de la base de datos
                    $_SESSION['id'] ;
                    $_SESSION['nombre'] ;
                    $_SESSION['correo'] ; 
                  ?>
                   <p><strong>ID:</strong> <?php echo $_SESSION['id']; ?></p>
                  <p><strong>Nombre:</strong> <?php echo $_SESSION['nombre']; ?></p>
                  <p><strong>Correo:</strong> <?php echo $_SESSION['correo']; ?></p>
                <p>
              </div>
           </div>
<header>
</body>
</html>