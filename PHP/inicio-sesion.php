
<!--Validacion de inicio de sesion-->

<?php session_start();
if (isset($_SESSION['usaurio'])) {
	header('Location: index.php');// en caso de existir inicio de sesion redirige a index.php
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Login</title>
</head>

<body id="">
    <h1 class="titu">CARRERAS RC <br> <br> INGRESAR</h1>
    <div class="container">
        <form action="" method="POST" class="form-login" enctype="multipart/form-data">

            <h3>Usuario</h3>
            <input type="text" name="usuario" placeholder="USUARIO" required class="input-80">

            <h3>Contraseña</h3>
            <input type="password" name="password" placeholder="CONTRASEÑA" required class="input-80">

            <input type="submit" class="input-48 boton" value="Ingresar">
            <a href="registro.php" class="input-48 boton">Registrar</a>

<?php

    include 'conexion.php';

    @$usuario = $_REQUEST['usuario'];
    @$password = $_REQUEST['password'];

    if ( !empty($usuario) && !empty($password) ){ // Si la variable no se encuentra sola realiza el siguiente codigo
        $consulta = mysqli_query($conexion, "SELECT * FROM propietario WHERE usuario = '{$usuario}'"); // Realizo primero la consulta
        mysqli_data_seek ($consulta, 0);
        $variable = mysqli_fetch_array($consulta); // Cargo el dato en un array
        if ( $variable['usuario'] == $usuario && $variable['pass'] == $password ) { // Comparo datos
            
            $_SESSION['usuario'] = $variable['usuario'];// se abre inicio de sesion, crea una variable con el nombre del usuario
           header('Location: ../index.php');// redirige a index.php
            
        } else {
            echo "<script languaje='javascrip'>alert ('Usuario o contraseña incorrectos');</script>"; // Impresión del alerta en caso que no exista
        }
    }else {
    }
?>
        </form>
    </div>
</body>

</html>
