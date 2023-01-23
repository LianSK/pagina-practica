<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-black" >
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="/tiendasVarias/img/logo.png" alt="logo"></a>
    <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-3">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="/tiendasVarias/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/tiendasVarias/ingreso.php">Ingreso</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="contacto.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tiendas
          </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="tiendas_todas.php">Todas</a></li>
            <li><a class="dropdown-item " href="vestuario.php">Vestuario</a></li>
            <li><a class="dropdown-item " href="joyas.php">Joyas</a></li>
            <li><a class="dropdown-item " href="computacion.php">Computación</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item " href="otro.php">Otro...</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#contacto">Contacto</a>
        </li>
        <li class="nav-item ">
        <?php
          session_start();
           if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) { ?>
              <div class="alert alert-dark">
                  Bienvenido, <?php echo $_SESSION['user']; ?>
              </div>
          <?php } ?>
        
        </li>
      </ul>
      <li class="nav-item d-flex btn  ">
          <a class="nav-link " href="login.php"><img onclick="checkSession()" width="60" src="img/user.png" alt="user icon"></a>
        </li>
        
        <li class="nav-item d-flex ">
          <a class="nav-link" href="config/logout.php"><img onclick="log_out()" width="60" src="img/exit_icon.png" alt="logout icon"></a>
        </li>
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>

<script>
function checkSession(){
    <?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) { ?>
        alert("Ya estas logeado!");
    <?php } ?>
}
</script>
<script>
function log_out(){
    <?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) { ?>
        alert("Deslogeado de forma exitosa!");
    <?php } ?>
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>