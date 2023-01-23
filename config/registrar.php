<?php
include 'conexion.php';

    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $pass_repetir = $_POST['pass_repetir'];

    // Validar nombre de usuario
    if(!preg_match('/^[a-zA-Z0-9]{8,20}$/', $user)) {
        session_start();
        $_SESSION['message'] = 
'<div class="alert alert-danger" role="alert">EL NOMBRE DE USUARIO DEBE TENER ENTRE 8 Y 20 CARACTERES Y CONTENER SOLO LETRAS Y NUMEROS</div>';
        header("Refresh:1; url=../registro.php");
         exit(); 
   }
  
  // Validar contraseña
  if(!preg_match('/^[a-zA-Z0-9]{8,20}$/', $pass)) {
    session_start();
    $_SESSION['message'] = 
'<div class="alert alert-danger" role="alert">LA CONTRASEÑA DEBE TENER AL MENOS 8 CARACTERES, UNA LETRA MAYÚSCULA, UNA LETRA MINÚSCULA Y UN NÚMERO</div>';
    header("Refresh:1; url=../registro.php");
     exit(); 
  }


  if ($pass !== $pass_repetir) {
    session_start();
    $_SESSION['message'] = '<div class="alert alert-danger" role="alert">CONTRASEÑAS NO COINCIDEN</div>';
    header("Refresh:1; url=../registro.php");
    exit();
}else {
    //$pass = password_hash($pass, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users(name,last_name,user,pass,created_at)
        VALUES('$name','$last_name','$user','$pass', NOW())
        ON DUPLICATE KEY UPDATE user='$user'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_affected_rows($conn) > 0) {
        // Si se insertó correctamente
        session_start();
        $_SESSION['message'] = 
'<div class="alert alert-success" role="alert">USUARIO REGISTRADO DE FORMA EXITOSA!</div>';
        header("Refresh:1; url=../login.php");
         exit();
      } else {
        // Si ocurrió un error
        session_start();
        $_SESSION['message'] = 
'<div class="alert alert-danger" role="alert">EL NOMBRE DE USUARIO "'.$user.'" YA ESTA EN USO, POR FAVOR ELIGE OTRO</div>';
        header("Refresh:1; url=../registro.php");
         exit();     
     }
}

?>