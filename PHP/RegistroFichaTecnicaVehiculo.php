<html lang="en">
<head>
  <title>Carrera Autos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <style>
.form-control{
	width:500px;
	border-radius: 	100px;
}
body{

/*background: url(../IMG/IMAGEN2.jpg) no-repeat fixed center;*/
background-size: cover;
        -moz-background-size: cover;
        -webkit-background-size: cover;
        -o-background-size: cover;
}
.jumbotron{

	background-color:#000;
	color:#FFFF00;
	font-family: 'Bauhaus 93';
}
.table-bordered{
	
	color:#0FFF00;
	font-family: 'Centaur';
}
</style>
</head>
<body>
<center>
<div class="jumbotron">
<h1><strong>INGRESA EL REGISTRO DE TU CARRO RC</strong></h1>
</div>
</center>

<div class="container">
<img scr = "IMAGEN2.jpg">
<center>
<form action="" method=get>
	 <input type=text name=motor class="form-control" placeholder="motor"><br>
	 <input type=number name=chasis class="form-control" placeholder="chasis"><br>
	 <input type=number name=llantas class="form-control" placeholder="llantas"><br>
	 <input type=text name=cuadrante class="form-control" placeholder="cuadrante"><br>
	 <input type=text name=amortiguadores class="form-control" placeholder="amortiguadores"><br>
	 <input type=text name=alimentacion class="form-control" placeholder="alimentacion"><br>
	 <input type=text name=material class="form-control" placeholder="material"><br>
	 <input type=text name=distacia_entre_ejes class="form-control" placeholder="distancia_entre_ejes"><br>
	 <input type=text name=tijeras class="form-control" placeholder="tijeras"><br>
	<input type=text name=esc class="form-control" placeholder="esc"><br>
	<input type=text name=id_vehi class="form-control" placeholder="id_vehi"><br>
    <br>
    <button type="submit" value=enviar class="btn btn-success">Registrar</button>
</form>
</center>
</div>

<?php

	include 'conexion.php';
	
    @$motor=$_REQUEST['motor'];
	@$chasis=$_REQUEST['chasis'];
	@$llantas=$_REQUEST['llantas'];
	@$cuadrante=$_REQUEST['cuadrante'];
	@$amortiguadores=$_REQUEST['amortiguadores'];
	@$alimentacion=$_REQUEST['alimentacion'];
	@$material=$_REQUEST['material'];
	@$distacia_entre_ejes=$_REQUEST['distacia_entre_ejes'];
	@$tijeras=$_REQUEST['tijeras'];
	@$esc=$_REQUEST['esc'];
	@$id_vehi=$_REQUEST['id_modi'];
	@$id_vehi=$_REQUEST['id_vehi'];

	


	$conn = new Mysqli("localhost", "root", "", "db_carros") or die (Mysqli_error($conn));
	$sentencia=" INSERT INTO ficha_tecnica (motor,chasis,
											llantas,
											cuadrante,
											amortiguadores,
											alimentacion,
											material,
											distacia_entre_ejes,
											tijeras,esc,
											id_vehi) 
				VALUES ('$motor', '$chasis','$llantas', '$cuadrante', '$amortiguadores', 
	'$alimentacion', '$material', '$distacia_entre_ejes', '$tijeras', '$esc','$id_vehi')";
		if ($motor){
			Mysqli_query($conn, $sentencia) or die (Mysqli_error($conn));
			
			?>
	<center><div class="alert alert-success">
	<strong>Perfecto...</strong> Tu registro se ha realizado</div>
	</center>
	
	<?php } ?>
		


<div class="jumbotron">
<table class="table table-bordered">
<tr><th>motor</th><th>chasis</th><th>llantas</th><th>cuadrante</th><th>amortiguadores</th><th>alimentacion</th>
<th>material</th><th>distancia_entre_ejes</th><th>tijeras</th><th>esc</th><th>id_vehi</th></tr>

<?php	
	$sentencia="select * from ficha_tecnica";
	
	$resul = Mysqli_query($conn, $sentencia) or die (Mysqli_error());
	
	while($fila=Mysqli_fetch_array($resul)){
		
		echo "<tr>";
		echo "<td>".$fila['motor']."</td>";
		echo "<td>".$fila['chasis']."</td>";
		echo "<td>".$fila['llantas']."</td>";
		echo "<td>".$fila['cuadrante']."</td>";
		echo "<td>".$fila['amortiguadores']."</td>";
		echo "<td>".$fila['alimentacion']."</td>";
		echo "<td>".$fila['material']."</td>";
		echo "<td>".$fila['distacia_entre_ejes']."</td>";
		echo "<td>".$fila['tijeras']."</td>";
		echo "<td>".$fila['esc']."</td>";
		echo "<td>".$fila['id_vehi']."</td>";
		echo "</tr>";
		
	}
	
?>
</table>
</div>
</body>
</html>