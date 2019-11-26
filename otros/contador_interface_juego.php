<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>A Jugar!</title>
</head>
<body>
    
<div class="containerConteoVehiculos">

    <form action="" name="formularioConteoVehiculos" class="formularioConteoVehiculos">
        
        Ingrese la cantidad de jugadores <br>
        <input type="text" name="cantidadVehiculos" id="cantidadVehiculos">
        <br>
        <input type="radio" value="4" name=cantidadJuego>4
        <input type="radio" value="6" name=cantidadJuego>6
        <br>
        <input type="radio" value="8" name=cantidadJuego>8
        <input type="radio" value="10" name=cantidadJuego>10
        <br>
        <input type="submit" value="Cargar juego">

    </form>

</div>


    <?php

        @$cantidad = $_REQUEST['cantidadVehiculos'];

        if ( $cantidad > 10 ) {
            echo '<script type="text/javascript">
                alert("El número maximo de jugadores es 10");
            </script>';
        } if ( $cantidad <=0 ){
            echo '<script type = "text/javascript"> alert(" ';
        }
    ?>


    <script type="text/javascript" src="../JS/interface_juego.js"></script>
</body>
</html>