 <?php  
 $connect = mysqli_connect("remotemysql.com", "RV6OjRGtny", "a7BUsFJ0gQ");  
 $query ="SELECT * FROM vehiculosfacturados ORDER BY id desc";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Export Mysql Table Data to CSV file in PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:900px;">  
                <h2 align="center">Istic 2019</h2>  
                <h3 align="center">Datos Autos Estacionados</h3>                 
                <br />  
                <form method="post" action="export.php" align="center">  
                     <input type="submit" name="export" value="CSV Export" class="btn btn-success" />  
                </form>  
                <br />  
                <div class="table-responsive" id="employee_table">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="5%">Patente</th>  
                               <th width="25%">Hora Ingreso</th>  
                               <th width="35%">Hora Egreso</th>  
                               <th width="10%">Importe</th>  
                                 
                          </tr>  
                     <?php  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                          <tr>  
                               <td><?php echo $row["patente"]; ?></td>  
                               <td><?php echo $row["horaingreso"]; ?></td>  
                               <td><?php echo $row["horasalida"]; ?></td>  
                               <td><?php echo $row["importe"]; ?></td>  
                               
                          </tr>  
                     <?php       
                     }  
                     ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html> 