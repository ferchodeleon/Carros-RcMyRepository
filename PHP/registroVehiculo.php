<html lang="en">
<head>
  <title>Registro de Vehículo</title>
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
<h1><strong>INGRESA LOS DATOS DEL VEHÍCULO</strong></h1>
</div>
</center>

<div class="container">
<img scr = "IMAGEN2.jpg">
<center>
<form action="" method=GET>
    <span>MARCA</span>
    <input type=text name=marca class="form-control" placeholder="MARCA" required ><br>
    <span>TIPO DE VEHICULO</span>
    <select type="text" name="tipo_vehi" class="form-control" required >
        <option value="Pequeño">Pequeño</option>
        <option value="Mediano">Mediano</option>
        <option value="Grande">Grande</option>
    </select>
    <span>TIPO ESCALA</span>
    <select type="text" name="tipo_escala" class="form-control" >
        <option></option>
    </select>
    <input type=number name=tipo_escala class="form-control" placeholder="llantas" required ><br>
    <span>TIPO DE CATEGORIA</span>
    <input type=text name=categoria class="form-control" placeholder="cuadrante" required ><br>
    <span>CEDULA</span>
	<input type=text name=ced class="form-control" placeholder="amortiguadores" required ><br>
    <br>
    <button type="submit" value=enviar class="btn btn-success">Registrar</button>
</form>
</center>
</div>

<?php

	include 'conexion.php';
	
    //Variables neutrales
    @$marca=$_REQUEST['marca'];
	@$tipo_vehi=$_REQUEST['tipo_vehi'];
    @$tipo_escala=$_REQUEST['tipo_escala'];
    @$categoria=$_REQUEST['categoria'];
    @$ced=$_REQUEST['ced'];
    
    //Variables de selectores
    @$id_vehi;
    @$id_escala;
    @$id_cate;



	$conn = new Mysqli("localhost", "root", "", "db_carros") or die (Mysqli_error($conn));
	@$sentencia=" INSERT INTO ficha_tecnica (id_vehi,
											marca,
											tipo_vehi,
											id_escala,
											id_cate,
											ced) 
                VALUES ('$id_vehi', '$marca','$tipo_vehi', '$id_escala', '$id_cate', '$ced')";
                
		if ($id_vehi){

            if ( $tipo_escala == '1/8' ) {
                $id_escala = '200';
            }else if ( $tipo_escala == '1/4' ) {
                $id_escala = '201';
            }else if ( $tipo_escala == '1/6' ) {
                $id_escala = '202';
            }else if ( $tipo_escala == '1/32' ) {
                $id_escala = '203';
            }

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