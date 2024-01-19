<?php   
    session_start();
    include('../config/conexion.php');

    if (isset($_POST['correo'])&& isset($_POST['contraseña'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $correo = validate($_POST['correo']); 
    $contraseña = validate($_POST['contraseña']);

    if (empty($correo)) {
        header("Location: sesion.php?error=El Usuario Es Requerido");
        exit();
    }elseif (empty($contraseña)) {
        header("Location: sesion.php?error=La clave Es Requerida");
        exit();
    }else{
        $Sql = "SELECT * FROM usuarios WHERE correo = '$correo' AND contraseña='$contraseña'";
        $result = mysqli_query($conexion, $Sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['correo'] === $correo && $row['contraseña'] === $contraseña) {
                $_SESSION['correo'] = $row['correo'];
                $_SESSION['nombre'] = $row['nombre'];
                $_SESSION['id'] = $row['id'];
                header("Location:  ../index.php");
                exit();
            }else {
                header("Location: sesion.php?error=El usuario o la clave son incorrectas");
                exit();
            }

        }else {
            header("Location: sesion.php?error=El usuario o la clave son incorrectas");
            exit();
        }
    }

} else {
    header("Location: sesion.php");
            exit();
}



