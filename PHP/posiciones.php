<?php 

	$conexion=mysqli_connect('localhost','root','','carros');

 ?>

<div class="row">
	<div class="col-sm-12">
		<h1 style="text-align: center;">Tabla de posiciones Tiempo real</h1>
		<table class="table table-hover table-condensed table-bordered">
		<tr style="background: rgba(147,206,222,1); color: white;">
			<td>id</td>
			<td>Carrera</td>
			<td>Propietario</td>
			<td>Marca Carro</td>
			<td>Numero vueltas carrera</td>	
			<td>Numero vueltas recorridas</td>	
			<td>Tiempo</td>	

		</tr>

		<?php 
		$sql="SELECT id_carrera,nombre_carrera,nompre_pro, marca, numero_de_vueltas,num_vuelta_reco,tiempo_vuelta from carrera inner join vueltas on vueltas.id_vueltas = carrera.id_vueltas inner join vehiculo on carrera.id_vehi = vehiculo.id_vehi inner join propietario on propietario.ced = vehiculo.ced ORDER BY num_vuelta_reco DESC , tiempo_vuelta ASC";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['id_carrera'] ?></td>
			<td><?php echo $mostrar['nombre_carrera'] ?></td>
			<td><?php echo $mostrar['nompre_pro'] ?></td>
			<td><?php echo $mostrar['marca'] ?></td>
			<td><?php echo $mostrar['numero_de_vueltas'] ?></td>
			<td><?php echo $mostrar['num_vuelta_reco'] ?></td>
			<td><?php echo $mostrar['tiempo_vuelta'] ?></td>
		</tr>
	<?php 
	}
	 ?>
</table>
	</div>
</div>