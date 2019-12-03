<?php
require_once __DIR__ . '../vendor/autoload.php';

//variables
  $patente = $_GET["patente"];
  $cobrar = $_GET['cobrar'];
  $ingreso = $_GET['ingreso'];
  $salida = $_GET['salida'];

//instancia pdf
  $mpdf = new \Mpdf\Mpdf();


//crear pdf
$data = '';

$data .='<h1>Su Ticket</h1>';

//agregar data
$data .= '<strong>Vehiculo:</strong>' .$patente.'<br>';
$data .= '<strong>Hora de ingreso:</strong>' .date("d-m-y H:i",$ingreso).'<br>';
$data .= '<strong>Hora de salida:</strong>' .date("d-m-y H:i",$salida).'<br>';
$data .= '<strong>Cobrar:</strong> $' .$cobrar.'<br>';

//escribir pdf
$mpdf->WriteHTML($data);

//salida a navegador
$mpdf->Output('TicketParking.pdf', 'D');
