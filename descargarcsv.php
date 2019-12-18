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
    	<?php
include 'accesoadatos.php';
// output headers so that the file is downloaded rather than displayed
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=Tabla Historicos.csv');
// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');
// output the column headings
fputcsv($output, array('patente;horaingreso;horasalida;importe'));
$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
$consulta =$objetoAccesoDato->RetornarConsulta("select patente,horaingreso,horasalida,importe from vehiculosfacturados");
$consulta->execute();     
$datos= $consulta->fetchAll(PDO::FETCH_ASSOC);
foreach ($datos as $vehiculo) {
	$array = array(	$vehiculo['patente'],date("d-m-y H:i",$vehiculo['horaingreso']),	date("d-m-y H:i",$vehiculo['horasalida']),$vehiculo['importe']);
	fputcsv($output, $array,';');
}
?>
