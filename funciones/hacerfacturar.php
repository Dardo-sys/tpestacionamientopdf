<?php

include 'accesoadatos.php';

$precio=10;
$patente2 = $_GET['patente'];
$bandera=0;


$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
      $consulta =$objetoAccesoDato->RetornarConsulta("select horaingreso  from registrovehiculo");
      $consulta->execute();     
      $datos= $consulta->fetchAll(PDO::FETCH_ASSOC);
//var_dump($objetoAccesoDato)
//die();
  foreach ($datos as $registrovehiculo) 
  {
    if ($registrovehiculo['patente'] == $patente2)
    {
      
        $bandera=1;

        date_default_timezone_set('America/Argentina/Buenos_Aires');

        $horaSalida = mktime();

        $tiempo = $horaSalida - $registrovehiculo['horaingreso'];

        $cobrar = ($tiempo / 60 /60) * $precio;
    

        $objetoFacturado = new stdClass();

        date_default_timezone_set('America/Argentina/Buenos_Aires');

        $objetoFacturado->Vehiculo = $patente2;
        $objetoFacturado->fechaEntrada = date("d-m-y H:i",$registrovehiculo['horaingreso']);
        $objetoFacturado->fechaSalida = date("d-m-y H:i",$horaSalida);
        $objetoFacturado->importe = $cobrar;
    
        

            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
            $select="INSERT INTO vehiculosfacturados(patente, horaingreso, horasalida, importe) VALUES ('$objetoFacturado->Vehiculo','$objetoFacturado->fechaEntrada','$objetoFacturado->fechaSalida','$objetoFacturado->importe')";
            $consulta =$objetoAccesoDato->RetornarConsulta($select);
            $consulta->execute();
       

            $id=$registrovehiculo['registrovehiculoID'];
            $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
            $select="DELETE FROM 'registrovehiculo' WHERE registrovehiculoID=$id";
            $consulta =$objetoAccesoDato->RetornarConsulta($select);
            $consulta->execute();



       
        header("Location:../paginas/pagar.php? &cobrar=".$cobrar."&ingreso=".$registrovehiculo['horaingreso']."&salida=".$horaSalida."&patente=".$patente2);
        exit();
      }
   }

   
 


if ($bandera==0)
{
  header("Location: ../paginas/nopatentenolocalizada.php");
  exit();
}

//fclose($archivo);

?>






