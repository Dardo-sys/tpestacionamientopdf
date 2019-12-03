<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <title>Istic2019</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/sticky-footer-navbar.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/floating-labels.css" rel="stylesheet">

  </head>

  <body>

    <header>
    <?php
        include "../componentes/menu.php";
    ?>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">
         
        <?php
        if (isset($_SESSION['nombre']) && isset($_SESSION['contraseña'] ))
        {
        ?>
       <h1>TE REGISTRASTE CON EXITO!!</h1>
        <img src="https://image.shutterstock.com/image-vector/ok-vector-icon-flat-eco-260nw-606491039.jpg">
        <br>
        
         
          <h1>Ahora podes loguearte</h1>
          <a href="../paginas/login.php"><h2>login</h2></a>

        <?php
        }
        ?>

         <?php
        if (isset($_SESSION['patente']))
        {
        ?>
       <h1>Vehiculo ingresado con exito!!</h1>
        <img src="https://maestrofinanciero.com/wp-content/uploads/2012/07/exitosos.jpg">
        <br>

        <h1>volver al inicio</h1>  <a href="../index.php"><h2>inicio</h2></a>
        <h1>cargar nuevo vehiculo</h1>  <a href="../paginas/cargarvehiculo.php"><h2>cargar</h2></a>
        
         
          
        <?php
        }
        ?>

    </main>
      
    <footer class="footer">
    <?php
        //include "componentes/pie.php";
    ?>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" cAlumnorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
