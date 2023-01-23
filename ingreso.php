<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Start-up</title>
</head>
<body class="bg-custom-color">
    
    <?php include 'cabecera.php';

    ?>
    <div class="container mt-5 mb-5">
    
<form id="form" class="border m-2 p-5 shadow-lg rounded-3" action="./config/insertar_datos.php" method="post" enctype="multipart/form-data">
<?php if (isset($_SESSION['message'])) {
                echo $_SESSION['message'];
                unset($_SESSION['message']);
               } ?>
    <fieldset>
        <legend class="text-center fs-1">Ingrese su negocio a la página web <h6 class="text-center">(debes de estar logeado)</h6></legend>
        
        <div class="mb-3">
            <label for="logo">Ingrese logo de su negocio:</label>
            <input class="form-control form-control-lg" type="file" name="foto" required><br>
        </div>

        <div class="mb-3">
            <label>Ingrese nombre de su negocio:</label>
            <input class="form-control" name="nombre_tienda" type="text" required placeholder="">
        </div>

        <div class="mb-3">
            <label for="text" class="form-label">Descripción:</label>
            <textarea class="form-control" name="text" placeholder="Ingrese una descripción de un máximo de 500 caracteres sobre su negocio..... 
Ten en cuenta esto: un espacio o signo de puntuación cuenta como un 'carácter'"
            required></textarea>
        </div>
        <div class="mb-3">
            <label>Ingrese link de su negocio:</label>
            <input class="form-control" name="links" type="text" required placeholder="Ingrese sólo un link de su sitio web o red social"><br>
        </div>
        <div>
            <select name="options" class="form-select" aria-label="Default select example">
                <option selected value="nulo">Seleccione categoría de su negocio</option>
                <option value="Vestuario">Vestuario</option>
                <option value="Joyas">Joyas</option>
                <option value="Computacion">Computacion</option>
                <option value="Otro">Otro</option>
            </select><br>
        </div>
        <div class="mb-3">
            <input class="btn btn-dark btn-lg" type="submit" value="Enviar" name="submit">
        </div>
    </fieldset>
</form> 
</div>
    <?php include 'footer.php'; ?>
</body>
</html>