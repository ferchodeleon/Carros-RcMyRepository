<?php 
include 'conexion.php';

if(isset($_REQUEST['cedula'])){

$cedula = $_REQUEST['cedula'];
$nombre = $_REQUEST['apellido'];
$apellido = $_REQUEST['apellido'];
$correo = $_REQUEST['correo'];
$direccion = $_REQUEST['direccion'];
$telefono = $_REQUEST['telefono'];
$tipo_doc = $_REQUEST['tipo'];
$usua = $_REQUEST['user'];
$pass = $_REQUEST['pass'];


$nombre_img = $_FILES['imagen']['name'];
$tipo_imagen = $_FILES['imagen']['type'];
$tama_imagen = $_FILES['imagen']['size'];


$carpeta_ser = $_SERVER['DOCUMENT_ROOT'].'/registro/img_ser/';
move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_ser.$nombre_img);


 $q = mysqli_query($conexion,"SELECT * FROM propietario WHERE ced = '$cedula'");

 if( mysqli_num_rows($q) == 0){
 	 $consulta ="insert into propietario values ($cedula,'$nombre','$apellido','$correo',$telefono,'$direccion','$tipo_doc','$usua','$pass','$nombre_img');";

 	 $insertar = mysqli_query($conexion,$consulta) or die("error al insertar");
 	 echo "<br>se inserto";
 }else{
 	echo "<br>El usuario existe";
 }
}


?>