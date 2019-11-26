
<!--Este archivo es para que el usuario escoja el rol que tiene en una carrera, si escoje que es un competidor lo llevara a la interfaz del competidor, en caso de que escoa administrador lo llevara a la pantalla para iniciar la carrera-->

<!DOCTYPE html>
<html lang="">

<?php session_start();
if (isset($_SESSION['usuario'])) {
	$usuario = $_SESSION['usuario']; //se traslada la variable del usuario
    $usuarioname = htmlspecialchars($usuario);// se convierte la cadena de php en html
}else{
    header('Location: ../index.php');// en caso de existir inicio de sesion redirige a index.php
}
?>

<head>
    <meta charset="utf-8">
    <title>Rol</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Boostrap Style-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!--  Font Awsome CSS  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

    <style>
        * {
            margin: 0px;
            padding: 0px;
            overflow: hidden;
        }
        
        .container h2{
            text-align: right;
            margin-top: -20px;
            margin-right: 10px;
        }
        
        .container .icon{
            font-size: 20px;
            margin-top: 20px;
            padding: 20px;
            border: 1px solid green;
            border-radius: 50%;
        }
        
        .container .link:hover {
            color: green;
        }

        .rol {
            width: 40%;
            margin: 10% 30px 30px 30px;
            -webkit-box-shadow: 0px 0px 31px 0px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 0px 0px 31px 0px rgba(0, 0, 0, 0.75);
            box-shadow: 0px 0px 31px 0px rgba(0, 0, 0, 0.75);
            border-radius: 25px;
        }
        
        .contenedorrol:hover i{
            transform: rotate(360deg);
        }


        a {
            color: black;
            text-decoration: none;
        }

        a:hover {
            color: black;
            text-decoration: none;
        }

        .contenedorrol {
            padding: 50px;
            width: auto;
            height: auto;
        }

        .contenedorrol i {
            font-size: 50px;
            padding: 10px;
            margin-left: 40%;
            margin-bottom: 10%;
            border-radius: 50%;
            border: 2px solid black;
            transition: all 0.5s;
        }

        .contenedorrol h3 {
            font-size: 30px;
            text-align: center;
        }

    </style>
</head>

<body>
   <header>
       <div class="contenedorheader">
           <div class="container">
              <a href="cerrar-sesion.php" class="link"><i class="icon fa fa-arrow-left"></i></a>
               <h2><?php echo $usuarioname ?></h2>
           </div>
       </div>
   </header>
    <main>
        <div class="row">
            <div class="container">
                <div class="col-md-6 col-xs-12 rol">
                    <a href="interfaz-principal.php">
                        <div class="contenedorrol">
                            <i class="fas fa-user-astronaut"></i>
                            <h3>Competidor</h3>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-xs-12 rol">
                    <a href="interfaz-admin.php">
                        <div class="contenedorrol">
                            <i class="fas fa-flag-checkered"></i>
                            <h3>Administrador</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>

</html>
