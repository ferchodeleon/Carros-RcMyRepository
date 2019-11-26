<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    


    <?php

        $servidor = 'localhost';
        $db = 'db_carros';
        $usuario = 'root';
        $contrasena = '';

        $id_prueba = '100';
        $nombre_carrera = 'prueba2';
        $ubicacion = 'San buenvantura';
        $fecha = 'NOW()';
        $numero_vueltas = 2;
        $numero_competidores = 2;

        $conexion = new Mysqli( $servidor, $usuario, $contrasena, $db );
        $insertar = "INSERT INTO carrera ( nombre_carrera, ubicacion, fecha, numero_vueltas, numero_competidores) 
        VALUES ( '$nombre_carrera', '$ubicacion', $fecha, $numero_vueltas, $numero_competidores)";

        Mysqli_query( $conexion, $insertar) or die (Mysqli_error());
        echo "<br> Se inserto correctamente ", Mysqli_query($conexion, $fecha);
    ?>

</body>
</html>