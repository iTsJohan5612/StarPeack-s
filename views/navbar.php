<html>
<a href="#" class="btn-flotante" id="btnCarrito">Carrito <span class="badge bg-success" id="carrito">0</span></a>
    <!-- Navigation-->
    <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.php">StarPeack's</a>
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <a href="productos.php" class="nav-link text-info" category="all">Todo</a>
                        <?php
                        $query = mysqli_query($conexion, "SELECT * FROM categorias");
                        while ($data = mysqli_fetch_assoc($query)) { ?>
                            <a href="#" class="nav-link" category="<?php echo $data['categoria']; ?>"><?php echo $data['categoria']; ?></a>
                        <?php } ?>
                    </ul>
                </div>
                <!-- Si el usuario ha iniciado sesión, mostrar el perfil del usuario -->
                <?php
                session_start();
                if(isset($_SESSION['correo'])) {
                        echo "<a href='perfil.php' class='nav-link text-info'  >Bienvenido " . $_SESSION['nombre'] . " </a> ";
                        echo "<a href='session/cerrar_sesion.php' class='nav-link text-info'  >Cerrar Sesión</a>";
                } else {
                        echo "<a href='session/sesion.php' class='nav-link text-info' >Iniciar Sesión</a>";
                        echo" <a href='admin/index.php' class='nav-link text-info' >Admin</a>"; 
                }
                ?>
            </div>
        </nav>
    </div>
</html>

