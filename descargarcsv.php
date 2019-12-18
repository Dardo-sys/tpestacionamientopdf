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
$consulta =$objetoAccesoDato->RetornarConsulta("select patente,horaingreso,horasalida,importe from registrovehiculo");
$consulta->execute();     
$datos= $consulta->fetchAll(PDO::FETCH_ASSOC);
foreach ($datos as $vehiculo) {
	$array = array(	$vehiculo['patente'],date("d-m-y H:i",$vehiculo['horaingreso']),	date("d-m-y H:i",$vehiculo['horasalida']),$vehiculo['importe']);
	fputcsv($output, $array,';');
}
// $mysqli = new mysqli('localhost', 'root', '', 'estacionamiento');
// $mysqli->set_charset("utf8");
// $res = $mysqli->query("SELECT patente,horaIngreso,horaEgreso,montoFacturado FROM table");
// while($f = $res->mysqli_fetch_array()) fputcsv($output, $row);