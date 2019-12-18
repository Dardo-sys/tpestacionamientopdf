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
    font-family:serif;
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
            <th>Vehiculo </th>
            <th>Fecha/Hora Ingreso</th>
            
          </tr>


<!--<form class="form-signin" action="../funciones/hacerBorradovehiculos.php">-->
<?php

  include '../funciones/accesoadatos.php';

  $cantidadAutos=0;
  $totalFacturado = 0;
  date_default_timezone_set('America/Argentina/Buenos_Aires');



  //$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
  $consulta =$objetoAccesoDato->RetornarConsulta("select patente  , horaingreso2  from registrovehiculo");
  $consulta->execute();     
  $datos= $consulta->fetchAll(PDO::FETCH_ASSOC);

  var_dump($consulta)
  //die();

    //$archivo = fopen("../archivos/facturados.txt", "r");
    //while(!feof($archivo)) 

    foreach ($datos as $registrovehiculo)
    {
      //$objeto = json_decode(fgets($archivo));
      //if ($objeto != "") 
      //{
        //echo "<tr>";
        //echo "<td>".$objeto->Vehiculo."</td>   <td>".$objeto->fechaEntrada."</td>   <td>".$objeto->fechaSalida."</td>   <td>".$objeto->importe."</td>";
        //echo "</tr>";

      echo "<tr>";
        echo "<td>".$registrovehiculo['patente']."</td>   <td>".$registrovehiculo['horaingreso2']."</td> ";

      //echo "<input type='submit' name='hacer'  value='".$registrovehiculo['id']."'>borrar</input><br>";
        


        
        $cantidadAutos = $cantidadAutos + 1;
       
      
    }
    echo "</table>";
 
    
    //fclose($archivo);
  ?>
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
