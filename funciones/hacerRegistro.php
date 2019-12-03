<?php
include 'accesoadatos.php';
$miObjeto = new stdClass();
$miObjeto->nombre = $_GET['nombre'];
$miObjeto->contraseña = $_GET['contraseña'];
$miObjeto->contraseña = $_GET['contraseña'];




$objetoAccesoDato= AccesoDatos::dameUnObjetoAcceso();
$consulta =$objetoAccesoDato->RetornarConsulta("select nombre from usuario");
$consulta->execute();
$datos=$consulta->fetchall(PDO::FETCH_ASSOC);
//var_dump($datos[0]['nombre']);
var_dump($datos);

foreach ($datos as $usuario) 
	{

	if($usuario["nombre"]==$miObjeto->nombre)
		{
			header("Location:../paginas/usuarioexistente.php");
			exit();
		}
	}


if(isset($datos[0]['nombre']))
	{
	$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
	$select="INSERT INTO usuario( nombre, clave) VALUES ('$miObjeto->nombre','$miObjeto->contraseña')";
	$consulta =$objetoAccesoDato->RetornarConsulta($select);
	$consulta->execute();
}

header("Location: ../paginas/ok.php");
	
?>