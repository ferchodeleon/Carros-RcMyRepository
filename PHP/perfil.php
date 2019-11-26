<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <title>Example Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Boostrap CSS files-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .background {
            width: 100%;
            height: 100vh;
            position: relative;
            background-image: url(../IMG/IMAGEN2.jpg);
            background-size: cover;
            background-position: center center;
        }

        .background-black {
            width: 100%;
            height: 100vh;
            position: relative;
            background-color: rgba(0, 0, 0, 0.8);
            background-position: center center;
            background-size: cover;
        }

        .btn-cerrar {
            position: absolute;
            margin: 25% 50%;

        }

        .btn-cerrar .btn {
            border-radius: 25px;
            background-color: transparent;
        }

        .btn-cerrar .btn a {
            color: #d9534f;
            text-decoration: none;
        }

        .btn-cerrar .btn:hover {
            background-color: #d9534f;
        }

        .btn-cerrar .btn:hover a {
            color: white;
        }

        .btnvolver {
            position: absolute;
            margin: 20% 50%;
        }

        .btnvolver button {
            font-size: 20px;
            padding: 5px;
            border: 1px solid #27ae60;
            background: transparent;
            width: 120px;
            border-radius: 25px;
        }
        
        .btnvolver button:hover{
            background: #27ae60;
        }

        .btnvolver button a {
            color: #27ae60;
            text-decoration: none;
        }

        .btnvolver button:hover a {
            color: white;
            text-decoration: none;
        }

    </style>
</head>

<body>
    <div class="background">
        <div class="background-black">
            <div class="btnvolver">
                <button><a href="interfaz-principal.php"><i class="fa fa-arrow-left"></i></a></button>
            </div>
            <div class="btn-cerrar">
                <button class="btn btn-danger animated bounceInUp"><a href="cerrar-sesion.php">Cerrar Session</a></button>
            </div>
        </div>
    </div>
    <script type="text/javascript" src=""></script>
</body>

</html>
