<?php
session_start();
session_destroy();

// Redirigimos al usuario a la página de inicio
header("Location: ../index.php");
exit();
?>