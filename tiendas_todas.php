<?php include ('cabecera.php'); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tiendas Todas</title>
  <link rel="stylesheet" href="tiendasVarias/css/style.css">

</head>
<body class="">
<div class="container mt-5 mb-5">
  <h1 class="text-center mt-5 mb-5">Tiendas de todo tipo</h1>
    <table class="border shadow-lg table table-hover">
    <?php 

if (isset($_SESSION['message'])) {
                echo $_SESSION['message'];
                unset($_SESSION['message']);
               } ?>
      <thead>
        <tr class="rounded-3">
        <th scope="col">Logo</th>
        <th scope="col">Descripción</th>
        <!-- <th scope="col">Rating</th> -->
        </tr>
      </thead>
      <tbody>
      <?php
        include('config/conexion.php');
        $query = "SELECT * FROM tiendas";
        $resultado = $conn->query($query);   
        while ($row = $resultado->fetch_assoc()) {
      ?>
      <tr>
    <div class="row g-0 bg-body-secondary position-relative">
      <td>
      <a href="<?php echo $row['links'] ?>">
      <img class="rounded" width="300" src="data:image/jpg;base64,<?php echo base64_encode($row['image']);?>" alt="logo tienda"></a>
      </td>
      <td><p class="mt-0"><?php echo $row ['text']?></p>
      <a class="btn btn-dark" href="<?php echo $row['links'] ?>"><?php echo $row['links'] ?></a>
      </td>
      <td>

      </td>
      </tr>
    </tbody>
    <?php } ?>
        </table>
  </div>
</body>
</html>
<?php include 'footer.php'; ?>
