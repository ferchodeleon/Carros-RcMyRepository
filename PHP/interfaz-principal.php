<!--Validacion de inicio de sesion-->

<?php session_start();
if (isset($_SESSION['usuario'])) {
    include 'conexion.php';
	$usuario = $_SESSION['usuario']; //se traslada la variable del usuario
    $usuarioname = htmlspecialchars($usuario);// se convierte la cadena de php en html
    
    $consulta_cc = mysqli_query($conexion, "SELECT `ced` FROM `propietario` WHERE `usuario` = '{$usuario}'");
    
    mysqli_data_seek ($consulta_cc, 0);
    $variable_cc = mysqli_fetch_array($consulta_cc);
    
    $consulta_modelo = mysqli_query($conexion, "SELECT `marca` FROM `vehiculo` WHERE `ced`  = '{$variable_cc['ced']}'");
    
    mysqli_data_seek ($consulta_modelo, 0);
    $variable_modelo = mysqli_fetch_array($consulta_modelo); // Cargo el dato en un array
}else{
    header('Location: ../index.php');// en caso de existir inicio de sesion redirige a index.php
}
?>
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <title>Carros RC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/styles-interfazppal.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <!-------------------------------------------------------->
        <!--                     Navegacion                     -->
        <!-------------------------------------------------------->
        <div class="navegacion">
            <nav role="navigation">
                <ul>
                    <li><a href="perfil.php" data-content="Edita tu perfil">Perfil</a></li>
                    <li><a href="registroVehiculo.php" data-content="Registra tu nuevo RC">Registro RC</a></li>
                    <li><a href="RegistroFichaTecnicaVehiculo.php" data-content="Actualizaras tu RC?">Actualización y <br>mantenimiento de RC</a></li>
                    <li><a href="posiciones.php" data-content="Mira tus estadisticas">Tiempos y <br> posiciones</a></li>
                </ul>
            </nav>
            <div class="atras">
                <span><i class="fa fa-chevron-left"></i></span>
            </div>
        </div>
        <!-------------------------------------------------------->
        <!--                   Fin  Navegacion                  -->
        <!-------------------------------------------------------->
    </header>
    <main>
        <!-------------------------------------------------------->
        <!--                Contenido de interfaz ppal          -->
        <!-------------------------------------------------------->
        <section class="interfazprincipal">
            <div class="interfazprincipal-oscuro">
                <div class="abrir-menu">
                    <span class="fa fa-arrow-right"></span>
                </div>
                <div class="contenido-principal">
                    <div class="bienvenido"></div>
                    <div class="datos-usuarios">
                        <img src="../IMG/perfil1.jpg" alt="">
                        <br><br>
                        <h2><?php echo $usuarioname?></h2>
                        <?php
                            if ( $variable_modelo['marca'] != null) { // Comparo datos
            
                                $modelo = $variable_modelo['marca'];
                                echo "<h3>".$modelo."</h3>";
            
                                } else {
                                $no_rc = "No tienes RC Registrados";
                                echo "<h3>".$no_rc."</h3>";
                                }
                            ?>
                    </div>
                </div>
            </div>
            <!-------------------------------------------------------->
            <!--             Fin  Contenido de interfaz ppal        -->
            <!-------------------------------------------------------->
        </section>
    </main>
    <footer></footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
    <script type="text/javascript" src="../JS/main-interfazppal.js"></script>
</body>

</html>