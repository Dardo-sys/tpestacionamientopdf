<?php
//db connection
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'istic2019a');
?>

<html>
	<head>
		<title>Invoice generator</title>
	</head>
	<body>
		select patente:
		<form method='get' action='invoice-db.php'>
			<select name='patente'>
				<?php
					//show invoices list as options
					$query = mysqli_query($con,"select * from vehiculosfacturados");
					while($patente = mysqli_fetch_array($query)){
						echo "<option value='".$patente['patente']."'>".$patente['patente']."</option>";
					}
				?>
			</select>
			<input type='submit' value='Generate'>
		</form>
	</body>
</html>
