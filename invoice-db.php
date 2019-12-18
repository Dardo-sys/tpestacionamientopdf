<?php
require('fpdf17/fpdf.php');

//db connection
$con = mysqli_connect('remotemysql.com','RV6OjRGtny','a7BUsFJ0gQ');
mysqli_select_db($con,'RV6OjRGtny');

//get invoices data
$query = mysqli_query($con,"select * from vehiculosfacturados
	
	where
	patente = '".$_GET['patente']."'");
$data = mysqli_fetch_array($query);
//var_dump($data);

//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();

//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(130	,5,'Isti2019',0,0);
$pdf->Cell(59	,5,'Estacionamiento',0,1);//end of line

//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);

$pdf->Cell(130	,5,'[TPEstacionamiento]',0,0);
$pdf->Cell(59	,5,'',0,1);//end of line

$pdf->Cell(130	,5,'[Gracias por su Visita]',0,0);
$pdf->Cell(25	,5,'Patente',0,0);
$pdf->Cell(34	,5,$data['patente'],0,1);//end of line

$pdf->Cell(130	,5,'Celular [1167654684]',0,0);
$pdf->Cell(25	,5,'Fecha      Hora de Ingreso',0,10);
$pdf->Cell(34	,5,$data['horaingreso'],0,1);//end of line

$pdf->Cell(130	,5,'',0,0);
$pdf->Cell(25	,5,'Fecha      Hora de Salida',0,10);
$pdf->Cell(34	,5,$data['horasalida'],0,1);//end of line

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,10,'',0,1);//end of line







//Numbers are right-aligned so we give 'R' after new line parameter

//items
$query = mysqli_query($con,"select importe from vehiculosfacturados where patente = '".$data['patente']."'");


//display the items
while($vehiculosfacturados = mysqli_fetch_array($query)){
	$pdf->Cell(130	,5,'Monto a Facturar     $',1,0);
	//add thousand separator using number_format function
	$pdf->Cell(50	,5,$vehiculosfacturados['importe'],1,1);
	
	
	
}




$pdf->Output();
?>
