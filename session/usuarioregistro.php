<!DOCTYPE html>
<html lang="es">
<head>
    <title>Registro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
     <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style2.css">
</head>
<body>
<!--REGISTRO-->

<form action="registro.php" method="POST">
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
                                            <h4 class="mb-3 pb-3">Registro</h4>
                                                <?php 
           					 if (isset($_GET['error'])) {
           		                        ?>
            					        <p class="error">
                				<?php
               					echo $_GET['error']
               					?>
                                                <?php    
           					}
       					        ?>
                                            
                                                    <div class="form-group">
                                                            <input type="text" class="form-style" name= "nombre"placeholder="Nombre Y Apellido"require minlength="10" maxlength="15" size="15">
                                                            <i class="input-icon uil uil-user"></i>
                                                    </div>	
                                                    <div class="form-group mt-2">
                                                            <input type="number" class="form-style" name= "numero"placeholder="Telefono">
                                                            <i class="input-icon uil uil-phone"></i>
                                                    </div>	
                                                    <div class="form-group mt-2">
                                                            <input type="email" class="form-style" name= "correo"data-rule="email" placeholder="Correo">
                                                            <i class="input-icon uil uil-at"></i>
                                                    </div>
                                                    <div class="form-group mt-2">
                                                            <input type="password" class="form-style" name= "contraseña"placeholder="Contraseña">
                                                            <i class="input-icon uil uil-lock-alt"></i>
                                                    </div>
                                                            <input type= "submit"class="btn mt-4" value ="registrar" name ="registrar"></input>
                                                    <p class="mb-0 mt-4 text-center"><a href="sesion.php" class="link">Ya Estas Registrado? Inicia Sesion</a></p>
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
</div>
</form>
</body>
</html>