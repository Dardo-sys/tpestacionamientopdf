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
    <!--<link href="../css/floating-labels.css" rel="stylesheet">-->

  </head>

        <style>
body {
  background-image: url('../parking.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: 100% 100%;
}
</style>


      <style>
   
    th 
    {
      color:white;
      background-color: DodgerBlue ;
    }
    td {color:black;}
    table,th,td 
    {
     border: 3px solid black;
    text-align: center;
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
         
    



      <table style="width:100%">

       <tr>
            <th>Vehículo</th>
            <th>Día y Hora de Ingreso</th>
            <th>Día y Hora de Salida</th>
            <th>Total Cobrado $</th>
          </tr>


      
<?php

  include '../funciones/accesoadatos.php';

  $cantidadAutos=0;
  $totalFacturado = 0;
  date_default_timezone_set('America/Argentina/Buenos_Aires');



  $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
  $consulta =$objetoAccesoDato->RetornarConsulta("select patente  , horaingreso, horasalida,importe  from vehiculosfacturados");
  $consulta->execute();     
  $datos= $consulta->fetchAll(PDO::FETCH_ASSOC);

    
    foreach ($datos as $vehiculosfacturados)
    {
     

      echo "<tr>";
        echo "<td>".$vehiculosfacturados['patente']."</td>   <td>".$vehiculosfacturados['horaingreso']."</td>   <td>".$vehiculosfacturados['horasalida']."</td>   <td>".$vehiculosfacturados['importe']."</td>";
        echo "</tr>";
        


        $totalFacturado = $totalFacturado + $vehiculosfacturados['importe'];
        $cantidadAutos = $cantidadAutos + 1;
        
      
    }
    echo "</table>";
 ;
    echo "<h5> TOTAL FACTURADO: $".$totalFacturado."</h5>";
    
  ?>
<a href="../paginas/exportdatacsv.php"><h4>Descargar CSV</h4></a>
    </main>
      
     <footer class="footer">
    <?php
       // include "../componentes/pie.php";
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
