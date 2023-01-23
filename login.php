<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/tiendasVarias/css/flow.css">
</head>
<body class="bg-custom-color">
    <?php include 'cabecera.php'; ?>
<section class="h-100">
  <div class="container py-5 h-100">
    <div class="mt-3">
      <div class="col-xl-12">
        <div class="card rounded-3 text-black">
        <?php
                    
                    if (isset($_SESSION['message'])) {
                        echo $_SESSION['message'];
                        unset($_SESSION['message']);
                    }?>
                    
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">
                <div class="text-center">
                  <img src="img/logo.png"
                    style="width: 250px;" alt="logo">
                  <h4 class="mt-3 mb-5 pb-1">Ingrese a su cuenta</h4>
                </div>

                <form action="config/log_in.php" method="post">
    
                  <div class="form-outline mb-4">
                    <input type="text" name="user" id="form2Example11" class="form-control" required/>
                    <label class="form-label" for="form2Example11">Username</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="pass" id="form2Example22" class="form-control" required/>
                    <label class="form-label" for="form2Example22">Password</label>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <input type="submit" class="btn btn-dark " name="btn_login" value="Ingresar"/> 
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">¿No tienes una cuenta?</p>
                    <a href="registro.php"><button type="button" class="btn btn-outline-dark">Create una!</button></a>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4"> <i>¡Bienvenido a nuestra página! Aquí podrás encontrar una amplia variedad de
           tiendas y emprendedores en diferentes categorías. Desde ropa hasta comida, 
           pasando por servicios y productos únicos. ¡Registra tu tienda o emprendimiento y
           comienza a llegar a nuevos clientes hoy mismo!"</i></h4>
                <p class="small mb-0"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include 'footer.php'; ?>
</body>
</html>