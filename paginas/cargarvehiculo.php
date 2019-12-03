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

      <style>
body {
  background-image: url('../parking.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: 100% 100%;
}

</style>


  <body>

    <header>
    <?php
        include "../componentes/menu.php";
    ?>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">
         
     <div align="center"><img src="https://www.logolynx.com/images/logolynx/c9/c9989cc7daae338fd7d353c35b9442fa.png" width=100 height=100></div><br>

      <form class="form-signin" action="../funciones/hacervehiculo.php">

       <h1 class="h3 mb-3 font-weight-normal">Ingrese la patente</h1>
        <label for="inputEmail" class="sr-only">Patente</label>
        <input type="text" id="patente"  name="patente"class="form-control" pattern="([A-ZÑ]{3}\d{3}|[A-ZÑ]{2}\d{3}[A-ZÑ]{2})$"placeholder="Formato Admitido: AAA111 o AA111AA" required autofocus>
        <!--<button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>-->
<button class="image" type="submit"><img src="http://mobile.terra.com/sc/mx/enelring/_imgwy_/5b22f96384e4e84723ebecd90f18fe55/?i=http%3a%2f%2fcms.mobile.terra.com%2fCMSSiteCreator%2fimagesite%2fenelring%2fbtnAceptar.jpg" width="373" height="60"></button>

                              
      </form>
                            

    </main>
      
     <footer class="footer">
    <?php
        include "../componentes/pie.php";
    ?>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" cAlumnorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
