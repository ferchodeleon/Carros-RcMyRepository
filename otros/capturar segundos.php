<?php
 capturahora();
function capturahora(){
	$hoy = getdate();

$seg= $hoy[seconds];
$min= $hoy[minutes];

$tiempo= "$min:$seg";
echo $tiempo;
}

 

?>
