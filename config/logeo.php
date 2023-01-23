<?php
session_start();

// Conexión a la base de datos
include 'conexion.php';

    if (loginIsValid()) {
        $_SESSION['logged_in'] = true;
        $_SESSION['user'] = $user; 
    } else {
        $_SESSION['logged_in'] = false;
    }

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);

    $query = "SELECT * FROM users WHERE user = '$user' AND pass = '$pass'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // Iniciar sesión y redirigir al formulario
        $_SESSION['user'] = $user;
        $_SESSION['message'] = '<div class="alert alert-success" role="alert">INGRESO DE FORMA EXITOSA</div>';
        header("Refresh:1; url=../ingreso.php");
        exit();
    } else {
        // Mostrar mensaje de error
        $_SESSION['message'] = '<div class="alert alert-danger" role="alert">CREDENCIALES INVALIDAS</div>';
        header("Refresh:0; url=../login.php");
        exit();
    }
}
?>
