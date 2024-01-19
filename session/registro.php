<?php
    include('../config/conexion.php');

    if (isset($_POST['registrar'])) {
        if (strlen($_POST['nombre']) >= 1 && strlen($_POST['numero']) >= 1
        && strlen($_POST['correo']) >= 1 && strlen($_POST['contraseña']) >= 1) {
            $nombre = trim($_POST['nombre']);
            $numero = trim($_POST['numero']);
            $correo = trim($_POST['correo']);
            $contraseña = trim($_POST['contraseña']);

            $consulta = "INSERT INTO usuarios(nombre, numero, correo,contraseña) 
                                            VALUES ('$nombre','$numero','$correo','$contraseña')";
            // Validar si el correo electrónico ya existe en la base de datos
            $query = "SELECT COUNT(*) as count FROM usuarios WHERE correo = '$correo'";
            $resultado2= mysqli_query($conexion, $query);
            $row = mysqli_fetch_assoc($resultado2);
            if($row['count'] > 0){
                header("Location: usuarioregistro.php?error=¡El Correo Ya Existe!" );
            exit();
}
            // Validar si el numero telefonico ya existe en la base de datos
            $query = "SELECT COUNT(*) as count FROM usuarios WHERE numero = '$numero'";     
            $resultado3= mysqli_query($conexion, $query);
            $row = mysqli_fetch_assoc($resultado3);
            if($row['count'] > 0){
                header("Location: usuarioregistro.php?error=¡El Numero Telefonico Ya Existe!" );
            exit();
}
            $resultado = mysqli_query($conexion,$consulta);
            if ($resultado) {
                header("Location: usuarioregistro.php?error=¡Te has registrado correctamente!" );
                exit();
            }  else {
                header("Location: usuarioregistro.php?error=¡Por favor complete los campos!");
                exit();
            }
    }
}        
?>

