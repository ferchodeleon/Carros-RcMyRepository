<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>validación jugadores</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    
    <center>
        <div class="jumbotron">
            <h1><strong>Datos de los jugadores</strong></h1>
        </div>
    </center>

    <div class="container">
    <img scr = "/../IMG/IMAGEN2.jpg">
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

</body>
</html>