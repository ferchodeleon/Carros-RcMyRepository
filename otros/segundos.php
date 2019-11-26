



<html>
<head>
 <title>Cronometro de carrera</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script type="text/javascript">

    //setInterval
    var cronometro;
	var contador_d =0;
	var contador_s =0;
    var contador_m =0;
    function detenerse()
    {
        clearInterval(cronometro);
    }
    function carga()
    {
        d = document.getElementById("decimas");
        s = document.getElementById("segundos");
        m = document.getElementById("minutos");
        cronometro = setInterval(
            function(){
                if(contador_s==60)
                {
                    contador_s=0;
                    contador_m++;
                    m.innerHTML = contador_m;
                    if(contador_m==60)
                    {
                        contador_m=0;
                    }
                }
                s.innerHTML = contador_s;
                contador_s++;
            }
            ,100);
			
    }
	function mostrar(){
		seg = document.getElementById("mostrars");
        min = document.getElementById("mostrarm");
		seg.innerHTML = contador_s;
		min.innerHTML = contador_m;
		//window.alert(contador_m+" : "+contador_s);
	}
    </script>
</head>
<style>

.btn-success{
	width:100px;
	border-radius: 	100px;
}
.btn-info{
	width:100px;
	border-radius: 	100px;
}
.btn-danger{
	width:100px;
	border-radius: 	100px;
}
.jumbotron{

background-color:#000;
color:#FFFF00;
font-family: 'Bauhaus 93';
}
.letra{

    font-size:50px;


}
body{

background: url(IMAGEN3.png) no-repeat fixed center;
background-size: cover;
        -moz-background-size: cover;
        -webkit-background-size: cover;
        -o-background-size: cover;
}
</style>

<body >
<center><div class='jumbotron'>
<h1>Cronometro de la carrera</h1>
</div> </center>
<center>
    <p>
    <br>
    <span id="minutos" class="letra">0</span><span class='letra'>:</span><span id="segundos" class="letra">0</span>
    </p>
	<input type="button" onclick="carga()" class="btn btn-success" value="Arrancar"/>
	<input type="button" onclick="mostrar()" class="btn btn-info" value="Mostrar"/>
    <input type="button" onclick="detenerse()" class="btn btn-danger" value="Detenerse"/>

	<p>
    <br>
        <span id="mostrarm" class="letra">0</span><span class='letra'>:</span><span id="mostrars" class="letra">0</span>
        </center> </p>
</body>
</html>
