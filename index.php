<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body class="bg-custom">
<?php 
  include 'cabecera.php';   

?>
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <a href="https://www.nike.cl/">
        <img src="/tiendasVarias/img/nike.png" class="img-fluid w-100" style="height:750px" alt="publicidad nike">
        </a>
      <div class="carousel-caption d-none d-md-block">
        <a href="https://www.nike.com/w/mens-workout-essentials-8e0y5znik1">
          <button type="button" class="btn btn-dark">Shop Men</button>
        </a>
       <a href="https://www.nike.com/w/womens-workout-essentials-5e1x6z8e0y5">
        <button type="button" class="btn btn-dark">Shop Women</button></a>
        <p><i>Explora los esenciales fitness de la temporada, <br> 
        que te ayudarán a moverte en el '23 .</i> </p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="20000">
      <a href="https://theline.cl/">
        <img src="/tiendasVarias/img/theline.jpg" class="img-fluid w-100" style="height:750px" alt="publicidad theline">
    </a>
      <div class="carousel-caption d-none d-md-block">
        <h6><i>El estilo es la ropa de tu personalidad</i> </h6>
        <a href="https://theline.cl/">
          <button type="button" class="btn btn-dark">Ir a TheLine</button>
        </a>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="20000">
      <a href="https://cl.puma.com/">
        <img src="/tiendasVarias/img/puma.jpg" class="img-fluid w-100" style="height:750px" alt="publicidad puma"></a>
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<?php include 'footer.php'; ?>
</body>
</html>