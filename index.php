<?php session_start();
	if (isset($_SESSION['usuario'])) {
		header('Location: PHP/rol.php');
	} else {
		header('Location: PHP/inicio-sesion.php');
	}
?>