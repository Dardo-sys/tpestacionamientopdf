
 <?php  
 include '../funciones/accesoadatos.php';
      //export.php  
 if(isset($_POST["export"]))  
 {  
      $connect = mysqli_connect("remotemysql.com", "RV6OjRGtny", "a7BUsFJ0gQ", "testing");  
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('patente', 'horaingreso', 'horasalida', 'importe'));  
      $query = "SELECT * from vehiculosfacturados ORDER BY id DESC";  
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 ?> 