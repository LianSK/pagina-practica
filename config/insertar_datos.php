<?php

    include 'conexion.php';
    
session_start();
if (!isset($_SESSION['user'])) {
    header("location: ../login.php");
    exit();
}
// Check if the form was submitted
if (isset($_REQUEST['submit'])) {
  if($_POST["options"] == "nulo"){///
    $_SESSION['message'] = '<div class="alert alert-danger" role="alert">DEBES SELECCIONAR UNA CATEGORIA VALIDA PARA PODER ENVIAR EL FORMULARIO</div>';
     header("Refresh:1; url=../ingreso.php");
      exit();
  } else {
    // Read the text and image data from the form
    $nombre_tienda = $_POST['nombre_tienda'];
    $text = $_POST['text'];
    $links = $_POST['links'];
    $options = $_POST['options'];
    $user = $_SESSION['user'];

    $query = "SELECT id FROM users WHERE user='$user'";
    $result = $conn->query($query);
    $user_id = $result->fetch_assoc()['id'];
 // $content = $_POST['content'];
    if (isset($_FILES['foto']['name'])){
        $tipoArchivo = $_FILES['foto']['type'];
        $nombreArchivo = $_FILES['foto']['name'];
        $tamanoArchivo = $_FILES['foto']['size'];
        $imagenSubida = fopen($_FILES['foto']['tmp_name'], 'r');
        $binariosImagen = fread($imagenSubida, $tamanoArchivo);
        $binariosImagen = mysqli_escape_string($conn, $binariosImagen);
        
        $query = "INSERT INTO tiendas (option_name, nombre_tienda, text, image, links, user_id, created_at) VALUES
    ('$options', '$nombre_tienda', '$text', '$binariosImagen', '$links','$user_id', now())";
         $res = mysqli_query($conn, $query);
    }

    }if (isset($_POST['options'])) {
        $options = $_POST['options'];
        if ($options == 'Vestuario') {
          $_SESSION['message'] = '<div class="alert alert-success" role="alert">SU NEGOCIO HA SIDO AGREGADO CORRECTAMENTE</div>';
          header("Refresh:1; url=../vestuario.php");
          exit();
        } else if ($options == 'Joyas') {
          $_SESSION['message'] = '<div class="alert alert-success" role="alert">SU NEGOCIO HA SIDO AGREGADO CORRECTAMENTE</div>';
          header("Refresh:1; url=../joyas.php");
          exit();
        } else if ($options == 'Computacion') {
          $_SESSION['message'] = '<div class="alert alert-success" role="alert">SU NEGOCIO HA SIDO AGREGADO CORRECTAMENTE</div>';
          header("Refresh:1; url=../computacion.php");
          exit();
        } else if ($options == 'Otro') {
          $_SESSION['message'] = '<div class="alert alert-success" role="alert">SU NEGOCIO HA SIDO AGREGADO CORRECTAMENTE</div>';
          header("Refresh:1; url=../otro.php");
        }
      }
    }
?>