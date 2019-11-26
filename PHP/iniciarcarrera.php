<html>

<head>
    <title>Cronometro de carrera</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/style.css">

</head>

<body class="backgroundFormCarrera">

    <div class='jumbotron'>
        <h1>Cronometro de la carrera</h1>
    </div>
    
    <div class="btnvolver">
        <button><a href="interfaz-admin.php"><i class="fa fa-arrow-left"></i></a></button>
    </div>
    <center>
        <div class='jumbotronn'>
            <p>
                <br>
                <span id="minutos" class="letra">0</span> <!--	impresión del cronometro	-->
                <span id="dosPuntos" class='letra'>:</span>
                <span id="segundos" class="letra">0</span>
            </p>
            <input type="button" id="bottonArrancar" onclick="carga()" class="btn btn-success" value="Arrancar" />
            <input type="button" id="bottonMostrar" onclick="mostrar()" class="btn btn-info" value="Mostrar" />
            <input type="button" id="bottonDetener" class="btn bottonDetener btn-danger" onclick="detenerse()" value="Detenerse" />
            <p>
                <br>
                <span id="mostrarm" class="letra">0</span>
                <span id="dosPuntoss" class='letra'>:</span>
                <span id="mostrars" class="letra">0</span>
            </p>
        </div>

        <div id="clicks">
            <div id="boton_1" onclick="boton1()"></div>
            <div id="boton_2" onclick="boton2()"></div>
            <div id="boton_3" onclick="boton3()"></div>
            <div id="boton_4" onclick="boton4()"></div>
            <div id="boton_5" onclick="boton5()"></div>
            <div id="boton_6" onclick="boton6()"></div>
            <div id="boton_7" onclick="boton7()"></div>
            <div id="boton_8" onclick="boton8()"></div>
            <div id="boton_9" onclick="boton9()"></div>
            <div id="boton_10" onclick="boton10()"></div>

            <?php
                if(isset($_REQUEST['participantes'])){
                    $part = $_REQUEST['participantes'];
                    echo "<button id=\"btnIniciar\" class=\"btn btn-info\" onclick=\"iniciar(".$part.")\">INICIAR</button>";
                }else{
                    header('Location: interfaz-admin.php');
                }
            ?>
            
            <br>
            <input id="btnReload" class="btn btn-danger" onclick="reload()" value="Recargar datos" />
        </div>
    </center>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="../js/scriptCarrera.js"></script>

</html>
