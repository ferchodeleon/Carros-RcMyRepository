<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="../CSS/style.css">
</head>
<body id="body">
	
	<div class="container">
		<div class="hijo">
			<form action="enviar.php" method="POST" class="form-registro" enctype="multipart/form-data">
				<h1 class="titu">Formulario Registro</h1>
				<div class="contenedor">
					
					<h3>Cedula</h3>
					<input type="number" name="cedula" placeholder="CEDULA" required class="input-70">
					<h3>Nombres</h3>
					<input type="text" name="nombre" placeholder="NOMBRES" required class="input-70">
					<h3>Apellidos</h3> 
					<input type="text" name="apellido" placeholder="APELLIDOS" required class="input-70"><br>
					<h3>Email</h3> <input type="email" name="correo" placeholder="EMAIL" required class="input-70">
					<h3>Dirección</h3>
					<input type="text" name="direccion" placeholder="DIRECCION" required class="input-70">
					<h3>Telefono</h3>
					<input type="number" name="telefono" placeholder="TELEFONO" required class="input-70">
					<h3 class="separador">Tipo de documento</h3>
					<select type="text" name="tipo" class="separador input-50">
						<option>C.C</option>
						<option>T.I</option>
						<option>C.E</option>
						<option>P.P</option>
					</select>
					<h3>Cargue de archivo</h3>
					<input type=file size=60 name="imagen" class="input-60" />
					<h3>Usuario</h3>
					<input type="text" name="user" placeholder="USUARIO" required class="input-70">
					<h3>Contraseña</h3>
					<input type="password" name="pass" placeholder="CONTRASEÑA" required class="input-60">
					<input class="input-100 boton" type="submit" name="REGISTRAR" value="INGRESAR">
				</div>
			</form>
		</div>
	</div>
</body>
</html>