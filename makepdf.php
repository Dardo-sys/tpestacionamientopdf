<?php
require_once __DIR__ . '/vendor/autoload.php';
//require_once __DIR__ . '/composer/autoload_real.php';


 

  include '/funciones/accesoadatos.php';

  



  $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
  $consulta =$objetoAccesoDato->RetornarConsulta("select patente  , horaingreso, horasalida,importe  from vehiculosfacturados");
  $consulta->execute();     
  $datos= $consulta->fetchAll(PDO::FETCH_ASSOC);

    

 
    
  

//variables
   		$patente = $_GET["patente"];
          $cobrar = $_GET['importe'];
          $ingreso = $_GET['horaingreso'];
          $salida = $_GET['horasalida'];

//instancia pdf
  $mpdf = new \Mpdf\Mpdf();


//crear pdf
$data = '';

$data .='<h1>Su Ticket</h1>';

//agregar data
$data .= '<strong>Vehiculo:</strong>' . $patente .'<br>';
$data .= '<strong>Hora de ingreso:</strong>' . date("d-m-y H:i",$ingreso) .'<br>';
$data .= '<strong>Hora de salida:</strong>' . date("d-m-y H:i",$salida) .'<br>';
$data .= '<strong>Cobrar:</strong> $' . $cobrar .'<br>';

//escribir pdf
$mpdf->WriteHTML($data);

//salida a navegador
$mpdf->Output('TicketParking.pdf', 'D');
?>