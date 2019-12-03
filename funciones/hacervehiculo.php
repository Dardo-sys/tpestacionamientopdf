<?php
include 'accesoadatos.php';

 $miObjeto2 = new stdClass();
 $miObjeto2->patente = $_GET['patente'];
 date_default_timezone_set('America/Argentina/Buenos_Aires');
 $hora=mktime();
 $hora2=date("d-m-y H:i",$hora);

 $miObjeto2->patente = $_GET['patente'];
 $miObjeto2->horaIngreso = $hora;
 $miObjeto2->horaIngreso2 = $hora2;


$objetoAccesoDato= AccesoDatos::dameUnObjetoAcceso();
$consulta =$objetoAccesoDato->RetornarConsulta("select patente from registrovehiculo");
$consulta->execute();
$datos=$consulta->fetchall(PDO::FETCH_ASSOC);
//var_dump($datos[0]['nombre']);
//var_dump($datos);

foreach ($datos as $registrovehiculo) 
	{
		if($registrovehiculo["patente"]==$miObjeto2->patente)
		{
			header("Location:../paginas/patenteexistente.php");
			exit();
		}
	}


$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
$select="INSERT INTO registrovehiculo ( patente, horaingreso, horaingreso2) VALUES ('$miObjeto2->patente','$miObjeto2->horaIngreso','$miObjeto2->horaIngreso2')";
$consulta =$objetoAccesoDato->RetornarConsulta($select);
$consulta->execute();

header("Location: ../paginas/okregistrovehiculo.php");
?>