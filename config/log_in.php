<?php
session_start();
include 'conexion.php';

if (isset($_POST['user']) && isset($_POST['pass'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $query = "SELECT * FROM users WHERE user = ? AND pass = ?";
    // prepare the statement
    $stmt = mysqli_prepare($conn, $query);
    // bind the parameters
    mysqli_stmt_bind_param($stmt, "ss", $user, $pass);
    // execute the statement
    mysqli_stmt_execute($stmt);
    // store the result
    mysqli_stmt_store_result($stmt);
    // check if a match was found
    if (mysqli_stmt_num_rows($stmt) == 1) {
        // Iniciar sesión
        $_SESSION['logged_in'] = true;
        $_SESSION['user'] = $user;
        $_SESSION['message'] = '<div class="alert alert-success" role="alert">INGRESO DE FORMA EXITOSA</div>';
        header("Refresh:1; url=../ingreso.php");
        exit();
    } else {
        // Mostrar mensaje de error
        $_SESSION['message'] = '<div class="alert alert-danger" role="alert">NOMBRE DE USUARIO O CONTRASEÑA INVALIDOS</div>';
        header("Refresh:0; url=../login.php");
        exit();
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    // Usuario ya ha iniciado sesión, redirigir a dashboard
    header('Location: index.php');
    exit;
}
?>
