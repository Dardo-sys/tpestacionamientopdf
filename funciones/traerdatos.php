<?php
include 'accesoadatos.php';
	session_start();
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select nombre  , clave  from usuario");
			$consulta->execute();			
			$datos= $consulta->fetchAll(PDO::FETCH_ASSOC);		
			//var_dump($datos);
			foreach ($datos as $usuario) 
			{
				//var_dump($usuario);
				echo ($usuario["nombre"]);
				echo "<br>";
				echo($usuario["clave"]);
				echo "<br>";
			}
	
?>