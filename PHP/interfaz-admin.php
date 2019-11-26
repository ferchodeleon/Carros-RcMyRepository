<!--Validacion de inicio de sesion-->

<?php session_start();
if (isset($_SESSION['usuario'])) {
    include 'conexion.php';
    $usuario = $_SESSION['usuario']; //se traslada la variable del usuario
    $usuarioname = htmlspecialchars($usuario);// se convierte la cadena de php en html
}else{
    header('Location: ../index.php');// en caso de existir inicio de sesion redirige a index.php
}
?>

<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <title>Example Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/stilesadmin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Boostrap CSS files-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!--Animate Style-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <style>

    </style>
</head>

<body>
    <main>
        <?php
            if(isset($_REQUEST['agregar']) && isset($_REQUEST['nombre'])){
                $agregar = $_REQUEST['agregar'];
                $nombre = $_REQUEST['nombre'];
                if($agregar == 'no'){
                echo "<div class=\"alert alert-danger alert-dismissible fade in\">"."Error al crear la carrera " .$nombre. "</div>";
                }
            }
            
            if(isset($_REQUEST['jugadores']) && isset($_REQUEST['nombre'])){
                $jugadores = $_REQUEST['jugadores'];
                $nombre = $_REQUEST['nombre'];
                if($jugadores == 'no'){
                echo "<div class=\"alert alert-danger alert-dismissible fade in\">"."Error al crear la carrera " .$nombre. " El numero de competidores no debe ser superior a 10</div>";
                }
            }
        
        ?>
        <!-------------------------------------------------------->
        <!--                Contenido de interfaz admin         -->
        <!-------------------------------------------------------->
        <section class="interfazprincipal">
            <div class="interfazprincipal-oscuro">
                <div class="contenido-principal">
                   <div class="btn-cerrar">
                       <button class="btn btn-danger animated bounceInUp"><a href="cerrar-sesion.php">Cerrar Session</a></button>
                   </div>
                    <div class="bienvenido">
                        <h2 class="animated bounceInLeft">Bienvenido!</h2>
                    </div>
                    <div class="datos-usuarios">
                        <h2 class="animated bounceInDown"><?php echo $usuarioname; ?></h2>
                    </div>
                    <div class="btniniciar">
                        <button class="iniciar animated bounceInUp">Iniciar Carrera</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="modal-participantes">
            <div class="contenedor">
                <div class="contenedor-form">
                    <form action="" method="get">
                        <div class="inputfield-nombre">
                            <input id="nom-car" class="nom-car" type="text" name="nom-car" required>
                            <label for="nom-car">Nombre de la carrera</label>
                        </div>
                        <br><br>
                        <div class="inputfield-lugar">
                            <input id="lugar" class="lugar" type="text" name="lugar" required>
                            <label for="lugar">Lugar de la carrera</label>
                        </div>
                        <br><br>
                        <div class="inputfield-fecha">
                            <input id="fecha" class="fecha" type="date" name="fecha" required>
                            <label for="fecha">Fecha de la carrera</label>
                        </div>
                        <br><br>
                        <div class="inputfield-part">
                            <input id="participantes" type="number" class="participantes" name="participantes" required>
                            <label for="participantes">Escoja el numero de participantes</label>
                        </div>
                        <br><br>
                        <div class="inputfield-vuelta">
                            <input id="vuelta" class="vuelta" type="number" name="vuelta" required>
                            <label for="vuelta">Numero de vueltas</label>
                        </div>
                        <br><br><br>
                        <button class="btn-check"><i class="fa fa-check"></i></button>
                    </form>
                    <button class="btn-x"><strong>x</strong></button>
                </div>
            </div>
        </section>

        <!--Php para agregar a la base de datos la informacion de la carrera-->

        <?php
            if(isset($_REQUEST["nom-car"]) && isset($_REQUEST["lugar"]) && isset($_REQUEST["fecha"]) && isset($_REQUEST["participantes"]) && isset($_REQUEST["vuelta"])){
                
                $nombre = $_REQUEST["nom-car"];
                $lugar = $_REQUEST["lugar"];
                $fecha = $_REQUEST["fecha"];
                $part = $_REQUEST["participantes"];
                $vuelta = $_REQUEST["vuelta"];
                
                if($part > 10){
                    header('Location: interfaz-admin.php?jugadores=no&nombre='.$nombre);
                }else{
                
                    $insertar = "INSERT INTO `carrera`(`nombre_carrera`, `ubicacion`, `fecha`, `num_vueltas`) VALUES    ('$nombre','$lugar',$fecha,$vuelta);";
    
    
                    if ($conexion->query($insertar) == true) {
                        header('Location: iniciarcarrera.php?participantes='.$part);
                    } else {
                        echo "Error: " . $insertar . "<br>" . $conexion->error;
                        header('Location: interfaz-admin.php?agregar=no&nombre='.$nombre);
                    }
                }
            }

        ?>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.iniciar').on('click', function() {
                $('.modal-participantes').toggleClass('modal-participantes-activo');
            });

            $('.btn-x').on('click', function() {
                $('.modal-participantes').removeClass('modal-participantes-activo');
            });
        });

    </script>
</body>

</html>
