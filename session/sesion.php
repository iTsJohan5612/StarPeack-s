<!doctype html>
<html lang="es">
<head>
  <title>Iniciar Sesion</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/x-icon" href="favicon.ico" />
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/style2.css">
</head>
<body>
	<!--INICIAR SESION-->
<form action="IniciarSesion.php" method="POST">
	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Iniciar Sesion</h4>
											<?php 
           											 if (isset($_GET['error'])) {
           									 ?>
            									<p class="error">
                							<?php
               										 echo $_GET['error']
               								 ?>
                
            								</p>
        									<?php    
           									 }
       										 ?>
											<div class="form-group">
												<input type="email" class="form-style" name= "correo"data-rule="email" placeholder="Correo"">
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" class="form-style" name= "contraseña" placeholder="Contraseña">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<button type="submit" class="btn mt-4"> Iniciar Sesion</button>
											<a href="usuarioregistro.php" class="btn mt-4">Registrate</a>
                      						<p class="mb-0 mt-4 text-center"><a href="../index.php" class="link">Olvidaste Tus Datos? Comunicate  Con Un Administrador</a></p>
				      					</div>
			      					</div>
			      				</div>
							</div>
						</div>
			      	</div>
			    </div>
			</div>
		</div>
	</div>
</form>
</body>
</html>