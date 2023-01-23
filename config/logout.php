<?php
session_start();
// Borrar todas las variables de sesión
$_SESSION = array();
// Obtener los parámetros de sesión
$params = session_get_cookie_params();
// Borrar el cookie actual
setcookie(session_name(), '', time() - 42000,
    $params["path"], $params["domain"],
    $params["secure"], $params["httponly"]
);
// Destruir la sesión
session_destroy();
// Redirigir al usuario a la página de inicio de sesión
$_SESSION['message'] = '<div class="alert alert-succes" role="alert">SESION CERRADA CON EXITO</div>';
header("Refresh:0; url=../login.php");
exit();
?>
