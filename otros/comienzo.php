<FORM ACTION="" mehod=post>
digite el nombre de la carrera <input type=text  name=carrera><br>
digite el lugar <input type=text  name=lugar><br>
seleccione fecha <input type=date name=fecha><br>
digite el numero de competidores <input type=number min="1" max="10" name=compe><br>
digite el numero de vueltas <input type=number min="1" max="10" name=vueltas><br>
<input type=submit value=enviar name=enviar>

<?php
$compe=$_REQUEST['compe'];
$vueltas=$_REQUEST['vueltas'];
$carrera=$_REQUEST['carrera'];
$lugar=$_REQUEST['lugar'];
$fecha=$_REQUEST['fecha'];
$envio=$_REQUEST['enviar'];
/*for($i=0;$i<=$compe;$i++){
	registracompe();
	echo $i;
}*/
if($envio){
	registracompe($compe, $vueltas, $carrera, $lugar, $fecha);
}


function registracompe($compe, $vueltas, $carrera, $lugar, $fecha){
	echo "insert into carrera values('','$carrera', '$lugar','$fecha', $vueltas, $compe)";
	
	
}

?>
