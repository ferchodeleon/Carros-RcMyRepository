<html lang="en">
<head>
  <title>Registro de Vehículo Rapido</title>
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
<img scr = "../IMG/IMAGEN2.jpg">
<center>
<form action="" method=GET>
    <span>NOMBRE VEHÍCULO</span>
    <input type=text name=nombre_vehiculo class="form-control" placeholder="nombre Vehiculo" required ><br>

    <span>NOMBRE PROPIETARIO</span>
    <input type=text name=nombre_propietario class="form-control" placeholder="nombre Propietario" required ><br>

    <span>COLOR</span>
    <input type=text name=color class="form-control" placeholder="color" required ><br>

    <span>CEDULA</span>
	<input type=text name=cedula class="form-control" placeholder="cedula" required ><br>
    <br>
    <button type="submit" value=enviar class="btn btn-success">Registrar</button>
</form>
</center>
</div>

<?php

	include 'conexion.php';
	
    //Variables neutrales
    @$nombre_vehiculo = $_REQUEST['nombre_vehiculo'];
	@$nombre_propietario=$_REQUEST['nombre_propietario'];
    @$color=$_REQUEST['color'];
    @$cedula=$_REQUEST['cedula'];
    
    //Variables de selectores
    @$id_vehi;
    @$id_escala;
    @$id_cate;

	$conn = new Mysqli("localhost", "root", "", "db_carros") or die (Mysqli_error($conn));
	@$sentencia=" INSERT INTO regis_rapi_vehiculo ( nombre_vehiculo,
											        nombre_propietario,
											        color,
											        cedula) 
                VALUES ('$nombre_vehiculo', '$nombre_propietario','$color', $cedula)";

    Mysqli_query($conn, $sentencia) or die (Mysqli_error($conn));
?>

    <center><div class="alert alert-success">
	<strong>Perfecto...</strong> Tu registro se ha realizado</div>
	</center>

<div class="jumbotron">
<table class="table table-bordered">
<tr><th>Numero de registro</th>
<th>Nombre del vehículo</th>
<th>Nombre del propietario</th>
<th>Color del vehículo</th>
<th>Número de cedula</th></tr>

<?php	
	$sentencia="select * from regis_rapi_vehiculo";
	
	$resul = Mysqli_query($conn, $sentencia) or die (Mysqli_error());
	
	while($fila=Mysqli_fetch_array($resul)){
		
		echo "<tr>";
		echo "<td>".$fila['id_vehiculo']."</td>";
		echo "<td>".$fila['nombre_vehiculo']."</td>";
		echo "<td>".$fila['nombre_propietario']."</td>";
		echo "<td>".$fila['color']."</td>";
		echo "<td>".$fila['cedula']."</td>";
		echo "</tr>";
		
	}
	
?>
</table>
</div>
</body>
</html>