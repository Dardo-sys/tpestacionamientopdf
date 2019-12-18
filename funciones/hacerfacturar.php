


<?php
  include 'accesoadatos.php';
  $precioFraccion = 100;  
  $contadorFraccion = 0;
  $borrar = false;
  $flagNoExiste = 1;
  
  date_default_timezone_set('America/Argentina/Buenos_Aires');
  $horaSalida = mktime(); 
  $checkPatente = $_GET['patente'];
  if (empty($checkPatente)) 
  {
    header("Location: ../paginas/cargarvehiculo.php?error=campovacio");
    exit();
  }
  else
  {
    $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
        $consulta =$objetoAccesoDato->RetornarConsulta("select patente, horaingreso from registrovehiculo");
        $consulta->execute();     
        $datos= $consulta->fetchAll(PDO::FETCH_ASSOC);
        var_dump($datos);
        die();
        foreach ($datos as $registrovehiculo) 
        {
      if ($registrovehiculo['patente'] == $checkPatente) 
      { 
        $flagNoExiste = 0;
        $borrar = true;
        $informarHora = $vehiculo['horaingreso'];
        //$horaSalida = strtotime($horaSalida);
        $diffSegundos = $horaSalida - $vehiculo['horaingreso'];
        $diffAlternativo = $diffSegundos;
        while ($diffAlternativo >= 3600) 
        {     
          if ($diffAlternativo >= 3600) 
          {
            $contadorFraccion++;
            $diffAlternativo = $diffAlternativo - 3600;
            
          }
          else if ($diffAlternativo >= 1800)
          {
            $contadorFraccion++;
          }         
        }
        $resultado = $contadorFraccion * $precioFraccion;
      }
    }
    if ($flagNoExiste == 1) 
    {
      header("Location: ../paginas/cargarvehiculo.php?error=noexiste");
      exit();
    }
    else if ($flagNoExiste == 0)
    {
      
      // Inserte el vahiculo borrado en la tabla de historicos
      $insert = "INSERT INTO vehiculosfacturados (patente, horaingreso, horasalida, importe) VALUES ('$checkPatente','$informarHora','$horaSalida','$resultado')";    
      $insertar =$objetoAccesoDato->RetornarConsulta($insert);
      $insertar->execute();
      // Borramos el vehiculo facturado de la tabla de estacionados
      $select = "DELETE FROM registrovehiculo WHERE patente = '$checkPatente'";
      // var_dump($select);
      // die();
      $borrar = $objetoAccesoDato->RetornarConsulta($select);
      $borrar->execute();       
      header("Location: ../paginas/pagar.php?cobrar=".$resultado."&ingreso=".$vehiculo['horaingreso']."&salida=".$horaSalida."&estadia=".$contadorFraccion."&patente=".$checkPatente);
    }       
  }
?>



