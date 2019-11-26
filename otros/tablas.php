<?php 

	$conexion=mysqli_connect('localhost','root','','carros');

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tabla de posiciones</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
	<header>
		<div class="banner">
		    <video autoplay muted loop>
			    <source src="video.mp4" type="video/mp4">
		    </video>

		    <div class="contenido">
	            <h1>TABLA DE POSICIONES</h1>
			    <P>Esta son las posiciones de la carrera</P>
		    </div> 

	    </div>
	</header>

	<div id="carga" ></div>		


	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		setInterval(
			function(){
				$('#carga').load('posiciones.php');
			},100
			);
	});
</script>